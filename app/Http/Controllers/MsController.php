<?php

namespace App\Http\Controllers;

use App\Models\TblApplyJob;
use App\Models\TblCard;
use App\Models\TblCardCategory;
use App\Models\TblCategory;
use App\Models\TblContact;
use App\Models\TblPostJob;
use App\Models\TblProduct;
use App\Models\TblPromotion;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class MsController extends Controller
{
    public function home()
    {
        return view('ms.home.index');
    }

    function menuRestaurant(Request $request,$select = null)
    {
        $lang_file = 'ms_menu';
        $keyword = $request->input('keyword');
        $itemCategories = TblCategory::where('status', '=','ACTIVE')->get();
        $categoryName = _t('vegetable_and_mushroom',$lang_file);
        $image = '';
        if ($keyword) {
            $categoryName = $keyword;
            $image = 'search.svg';
        } else {
            foreach ($itemCategories as $row) {
                if ($row->id - 0 == $select - 0) {
                    $categoryName = $row->cat_des_en;
                    $image_a = $row->image;
                    if ($image_a > 0) $image = $image_a[0];
                }
            }
        }
        return view('ms.menu.restaurant', ['itemCategories' => $itemCategories, 'select' => $select, 'categoryName' => $categoryName, 'image' => $image,'keyword' => $keyword,'select1'=>'Healthy Menu']);
    }

    function itemRestaurant(Request $request){

        $category_id = $request->id - 0;
        $prom = $request->prom - 0;
        $_items = TblProduct::orderBy('id', 'desc')->where('status', '=','ACTIVE');
        if ($category_id > 0) {
            $_items->where('pro_cate', $category_id);
        } else {
            $_items->where('status', '=','ACTIVE');
        }
        $items = $_items->paginate(20);
        $items->appends('id', $category_id);
        return view('ms.menu.item_restaurant.index', ['items' => $items]);
    }

    function menuDelivery(Request $request, $select = null)
    {
        $lang_file = 'ms_menu';
        $keyword = $request->input('keyword');
        $itemCategories = TblCategory::where('status', '=','ACTIVE')->get();
        $categoryName = _t('promotion',$lang_file);
        $image = '';
        if ($keyword) {
            $categoryName = $keyword;
            $image = 'search.svg';
        } else {
            foreach ($itemCategories as $row) {
                if ($row->id - 0 == $select - 0) {
                    $categoryName = $row->cat_des_en;
                    $image_a = $row->image;
                    if ($image_a > 0) $image = $image_a[0];
                }
            }
        }
        return view('ms.menu.delivery',['itemCategories' => $itemCategories, 'select' => $select, 'categoryName' => $categoryName, 'image' => $image, 'keyword' => $keyword,'select1'=>'Healthy Menu']);
    }

    function itemDelivery(Request $request){
        $category_id = $request->id - 0;
        $prom = $request->prom - 0;
        $_items = TblProduct::orderBy('id', 'desc')->where('status', '=','ACTIVE');
        if ($category_id > 0) {
            $_items->where('pro_cate', $category_id);
        } else {
            $_items->where('pro_promotion', '=','ACTIVE');
        }
        $items = $_items->paginate(20);
        $items->appends('id', $category_id);
        return view('ms.menu.item_delivery.index', ['items' => $items]);
    }

    function map(){
        return view('ms.map.index');
    }

    function about(){
        return view('ms.about.index');
    }

    function card($select = null){
        $card_categories = TblCardCategory::where('status','=','ACTIVE')->get();

        return view('ms.card.index', ['card_categories' => $card_categories, 'select' => $select,'select1'=>'MS Card']);
    }

    function cardDetail($id){
       return view('ms.card.detail', ['card' => TblCard::find($id)]);
    }

    function career($select = null){
        $careers = TblPostJob::where('status','ACTIVE')
            ->paginate(5);
        return view('ms.career.index',['careers'=>$careers, 'select' => $select,'select1'=>'MS Career']);
    }

    function postApplyJob(Request $request)
    {
        $job = new TblApplyJob();
        $job->position_id = $request->input('position_id');
        $job->name = $request->input('name');
        $job->salary = $request->input('salary', 0) - 0;
        $job->phone = $request->input('phone');
        $job->email = $request->input('email');

        if ($request->hasFile('resume')) {
            $destination = 'resumes';
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $fname = rand(11111, 99999) . '_' . time() . '.' . $extension;
            $file->move($destination, $fname);
            $job->resume = $fname;
        }

        $job->start_work = $request->input('start_work');
        $job->national_id = $request->input('national_id');

        if ($job->save()) {
//            \Mail::to('hr@mastersukisoup.com')
//                ->send(new PostJob($job));
            return Redirect('/home');
        } else {
            return Redirect('/career');
        }
    }

    function concept(){
        return view('ms.concept.index');
    }

    function branch(){
        return view('ms.map.index');
    }

    function contact(){
      return view('ms.contact.index');
    }

    function postContact(Request $request){
        $contact = new TblContact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->detail = $request->input('detail');
        if ($contact->save()) {
            return Redirect('/');
        } else {
            return Redirect('/contact');
        }
    }

    function copyright(){
        return view('ms.copyright.index');
    }

    function feedback(){
        return view('ms.feedback.index');
    }

    function promotion(){
        $promotions = TblPromotion::where('status','=','ACTIVE')->get();
        return view('ms.promotion.index', ['promotions' => $promotions,'select1'=>'Promotion']);
    }

    function promotionDetail($id){
        return view('ms.promotion.detail', ['promotion' => TblPromotion::find($id)]);
    }
//    =========shopping to card===============
    function addCart(Request $request)
    {
        if ($request->ajax()) {
            if (Cart::add($request->input('id'), $request->input('name'), 1, $request->input('price'), ['image' => $request->input('image')])) {
                return Cart::content();
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    function getCart()
    {
        return Cart::content();
    }

    function removeCart(Request $request)
    {
        if ($request->ajax()) {
            Cart::remove($request->input('rowid'));
            return Cart::content();
        } else {
            return null;
        }
    }

    function updateCart(Request $request)
    {
        if ($request->ajax()) {
            $a = Cart::get($request->input('rowid'));
            if ($request->input('ty') == 'up') {
                Cart::update($request->input('rowid'), $a->qty - 0 + 1);
            } else {
                Cart::update($request->input('rowid'), $a->qty - 0 - 1);
            }
            return Cart::content();
        } else {
            return null;
        }
    }

    function updateCart1(Request $request)
    {
        if ($request->ajax()) {
            Cart::update($request->input('rowid'), $request->input('qty'));
            return Cart::content();
        } else {
            return null;
        }
    }

    function destroyCart(Request $request)
    {
        if ($request->ajax()) {
            Cart::destroy($request->input('rowid'));
            return Cart::content();
        } else {
            return null;
        }
    }

    function totalQty()
    {
        return Cart::count();
    }
//    =========end shopping to card===============
}
