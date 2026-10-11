@props(['title'])

<div {{ $attributes->except('href')->merge(['class' => 'bentoBox']) }}>
    @if (!empty($title))
        @if ($attributes->has('href'))
            <a class="bentoTitle" href="{{ $attributes->get('href') }}" target="_blank">
                <h1>{{ $title }}</h1>
            </a>
        @else
            <h1>{{ $title }}</h1>
        @endif
    @endif
    {{ $slot }}
</div>