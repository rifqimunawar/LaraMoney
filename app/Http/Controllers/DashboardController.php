<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\Kredit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalDebit= Debit::sum('rp');
        $totalKredit= Kredit::sum('rp');
        $totalSaldo= $totalDebit-$totalKredit;

        
        // dd($totalDebit);
        return view('admin.dashboard.index', compact(
            'totalDebit',
            'totalKredit',
            'totalSaldo',
        ));
    }
}
