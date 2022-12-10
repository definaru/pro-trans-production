@if($color === '40931')
<span class="badge bg-soft-info text-info">
    <span class="legend-indicator bg-info"></span>
    {{$text}}
</span>

@else
<span class="badge" style="background: #<?=dechex($color);?>30; color: #<?=dechex($color);?>">
    <span class="legend-indicator" style="background: #<?=dechex($color);?>"></span>
    {{$text}}
</span>
@endif