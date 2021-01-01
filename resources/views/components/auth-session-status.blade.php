@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-300']) }}>
        {{ $status }}
    </div>
@endif
