<x-layouts.produksi title="Home">
    @php
        $chirps = [
            ['author' => 'Aan',  'message' => 'Halo, ini chirp pertamaku! 🐦'],
            ['author' => 'Farhan',  'message' => 'Belajar Laravel itu menyenangkan.'],
            ['author' => 'Citra', 'message' => 'Blade component bikin kode jadi rapi.'],
        ];
    @endphp

    <div class="max-w-2xl mx-auto space-y-4">
        @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow">
                <div class="card-body">
                    <h2 class="card-title">{{ $chirp['author'] }}</h2>
                    <p class="text-base-content/60">{{ $chirp['message'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layouts.produksi>
