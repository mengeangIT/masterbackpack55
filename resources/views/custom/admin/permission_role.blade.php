@php
    $id = $crud->entry != null?$crud->entry->id:0;

   $mpp = $id > 0? \App\PermissionRole::where('role_id',$id)->pluck('permission_id')->toArray():[];



$permissions = \App\Permission::all();
@endphp

<table class="table">
    <thead>
    <tr style="background-color: #0b0b0b;color: white;">
        <th>
            {{--<input type="checkbox" class="check-all">--}}
        </th>
        <th>Display Name</th>
        <th>Description</th>
        <th width="50%"></th>
    </tr>
    </thead>
    <tbody>
    @php
        $oldd = '';
    @endphp
    @foreach($permissions as $permission)
        @php
        $checked = '';
        if(count($mpp)>0){
            $checked =  in_array($permission->id,$mpp)?' checked="checked" ' :'';
        }

        $arr_pp = explode('-',$permission->name);
        $new = $arr_pp[0];
        @endphp

        @if($oldd != $new && isset($arr_pp[1]))
            <tr style="background-color: rgba(252,204,0,0.27);">
                <td colspan="4"><b>{{strtoupper($new)}}</b></td>
            </tr>
        @endif
        @php
            $oldd = $new;
        @endphp
            <tr @if(!isset($arr_pp[1])) style="background-color: rgba(0,249,255,0.18);"  @endif  >
                <td>
                    <input {!! $checked !!}  type="checkbox" value="{{$permission->id}}" id="permission{{$permission->id}}" name="permission[{{$permission->id}}]">
                </td>
                <td><label for="permission{{$permission->id}}">{{$permission->display_name}} @if(!isset($arr_pp[1])) Report  @endif  </label></td>
                <td><label for="permission{{$permission->id}}">{{$permission->description}}</label></td>
                <td></td>
            </tr>
    @endforeach
    </tbody>
</table>