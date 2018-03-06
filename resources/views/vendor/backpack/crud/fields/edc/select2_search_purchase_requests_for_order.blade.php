<!-- select2 from ajax -->
@php
    $r_id = rand(1,9999);
    $location_group = isset($field['location_group'])?strtolower($field['location_group']):'location_group';
    $f_id = isset($field['name'])? str_replace(']','',str_replace('[','',$field['name'])) :'location_group_id';
    $connected_entity = new $field['model'];
    $connected_entity_key_name = $connected_entity->getKeyName();
    $old_value = old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : false ));

    $purchase_requests_id = isset($crud->entry->purchase_requests_id)?$crud->entry->purchase_requests_id:0;
@endphp

<div @include('crud::inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    <?php $entity_model = $crud->model; ?>

    <select
            name="{{ $field['name'] }}"
            style="width: 100%"
            id="select2_ajax_{{ $f_id.$r_id }}"
            @include('crud::inc.field_attributes', ['default_class' =>  'form-control'])
    >

        @if ($old_value)
            @php
                $item = $connected_entity->find($old_value);
            @endphp
            @if ($item)
                <option value="{{ $item->getKey() }}" selected>
                    {{ $item->{$field['attribute']} }}
                </option>
            @endif
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>

<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Purchase Request Detail</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="purchase_request_detail">

            @if($purchase_requests_id > 0)
                <?php
                $purchase_requests = \App\Models\PurchaseRequest::find($crud->entry->purchase_requests_id);
                ?>
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <address>
                                <strong>Request Number : </strong>{{$purchase_requests->request_number}}
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <address>
                                <strong>Request By : </strong>{{$purchase_requests->request_by_id}}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <address>
                                <strong>Request By : </strong> {{$purchase_requests->request_date->format('d/m/Y')}}
                            </address>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                    </div>

                    <div class="pad margin no-print">
                        <div class="callout callout-info" style="margin-bottom: 0!important;">
                            <h4><i class="fa fa-info"></i> Note:</h4>
                            {{$purchase_requests->node}}
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th style="width: 100px">qty</th>
                            <th style="width: 100px">price</th>
                        </tr>
                        <?php
                            $p_nom = 0;
                        ?>
                        @foreach($purchase_requests->purchase_request_details as $row)
                            <tr>
                                <td>{{++$p_nom}}</td>
                                <td>{{isset($row['name'])?$row['name']:''}}</td>
                                <td>{{isset($row['qty'])?$row['qty']:''}}</td>
                                <td>{{isset($row['price'])?$row['price']:''}}</td>

                            </tr>
                        @endforeach
                    </table>

            @endif

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <!-- include select2 css-->
        <link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
              rel="stylesheet" type="text/css"/>
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- include select2 js-->
        <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    @endpush

@endif

<!-- include field specific select2 js-->
@push('crud_fields_scripts')
    <script>
        jQuery(document).ready(function ($) {
            // trigger select2 for each untriggered select2 box
            $("#select2_ajax_{{ $f_id.$r_id }}").each(function (i, obj) {
                if (!$(obj).hasClass("select2-hidden-accessible")) {
                    $(obj).select2({
                        theme: 'bootstrap',
                        multiple: false,
                        placeholder: "{{ $field['placeholder'] }}",
                        minimumInputLength: "{{ $field['minimum_input_length'] }}",
                        ajax: {
                            url: "{{ $field['data_source'] }}",
                            dataType: 'json',
                            quietMillis: 250,
                            data: function (params) {
                                return {
                                    q: params.term, // search term
                                    page: params.page
                                };
                            },
                            processResults: function (data, params) {
                                params.page = params.page || 1;
                                var result = {
                                    results: $.map(data.data, function (item) {
                                        textField = "{{ $field['attribute'] }}";
                                        return {
                                            text: item["request_number"] + ' - ' + item["request_date"],
                                            id: item["id"]
                                        }
                                    }),
                                    more: data.current_page < data.last_page
                                };

                                return result;
                            },
                            cache: true
                        },
                    }).on('change', function () {
                        var q_request_id = $(this).val();

                        $.ajax({
                            method: "GET",
                            url: "{{ $field['data_source'] }}" + "/" + q_request_id,
                            dataType: "json",
                            success: function (obj) {

                                var my_html = '<div class="row invoice-info">\n' +
                                    '                <div class="col-sm-4 invoice-col">\n' +
                                    '                    <address>\n' +
                                    '                        <strong>Request Number : </strong>'+obj.request_number+'\n' +
                                    '                    </address>\n' +
                                    '                </div>\n' +
                                    '\n' +
                                    '                <div class="col-sm-4 invoice-col">\n' +
                                    '                    <address>\n' +
                                    '                        <strong>Request By : </strong>'+obj.request_by_id+'\n' +
                                    '                    </address>\n' +
                                    '                </div>\n' +
                                    '                <!-- /.col -->\n' +
                                    '                <div class="col-sm-4 invoice-col">\n' +
                                    '                    <address>\n' +
                                    '                        <strong>Request By : </strong> '+obj.request_date+'\n' +
                                    '                    </address>\n' +
                                    '                </div>\n' +
                                    '                <!-- /.col -->\n' +
                                    '                <!-- /.col -->\n' +
                                    '            </div>' +
                                    ' <div class="pad margin no-print">\n' +
                                    '                <div class="callout callout-info" style="margin-bottom: 0!important;">\n' +
                                    '                    <h4><i class="fa fa-info"></i> Note:</h4>\n' +
                                    '                    '+obj.node+'\n' +
                                    '                </div>\n' +
                                    '            </div>' +
                                    ' <table class="table table-bordered">\n' +
                                    '                <tr>\n' +
                                    '                    <th style="width: 10px">#</th>\n' +
                                    '                    <th>Name</th>\n' +
                                    '                    <th style="width: 100px">qty</th>\n' +
                                    '                    <th style="width: 100px">price</th>\n' +
                                    '                </tr>';

                                var my_no = 0;
                                $.each(obj.purchase_request_details, function (name, value) {
                                    if (value.name){
                                        my_html += '<tr>\n' +
                                            '                    <td>'+(++my_no)+'</td>\n' +
                                            '                    <td>'+value.name+'</td>\n' +
                                            '                    <td>\n' +
                                            '                            '+value.qty+'\n' +
                                            '                    </td>\n' +
                                            '                    <td>'+value.price+'</td>\n' +
                                            '                </tr>';
                                    }
                                });
                                my_html +='</table>';
                                $('#purchase_request_detail').html(my_html);
                            }
                        });

                    });
                }
            });
        });
    </script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
