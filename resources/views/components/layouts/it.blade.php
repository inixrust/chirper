@props(['title' => null])

{{-- Pola B: struktur header beda → komponen header khusus <x-headers.it> --}}
<x-layouts.base :title="$title">
    <x-slot:header>
        <x-headers.it
            :brand="config('navigation.it.brand')"
            :links="config('navigation.it.links')"
        />
    </x-slot:header>

    {{ $slot }}

    <x-slot:footer>
        <x-site-footer
            text="Tim IT - Chirper"
            class="bg-neutral text-neutral-content"
        />
    </x-slot:footer>
</x-layouts.base>
