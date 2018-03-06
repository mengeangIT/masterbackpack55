<!-- text input -->
<?php
$arrays = isset($field['array']) ? $field['array'] : [];

$value=old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : null ));

?>
@if(count($arrays)>0)
    @foreach($arrays as $array)
        <?php

        $f_name = $field['name'].'['.$array['name'].']';
        //dd($array);
        ?>
        <div @include('crud::inc.field_wrapper_attributes') >
            <label>{!! $array['label'] !!}</label>
            @include('crud::inc.field_translatable_icon')

            @if(isset($array['prefix']) || isset($array['suffix']))
                <div class="input-group"> @endif
                    @if(isset($array['prefix']))
                        <div class="input-group-addon">{!! $array['prefix'] !!}</div> @endif
                    <input
                            type="text"
                            name="{{ $f_name }}"
                            value="{{ isset($value->{$array['name']})?$value->{$array['name']}:'' }}"
                            {!! isset($array['group'])?$array['group']:'' !!}
                            @include('crud::inc.field_attributes')
                    >
                    @if(isset($array['suffix']))
                        <div class="input-group-addon">{!! $array['suffix'] !!}</div> @endif
                    @if(isset($array['prefix']) || isset($array['suffix'])) </div> @endif

            {{-- HINT --}}
            @if (isset($array['hint']))
                <p class="help-block">{!! $array['hint'] !!}</p>
            @endif
        </div>
    @endforeach
@endif

{{-- FIELD EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

{{-- @push('crud_fields_styles')
    <!-- no styles -->
@endpush --}}


{{-- FIELD EXTRA JS --}}
{{-- push things in the after_scripts section --}}


@push('crud_fields_scripts')
    <!-- include select2 js-->
    @if(isset($field['js_path']))
        <script src="{{ asset('js/admin/'.$field['js_path']) }}?v={{$version}}"></script>
    @endif

@endpush

{{-- Note: you can use @if ($crud->checkIfFieldIsFirstOfItsType($field, $fields)) to only load some CSS/JS once, even though there are multiple instances of it --}}