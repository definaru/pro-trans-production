{{-- @php
    $table = $xml::parse('img/goods/promo/'.$stock.'/GEARAX.xlsx');
    $tables = $xml::parse('img/goods/promo/'.$stock.'/GEARAX.xlsx', true);
@endphp --}}

@extends('layout/main')
@section('title', $model['header'])

@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>   
    <span class="text-secondary">/</span>
    <span class="text-muted">Промо-материалы</span>    
    <span class="text-secondary">/</span>
    <span class="text-muted">{{$model['brand']}}</span>    
</div>
@endsection

@section('content') 
    <div class="row">
        <div class="col-12">
            {{$stock}}
            <?php /*
            @if ($table)
                <table class="table">
                    @foreach ($table as $item)
                        @if ($item[0] !== '' && $item[0] !== 'S.NO')
                            <tr>
                                <td>{{$item[1]}}</td>
                                <td>
                                    <?php 
                                        $string = preg_replace('/([ ]){1,}/', '', rtrim($item[2], ' '));
                                        $string = preg_replace('/([ ]){2,}/', '<br/>', $item[2]);
                                        $string = str_replace(" ", "_", $string); 
                                        $string = str_replace("_", "", $string);
                                        $string = str_replace("\n", "<br/>", $string);
                                        $array = explode("<br/>", $string); // nl2br
                                        echo "<ul><li>" . implode("</li><li>", $array) . "</li></ul>";
                                    ?>
                                </td>
                                {{-- <td>{{$item[3]}}</td> --}}
                                <td>{{$item[4]}}</td>
                                <td>{{$item[12]}}</td>
                                {{-- <td>{{$item[5]}}</td> --}}
                                <td>{{$item[6]}}</td>
                                <td>{{bcdiv($item[7], 1, 2)}}</td>
                                <td>{{$item[8]}}</td>
                                {{-- <td>{{$item[9]}}</td> --}}
                                {{-- <td>{{$item[10]}}</td> --}}
                                {{-- <td>{{var_dump($item[11])}}</td> --}}
                                
                            </tr>
                        @endif
                    @endforeach 
                </table>                  
            @else
                <x-alert type="danger" message="Таблица с товарами не найдена" />
            @endif
            */ ?>
        </div>
    </div>
@endsection