@props(['title'])

<div {{ $attributes->merge(['class' => 'bentoBox']) }}>
    @if (!empty($title)) <h1>{{ $title }}</h1> @endif
    {{ $slot }}
</div>