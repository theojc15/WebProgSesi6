<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    public function mahasiswa()
    {
        $mhs = [["2440017630", "Jesse", "IS", 3.8], ["2440011955", "Kevin", "IS", 3.8], ["2440078411", "Alvon", "IS", 3.9],
            ["2440037456", "Ezra", "GT", 3.6], ["2440025872", "Juan", "GT", 3.6]];
        return view('mahasiswa')
            ->with('mahasiswa', $mhs);
    }

    public function matakuliah()
    {
        $mtk = [["COMP6062001", "Compilation Technique", 5], ["COMP7116001", "Computer Vision", 3], ["COMP6587001", "Deep Learning", 3],
            ["LANG6027001", "Indonesia", 5], ["COMP6681001", "Web Programming", 3], ["COMP6697001", "Operating System", 2]];
        return view('matakuliah')
            ->with('matkul', $mtk);
    }
}
