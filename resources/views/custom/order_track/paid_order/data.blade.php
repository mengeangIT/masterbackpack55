@if(count($rows) > 0)
    <table class="table table-hover" border="1" style="border-color: #CCCCCC">
        <tr style="background-color: #7B7777; color: white;border-color: #CCCCCC">
            <th class="text-center">Nº</th>
            <th class="text-center">{{_t('total qty')}}</th>
            <th class="text-center">{{_t('name')}}</th>
            <th class="text-center">{{_t('phone')}}</th>
            <th class="text-center">{{_t('date')}}</th>
            <th class="text-center">{{_t('time')}}</th>
            <th class="text-center">{{_t('Total Payable')}}</th>
            <th class="text-center"  style="width: 9px;">Status</th>
            <th class="text-center"  style="width: 9px;"></th>
        </tr>
        @php
            $count = 1;
        @endphp
        @foreach($rows as $row)
            <tr style="@if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
                <td class="text-left">{{ (($rows->currentPage()-1)*$rows->perPage())+$count++ }}</td>
                <td class="text-left">{{$row->total_qty }}</td>
                <td class="text-left">{{$row->name }}</td>
                <td class="text-left">{{$row->phone }}</td>
                <td class="text-center">{{\Carbon\Carbon::parse($row->date)->format('d/m/Y') }}</td>
                <td class="text-left">{{$row->time}}</td>
                <td class="text-right">{{$row->total_payable }}</td>
                <td class="text-center">
                    @if($row->status == 'PAID')
                        <span class="label label-sm label-danger">{{_t('paid')}}</span>
                    @else
                    @endif
                </td>

                <td class="text-right">
                    <button type="button" class="btn btn-block btn-info btn-xs">
                        <a href="{{url('/admin/order-detail').'/'.$row->order_id}}"><i
                                    class="fa fa-eye"></i>
                        </a>
                    </button>

                    @if($row->status == 'PAID')
                        <button type="button" class="btn btn-block btn-warning btn-xs">
                            <a data-id="" href="javascript:;"
                               class="btn-unpaid-option" data-idp="{{$row->order_id}}">
                                <i class="fa fa-usd"></i>
                            </a>
                        </button>
                    @else
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <div align="center" class="my-paginate" >
        {{ $rows->links() }}
    </div>
@else

@endif