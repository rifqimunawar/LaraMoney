<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Debit;
use App\Models\Kredit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $tanggal = Carbon::now(); // Tanggal yang ingin Anda gunakan untuk mengkalkulasikan kredit dan debit

    $totalDebit = Debit::whereDate('created_at', $tanggal)->sum('rp');
    $totalKredit = Kredit::whereDate('created_at', $tanggal)->sum('rp');
    $totalSaldo = $totalDebit - $totalKredit;

    // dd($totalKredit);
    return view('admin.dashboard.index', compact(
        'totalDebit',
        'totalKredit',
        'totalSaldo',
    ));
}
    
}
