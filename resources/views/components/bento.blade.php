@props(['title'])

<div {{ $attributes->merge(['class' => 'bentoBox']) }}>
    <h1>{{ $title }}</h1>
    {{ $slot }}
</div>