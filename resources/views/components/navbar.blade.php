@props([
    'brand' => '🐦 Chirper',
    'links' => [],
])

<nav {{ $attributes->merge(['class' => 'navbar bg-base-100']) }}>
    <div class="navbar-start">
        <a href="/" class="btn btn-ghost text-xl">{{ $brand }}</a>
    </div>
    <div class="navbar-end gap-2">
        @foreach ($links as $label => $url)
            <a href="{{ $url }}" class="btn btn-ghost btn-sm">{{ $label }}</a>
        @endforeach
    </div>
</nav>
