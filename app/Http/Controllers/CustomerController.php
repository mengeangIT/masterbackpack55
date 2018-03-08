<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TblOrder;
use App\Models\TblOrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CustomerController extends Controller
{
    function postLogout(Request $request){
        return redirect('/');
    }

    function postCustomerLogin(Request $request){
        $u= Customer::where('name',$request->phone)->orWhere('phone',$request->phone)->first();
        if($u)
        {
            if(\Hash::check($request->password, $u->password))
            {
               // $request->session()->put('mysess',collect($u));
                session(['customer_id'=>$u->id,'customer_name'=>$u->name,'customer_phone'=>$u->phone]);
                return redirect('/menu/delivery');
            }
        }
        return redirect()->back();
    }
    function customerRegister(){
        return view('ms.customer.register');
    }
    function customerRegisterSuccess(){
        return view('ms.customer.register_success');
    }
    function customerLogin(){
        return view('ms.customer.login');
    }
    function forgotPassword(){
        return view('ms.customer.forgot_pass');
    }
    function customerCheckout($id = null)
    {
        if ($id != null) {
            $customers = DB::table('customers')->find($id);
            return view('ms.customer.checkout', ['customers' => $customers]);
        } else {
            return redirect('/menu/delivery');
        }
    }

    function postCustomerCheckout(Request $request)
    {
        $order = new TblOrder();
        $order->cust_id = $request->input('cust_id');
        $order->date = $request->input('date');
        $order->time = $request->input('time');
        $order->total_qty = Cart::count();
        $order->total_amt = $request->input('total_amt');
        $order->total_tax = $request->input('total_tax');
        $order->total_payable = $request->input('total_payable');
//        foreach (Cart::content() as $k => $v) {
//            $d[] = $v;
//            $order->order_detail = json_encode($d);
//        }
        if (Cart::count() - 0 == 0) {
            return redirect('/customer/checkout/' . $request->input('user_id'));
        } else {
            if ($order->save()) {

                foreach (Cart::content() as $k => $v) {
                    $order_detials = new TblOrderDetail();
                    $order_detials->pro_id = $v->id;
                    $order_detials->rowId = $v->rowId;
                    $order_detials->order_id = $order->id;
                    $order_detials->title = $v->name;
                    $order_detials->qty = $v->qty;
                    $order_detials->price = $v->price;
                    $order_detials->image = $v->options->image;
                    if (!$order_detials->save()){
                        alert('Your order is not success, please try again !!!');
                    }
                }
                Cart::destroy();
                return redirect('/customer/checkout-success');
            } else {
                return redirect('/customer/checkout/' . $request->input('user_id'));
            }
        }
    }

    function editCustomerInfo(Request $request)
    {
        $customer = Customer::find(session('customer_id'));

        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');

        if ( $customer->update($request->all())){
            return redirect('/customer/checkout' . '/' . $customer->id);
        }else{
            return redirect('/customer/checkout' . '/' . $customer->id);
        }
    }

    function checkoutSuccess(){
        return view('ms.customer.checkout_success');
    }
    function OrderInfo($id = null)
    {
        if ($id != null) {
            $OrderInfo = TblOrder::orderBy('created_at', 'desc')->where('cust_id', '=', $id)->get();
            return view('ms.customer.your_order', ['OrderInfo' => $OrderInfo, 'phone' => Customer::select('phone')->find($id), 'customer_info' => Customer::find($id)]);
        } else {
            return redirect('/customer/your-order');
        }
    }

    function repeatOrder($id = null, $u_id = null)
    {
        $orderinfo = TblOrder::find($id);
        if ($orderinfo) {
            $order_detail = TblOrderDetail::where('order_id', $orderinfo->id)->get();
            foreach ($order_detail as $k) {
                $order_detail_id = $k->id;
                $order_detail_title = $k->title;
                $order_detail_qty = $k->qty;
                $order_detail_price = $k->price;
                $order_detail_image = $k->image;
                Cart::add($order_detail_id, $order_detail_title, $order_detail_qty, $order_detail_price, ['image' => $order_detail_image]);
            }
            $orderinfo->delete();
            $order_detail__ = TblOrderDetail::where('order_id', $id);
            $order_detail__->delete();
            return redirect('/customer/checkout' . '/' . $u_id);
        }
    }
    function yourOrder(){
        return view('ms.customer.your_order');
    }
    function yourProfile(){
        $id = session('customer_id');
        $customer = Customer::find($id);
        return view('ms.customer.profile',['customer' => $customer]);
    }
    function postProfile(Request $request){
        $customer =  Customer::find(session('customer_id'));
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        if ( $customer->update($request->all())){
            return redirect('/customer/profile');
        }else{
            return redirect('/customer/profile');
        }

    }
    function addressBook(){
        $id = session('customer_id');
        $customer = Customer::find($id);
        return view('ms.customer.address_book',['customer' => $customer]);
    }
    function postAddressBook(Request $request){
        $customer =  Customer::find(session('customer_id'));
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        if ( $customer->update($request->all())){
            return redirect('/customer/address-book');
        }else{
            return redirect('/customer/address-book');
        }
    }
}
