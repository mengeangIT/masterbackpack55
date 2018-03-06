<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
//use App\UserNotification;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AdminUserRequest as StoreRequest;
use App\Http\Requests\AdminUserRequest as UpdateRequest;

class AdminUserCrudController extends CrudController
{
    public function setup()
    {

        $lang_file = 'admin';
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\AdminUser');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/admin-user');
        $this->crud->setEntityNameStrings('admin user', 'admin users');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        //====================
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => _t('name', $lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => _t('email', $lang_file),
        ]);
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => _t('phone', $lang_file),
        ]);

        $this->crud->addColumn([
            'name' => 'photo',
            'label' => 'photo',
            'type' => 'image2',
            'attributes' => [
                // 'als' => 'Image',
                'class' => '',
                'style' => 'width: 60px; height: 40px',
            ],
            'link' => true,
            // 'disabled' => 'disabled'
        ]);
        //====================
        // ------ CRUD FIELDS

        //===== Information Tab ==
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
            'name' => 'email',
            'label' => _t('email', $lang_file),
            'type' => 'email',
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

        $this->crud->addField([
            'name' => 'notification_user',
            'type' => 'view',
            'view' => 'custom.user.notification_user'
        ]);


        $this->crud->addField([ // image
            'label' => _t('photo', $lang_file),
            'name' => "photo",
            'type' => 'image2',
            'default' => asset('No_Image_Available.jpg'),
            //'tab' => 'Image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

        $this->crud->removeFields(['password', 'password_confirmation'], 'update');


    }

    public function store(StoreRequest $request)
    {
        //dd($request);
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $m = AdminUser::find($this->crud->entry->id);
        $m->password = bcrypt($request->password);
        $m->save();

        if ($this->crud->entry->id > 0) {
            UserNotification::where('user_id',$this->crud->entry->id)->delete();
            if (is_array($request->notification_type)) {
                if (count($request->notification_type) > 0) {
                    foreach ($request->notification_type as $nt) {
                        $mn = new UserNotification();
                        if ($mn != null) {
                            $mn->user_id = $this->crud->entry->id;
                            $mn->notification_type = $nt;

                            $mn->save();
                        }
                    }
                }
            }
        }

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {

        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry


        if ($this->crud->entry->id > 0) {
            UserNotification::where('user_id',$this->crud->entry->id)->delete();
            if (is_array($request->notification_type)) {
                if (count($request->notification_type) > 0) {
                    foreach ($request->notification_type as $nt) {
                        $mn = new UserNotification();
                        if ($mn != null) {
                            $mn->user_id = $this->crud->entry->id;
                            $mn->notification_type = $nt;
                        }
                        $mn->save();
                    }
                }
            }
        }

        return $redirect_location;
    }
}
