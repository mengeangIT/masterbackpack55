<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CustomerRequest as StoreRequest;
use App\Http\Requests\CustomerRequest as UpdateRequest;

class CustomerCrudController extends CrudController
{
    public function changePass(Request $request){
        $row = Customer::find($request->id);
        return view('custom.customer.change-pass',['row' => $row]);
    }
    public function changePassSave(Request $request){
        $id = $request->id;

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('admin/customer')
                ->withErrors($validator)
                ->withInput();
        }

        $m = Customer::find($id);

        if($m != null)
        {
            $m->password =  bcrypt($request->password);
            $m->save();
        }

        return redirect('admin/customer');
    }

    public function index2(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');
        if ($search_term)
        {
            $results = Customer::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = Customer::paginate(10);
        }
        return $results;
    }
    public function show2($id)
    {
        return Customer::find($id);
    }
    public function getPhones() {
        $term = $this->request->input('term');
        $options = Customer::where('phone', 'like', '%'.$term.'%')->get();
        return $options->pluck('phone', 'phone');
    }
    public function getName() {
        $term = $this->request->input('term');
        $options = Customer::where('name', 'like', '%'.$term.'%')->get();
        return $options->pluck('name', 'name');
    }

    public function setup()
    {
        $lang_file = 'customer';
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Customer');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/customer');
        $this->crud->setEntityNameStrings('customer', 'customers');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

//        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
            'label' => _t('name', $lang_file),
            //'tab' => 'Information',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([
            'name' => 'phone',
            'label' => _t('phone', $lang_file),
            //'tab' => 'Information',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([
            'name' => 'password',
            'label' => _t('password', $lang_file),
            'type' => 'password',
            //'tab' => 'Information',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([
            'name' => 'password_confirmation',
            'label' => _t('Confirm Password', $lang_file),
            'type' => 'password',
            //'tab' => 'Information',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => _t('name', $lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => _t('phone', $lang_file),
        ]);
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'name',
            'type' => 'select2_ajax',
            'label'=> _t('name',$lang_file),
            'placeholder' => 'Pick a Name'
        ],
            url('admin/ajax-customer-name'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'name', $value);
            });

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'phone',
            'type' => 'select2_ajax',
            'label'=> _t('phone',$lang_file),
            'placeholder' => 'Pick a Phone'
        ],
            url('admin/ajax-customer-phone'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'phone', $value);
            });

        // ------ CRUD BUTTONS
        $this->crud->removeFields(['password','password_confirmation'], 'update');

        $this->crud->addButtonFromModelFunction('line', 'change_password',
            'changePassword', 'beginning');
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1|max:255',
            'phone' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('admin/customer')->withErrors($validator);
        }
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $m = Customer::find( $this->crud->entry->id);
        $m->password = bcrypt($request->password);
        $m->save();

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1|max:255',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/customer')->withErrors($validator);
        }
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
