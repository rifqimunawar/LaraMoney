<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use Illuminate\Http\Request;
use App\Models\CategoryDebit;
use RealRashid\SweetAlert\Facades\Alert;

class DebitController extends Controller
{
    public function index()
    {
        $debits = Debit::whereNotNull('category_id')->latest()->get();
        $totalRp = Debit::sum('rp');
        
        return view('admin.debits.index', compact('debits', 'totalRp'));
    }
    

    public function create(){
        $categories = CategoryDebit::all();
        return view('admin.debits.create', compact('categories'));
    }
    public function store(Request $request)  {
        $debits = $request -> all();
        $debits = Debit ::create($debits);

        Alert::success('Terima Kasih', 'Berhasil Menambahkan Income');
        return redirect()->route('debit');
    }

    public function edit($id, Request $request)
    {
      $categories = CategoryDebit::all();
      $debit = Debit ::find($id);
      return view('admin.debits.edit', compact('debit', 'categories'));
    }
    public function update($id, Request $request)
    {
      $debitsToUpdate = Debit::findOrFail($id);
      $debitsData = $request->all();
      $debitsToUpdate->update($debitsData);
    
      Alert::success('Terima Kasih', 'Data Berhasil Diubah');
      return redirect()->route('debit');
    }

    public function destroy($id)
    {
        $debits = Debit::findOrFail($id);
        $debits->delete();
        Alert::success('Terima Kasih', 'Data Berhasil Dihapus');
        return redirect()->route('debit');
    }
}
