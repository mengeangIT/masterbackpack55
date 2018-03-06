<?php

namespace App\Http\Controllers\Admin;

use App\Models\TblOrder;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TblOrderRequest as StoreRequest;
use App\Http\Requests\TblOrderRequest as UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class TblOrderCrudController extends CrudController
{
    public function loadOrderNotification(){
        $m = TblOrder::orderBy('id','desc')->where('view_alert','=','0')->limit(30)->get();
        return response()->json($m);
    }

    public function allOrder()
    {
        return view('custom.order_track.all_order.form');
    }
    public function allOrderData(Request $request)
    {
        $q = $request->q;
        $rows = TblOrder::allOrderData($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('custom.order_track.all_order.data',['rows'=>$rows]);
    }


    public function newOrder()
    {
        return view('custom.order_track.new_order.form');
    }
    public function newOrderData(Request $request)
    {
        $q = $request->q;
        $rows = TblOrder::newOrderData($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('custom.order_track.new_order.data',['rows'=>$rows]);
    }

    public function paidOrder()
    {
        return view('custom.order_track.paid_order.form');
    }
    public function paidOrderData(Request $request)
    {
        $q = $request->q;
        $rows = TblOrder::paidOrderData($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('custom.order_track.paid_order.data',['rows'=>$rows]);
    }

    public function cancelOrder()
    {
        return view('custom.order_track.cancel_order.form');
    }
    public function cancelOrderData(Request $request)
    {
        $q = $request->q;
        $rows = TblOrder::cancelOrderData($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('custom.order_track.cancel_order.data',['rows'=>$rows]);
    }


    public function postCancel(Request $request){

        if ($request->ajax()){
            if (DB::table('tbl_orders')->where('id', Input::get('rowid'))->update(array('status' => 'CANCEL'))){
                return 'success';
            }else{
                return 'unsuccess';
            }
        }else{
            return 'no ajax';
        }
    }
    public function postPaid(Request $request){
        if ($request->ajax()){
            if (DB::table('tbl_orders')->where('id', Input::get('rowid_'))->update(array('status' => 'PAID'))){

                return 'sucess';
            }else{
                return 'unsucess';
            }
        }else{
            return ('no ajax');
        }
    }

    public function postUncancel(Request $request){
        if ($request->ajax()){
            $a = TblOrder::find(Input::get('rowid'));
            $a->status = 'NEW';

            if ($a->save()){
                return 'sucess';
            }else{
                return 'unsucess';
            }
        }else{
            return ('no ajax');
        }
    }
    public function postUnpaid(Request $request){
        if ($request->ajax()){
            $p = TblOrder::find(Input::get('rowid_'));
            $p->status = 'NEW';

            if ($p->save()){
                return 'sucess';
            }else{
                return 'unsucess';
            }
        }else{
            return ('no ajax');
        }
    }

    public function orderDetail($id=null){
        if ($id != null){
            $last_invoice = TblOrder::max('id');

            $rows = TblOrder::find($id);
            if ($rows != null){
                $rows->increment('view_alert');

                if ($rows->id == 0){
                    $rows->id = $last_invoice + 1;
                    $rows->save();
                }
            }

            return view('custom.order_track.detail_order.form',['rows'=>$rows]);
        }else{
            return redirect('/admin/all-order');
        }

    }
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\TblOrder');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tblorder');
        $this->crud->setEntityNameStrings('tblorder', 'tbl_orders');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
