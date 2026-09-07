<?php

/*
|--------------------------------------------------------------------------
| Konfigurasi Navigasi
|--------------------------------------------------------------------------
|
| Sumber tunggal untuk brand & menu tiap tim. Layout membaca nilai di sini
| lewat helper config(), mis. config('navigation.produksi.links').
| Ubah menu cukup di file ini — tidak perlu menyentuh Blade.
|
*/

return [

    'produksi' => [
        'brand' => '🏭 Chirper Produksi',
        'links' => [
            'Dashboard' => '#',
            'Laporan'   => '#',
            'Stok'      => '#',
        ],
    ],

    'it' => [
        'brand' => '💻 Chirper IT',
        'links' => [
            'Tiket'  => '#',
            'Server' => '#',
            'Docs'   => '#',
        ],
    ],

];
