@props(['title' => null])

<x-layouts.base :title="$title">
    <x-slot:header>
        <x-navbar
            brand="🏭 Chirper Produksi"
            :links="['Dashboard' => '#', 'Laporan' => '#', 'Stok' => '#']"
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
