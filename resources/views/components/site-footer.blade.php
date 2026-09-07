@props([
    'text' => 'Chirper - Built with Laravel and ❤️',
])

<footer {{ $attributes->merge(['class' => 'footer footer-center p-5 bg-base-300 text-base-content text-xs']) }}>
    <div>
        <p>© {{ date('Y') }} {{ $text }}</p>
    </div>
</footer>
