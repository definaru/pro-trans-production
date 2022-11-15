<div class="alert alert-{{ $type }} d-flex gap-2 align-items-center alert-dismissible fade show" role="alert">
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
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>