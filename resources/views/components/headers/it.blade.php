@props([
    'brand' => '💻 Chirper IT',
    'links' => [],
])

{{--
    Header varian IT — STRUKTUR berbeda dari <x-navbar>:
    - Dua tingkat: baris status utilitas di atas + baris navigasi utama.
    - Ada kolom pencarian di tengah.
    - Menu tampil sebagai dropdown, bukan tombol sebaris.
    Karena strukturnya beda total (bukan sekadar beda data), ia dibuat
    sebagai komponen sendiri, bukan memaksakan props ke <x-navbar>.
--}}
<header {{ $attributes->merge(['class' => 'bg-neutral text-neutral-content']) }}>
    {{-- Baris utilitas (tingkat atas) --}}
    <div class="flex items-center justify-between px-4 py-1 text-xs bg-black/20 border-b border-neutral-content/10">
        <span>Status: <span class="text-success font-medium">● All systems operational</span></span>
        <div class="flex gap-4">
            <a href="#" class="link link-hover">Bantuan</a>
            <a href="#" class="link link-hover">Keluar</a>
        </div>
    </div>

    {{-- Baris navigasi utama (tingkat bawah) --}}
    <div class="navbar">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl">{{ $brand }}</a>
        </div>

        <div class="navbar-center hidden lg:flex">
            <input
                type="text"
                placeholder="Cari tiket, server..."
                class="input input-sm input-bordered w-72 text-base-content"
            />
        </div>

        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-sm">Menu ▾</div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 text-base-content rounded-box z-10 mt-2 w-52 p-2 shadow">
                    @foreach ($links as $label => $url)
                        <li><a href="{{ $url }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
