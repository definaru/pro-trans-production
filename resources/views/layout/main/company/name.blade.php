@php
    $company = $user->customer->company;
@endphp
@if($company)
    @if(iconv_strlen($company) > 20)
    <div 
        style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 220px" 
        title="{{$company}}" data-bs-toggle="tooltip"
    >
        {{$company}}
    </div>   
    @else
    <div>{{$company}}</div> 
    @endif
@else
    <div>Нет данных</div>
@endif