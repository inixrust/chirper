<x-layouts.produksi title="Home">
    <div class="max-w-2xl mx-auto space-y-4">
        @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow">
                <div class="card-body">
                    <div class="font-semibold">{{ $chirp['author'] }}</div>
                    <div class="mt-1">{{ $chirp['message'] }}</div>
                    <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div>
                </div>
            </div>
        @endforeach
    </div>
</x-layouts.produksi>
