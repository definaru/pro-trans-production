@php
$classes = ($close === 'true') ? 'alert-dismissible' : '';
@endphp
<div class="alert alert-{{ $type }} d-flex gap-2 align-items-center {{ $classes }} fade show border-0">
    <span class="material-symbols-outlined text-{{ $type }}">
        @switch($type)
            @case('info')
                info
                @break

            @case('success')
                check_circle
                @break

            @case('danger')
                gpp_maybe
                @break

            @case('warning')
                warning
                @break

            @default
                sms_failed
        @endswitch
    </span>
    <div>
        @if ($header)
            <strong>{{ $header }}</strong>
        @else
            @switch($type)
                @case('info')
                    <strong>Информация:</strong>
                    @break

                @case('success')
                    <strong>Успешно!</strong>
                    @break

                @case('danger')
                    <strong>Внимание!</strong>
                    @break

                @case('warning')
                    <strong>Важно!</strong>
                    @break

                @default
                    <strong>{{ $header }}</strong>
            @endswitch
        @endif
        {{ $message }}
    </div>
    @if($close === 'true')
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @endif
</div>