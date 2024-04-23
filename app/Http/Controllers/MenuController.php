<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getAllData(Request $request)
    {
        $menuData = [
            [
                'makanan' => 'Soto Mie',
                'harga' => 8000
            ],
            [
                'makanan' => 'Bakso Malang',
                'harga' => 13000
            ],
            [
                'makanan' => 'Ketoprak',
                'harga' => 15000
            ]
        ];

        return response()->json($menuData);
    }
    public function MemilihMenu($nama, $harga)
    {
        return "Anda memilih makanan {$nama} dengan harga {$harga}";
    }

    public function Menu()
    {
    return "Ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy..";
    }
}