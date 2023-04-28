@php
$classes = ($close === 'true') ? 'alert-dismissible' : '';
@endphp
<div class="alert alert-{{ $type }} d-flex gap-2 align-items-center {{ $classes }} fade show border-0">
    <span>
        @switch($type)
            @case('info')
                <x-icon-info color="#087990" />
                @break

            @case('success')
                <x-icon-check-circle color="#146c43" />
                @break

            @case('danger')
                <x-icon-gpp-maybe color="#b02a37" />
                @break

            @case('warning')
                <x-icon-warning color="#997404" />
                @break

            @default
                <x-icon-sms-failed />
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