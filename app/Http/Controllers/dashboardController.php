<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Karyawan;

class dashboardController extends Controller
{
    public function ToInputData()
    {
        $Karyawan = new Karyawan;

        $takeData = $Karyawan->get();

        return view('DataKaryawan')->with([
            'date' => date("Y-m-d"),
            'Data' => $takeData,
        ]);
    }
}
