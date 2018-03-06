<td>
    @php
        $img = ($entry->{$column['name']} == '' || $entry->{$column['name']} == null)?
             asset('No_Image_Available.jpg'):
             url('img/cache/small/'.\App\Helpers\ITPC::get_basename($entry->{$column['name']}))  ;

        $imgOrigin = ($entry->{$column['name']} == '' || $entry->{$column['name']} == null)?
             asset('No_Image_Available.jpg'):
             url('img/cache/original/'.\App\Helpers\ITPC::get_basename($entry->{$column['name']}))  ;


    @endphp
    @if (!isset($column['link']) or $column['link'] != False)
        <a href="{{ $imgOrigin }}" target="_blank">
            @endif
            <img src="{{ $img }}"
            @if (isset($column['attributes']))
                @foreach ($column['attributes'] as $attribute => $value)
                    @if (is_string($attribute))
                        {{ $attribute }}="{{ $value }}"
                    @endif
                @endforeach
            @else
                style="height: 48px  ;  border-radius: 3px  ;"
            @endif
            />
            @if (!isset($column['link']) or $column['link'] != False)
        </a>
    @endif
</td>