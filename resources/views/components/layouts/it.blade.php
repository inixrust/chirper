@props(['title' => null])

<x-layouts.base :title="$title">
    <x-slot:header>
        <x-navbar
            brand="💻 Chirper IT"
            :links="['Tiket' => '#', 'Server' => '#', 'Docs' => '#']"
            class="bg-neutral text-neutral-content"
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
