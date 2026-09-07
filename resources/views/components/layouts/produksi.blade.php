@props(['title' => null])

{{-- Pola A: struktur header sama, data dari config → pakai <x-navbar> --}}
<x-layouts.base :title="$title">
    <x-slot:header>
        <x-navbar
            :brand="config('navigation.produksi.brand')"
            :links="config('navigation.produksi.links')"
            class="bg-primary text-primary-content"
        />
    </x-slot:header>

    {{ $slot }}

    <x-slot:footer>
        <x-site-footer
            text="Tim Produksi - Chirper"
            class="bg-primary text-primary-content"
        />
    </x-slot:footer>
</x-layouts.base>
