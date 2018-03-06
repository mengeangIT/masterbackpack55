@php
    $id = $crud->entry != null?$crud->entry->id:0;

   $mpp = $id > 0? \App\RoleUser::where('user_id',$id)->pluck('role_id')->toArray():[];

$roles = \App\Role::all();
@endphp


@if(can('role-create') || can('role-edit') || can('role-delete'))
<table class="table">
    <thead>
    <tr>
        <th>
            {{--<input type="checkbox" class="check-all">--}}
        </th>
        <th>Display Name</th>
        <th>Description</th>
        <th width="50%"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        @php
        $checked = '';
        if(count($mpp)>0){
            $checked =  in_array($role->id,$mpp)?' checked="checked" ' :'';
        }
        @endphp
            <tr>
                <td>
                    <input {!! $checked !!}  type="checkbox" value="{{$role->id}}" id="permission{{$role->id}}" name="permission[{{$role->id}}]">
                </td>
                <td><label for="permission{{$role->id}}">{{$role->display_name}}</label></td>
                <td><label for="permission{{$role->id}}">{{$role->description}}</label></td>
                <td></td>
            </tr>

    @endforeach
    </tbody>
</table>
@endif