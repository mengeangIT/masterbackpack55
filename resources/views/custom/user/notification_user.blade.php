<?php
$user_id = isset($crud->entry->id) ? $crud->entry->id : 0;
$entity_model = '\App\UserNotification';
$user_notifications = [];
?>

@if($user_id>0)
    <?php $user_notifications = \App\UserNotification::where('user_id', $user_id)->get(); ?>
@endif

@if (count($entity_model::getPossibleEnumValues('notification_type')))
    <div @include('crud::inc.field_wrapper_attributes') >
        <label>{{ _t('notification') }}</label>
        @include('crud::inc.field_translatable_icon')

        <div class="row">
            @foreach ($entity_model::getPossibleEnumValues('notification_type') as $possible_value)
                <div class="col-sm-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"
                                   name="notification_type[]"
                                   value="{{ $possible_value }}"
                                   @if($user_id>0)
                                   @if(count($user_notifications)>0)
                                   @foreach($user_notifications as $row_n)
                                   @if($row_n->notification_type == $possible_value)
                                   checked="checked"
                                    @endif
                                    @endforeach
                                    @endif
                                    @endif

                            > {!! _t($possible_value,'enum') !!}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
@endif
