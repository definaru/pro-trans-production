@php
    $isImage = $image === '' ? '/img/no_photo.jpg' : $image;
    $ifBig = $percent > 94 ? 'btn-success' : 'btn-danger';
    $isTotal = $percent >= 100 ? 'bg-success' : 'text-dark bg-warning';
@endphp
<li class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
    <img src="{{$isImage}}" class="rounded" style="width: 50px" alt="" />
    <small style="width: 95px">
        {{$brand}} 
        <br/>
        <a href="/search/index/{{$id}}">
            {{$articul}}
        </a>
    </small>

    <span 
        class="text-secondary cp"
        style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 200px" 
        title="{{ $name }}"
    >
        {{ $name }}
    </span>

    <div class="position-relative">
        @php echo number_format($price, 2, '.', ' ') @endphp ₽ 
        <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
    </div>          

    <span class="badge bg-primary rounded-pill">
        @php echo number_format($price, 2, '.', ' ') @endphp ₽
    </span>

    <div class="input-group" style="width: 140px">
        <button class="btn btn-sm material-symbols-outlined pe-0">add</button>
        <input type="number" min="1" class="form-control form-control-sm border-0 text-center" value="{{$count}}" />
        <button class="btn btn-sm material-symbols-outlined ps-0">remove</button>
    </div>

    <div class="btn-group">
        <a href="/delete/{{$id}}" class="btn text-danger rounded material-symbols-outlined">delete</a>
    </div>
</li>