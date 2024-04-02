<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Bonjour!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards')<br>
ENSA
{{-- {{ config('app.name') }} --}}
@endif

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
    @lang(
        "Si vous rencontrez des difficultés pour cliquer sur le bouton \":actionText\", veuillez copier et coller l'URL ci-dessous\n".
        'dans votre navigateur web :',
        [
            'actionText' => $actionText,
        ]
    ) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>

@endisset
</x-mail::message>
