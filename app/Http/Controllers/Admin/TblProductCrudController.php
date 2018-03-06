<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TblProductRequest as StoreRequest;
use App\Http\Requests\TblProductRequest as UpdateRequest;

class TblProductCrudController extends CrudController
{
    public function setup()
    {
        $lang_file = 'product';
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\TblProduct');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tblproduct');
        $this->crud->setEntityNameStrings('tblproduct', 'tbl_products');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

//        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([    // TEXT
            'name' => 'pro_cate',
            'label' => _t('pro_cate',$lang_file),
            'type' => 'select',
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\TblCategory",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([    // TEXT
            'name' => 'pro_type',
            'label' => _t('pro_type',$lang_file),
            'type' => 'select',
            'entity' => 'type',
            'attribute' => 'title',
            'model' => "App\Models\TblType",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([
            'name' => 'pro_code',
            'label' => _t('pro_code',$lang_file),
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([
                'name' => 'title',
                'label' => _t('title',$lang_file),
                'type' => 'text',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ],
                'attributes' => [
                    'class' => 'form-control'
                ],
        ]);
        $this->crud->addField([
            'name' => 'qty',
            'label' => _t('qty',$lang_file),
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control',
                'number' => 'number'
            ],
        ]);
        $this->crud->addField([
            'name' => 'price',
            'label' => _t('price',$lang_file),
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control',
                'number' => 'number'
            ],
        ]);
        $this->crud->addField([
            'name' => 'kalory',
            'label' => _t('kalory',$lang_file),
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control',
                'number' => 'number'
            ],
        ]);
        $this->crud->addField([
            'name' => 'pro_promotion',
            'label' => _t('pro_promotion',$lang_file),
            'type' => 'enum',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);
        $this->crud->addField([
            'name' => 'description',
            'label' => _t('description',$lang_file),
            'type' => 'textarea',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);

        $this->crud->addField([ // image
            'label' => _t('image',$lang_file),
            'name' => "image",
            'type' => 'image2',
            'default' => asset('No_Image_Available.jpg'),
            'tab' => 'Image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 240/220, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

        $this->crud->addField([
            'name' => 'in_putter',
            'label' => _t('in_putter',$lang_file),
            'type' => 'text',
            'value' => auth()->user()->name,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            'attributes' => [
                'class' => 'form-control',
                'readonly' => 'readonly'
            ],
        ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => _t('status',$lang_file),
            'type' => 'enum',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
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
            'label' => _t('pro_cate',$lang_file),
            'type' => 'select',
            'name' => 'pro_cate',
            'entity' => 'category',
            'attribute' => 'title',
            'model' => "App\Models\TblCategory",
        ]);

        $this->crud->addColumn([
            'label' => _t('pro_type',$lang_file),
            'type' => 'select',
            'name' => 'pro_type',
            'entity' => 'type',
            'attribute' => 'title',
            'model' => "App\Models\TblType",
        ]);

        $this->crud->addColumn([
            'name' => 'pro_code',
            'label' => _t('pro_code',$lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => _t('title',$lang_file),
        ]);

        $this->crud->addColumn([
            'name' => 'qty',
            'label' => _t('qty',$lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'price',
            'label' => _t('price',$lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'kalory',
            'label' => _t('kalory',$lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'pro_promotion',
            'label' => _t('pro_promotion',$lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'image',
            'label' => _t('image',$lang_file),
            'type' => 'image2',
            'attributes' => [
                // 'als' => 'Image',
                'class' => '',
                'style' => 'width: 60px; height: 40px',
            ],
            'link' => true,
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addColumn([
            'name' => 'in_putter',
            'label' => _t('in_putter',$lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => _t('status',$lang_file),
            'type' => 'enum'
        ]);
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
