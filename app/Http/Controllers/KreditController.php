<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Illuminate\Http\Request;
use App\Models\CategoryKredit;
use RealRashid\SweetAlert\Facades\Alert;

class KreditController extends Controller
{
    public function index()
    {
        $kredits = Kredit::whereNotNull('category_id')->latest()->get();
        $totalRp = Kredit::sum('rp');
        // dd($kredits);
        
        return view('admin.kredits.index', compact('kredits', 'totalRp'));
    }
    

    public function create(){
        $categories = CategoryKredit::all();
        return view('admin.kredits.create', compact('categories'));
    }
    public function store(Request $request)  {
        $kredits = $request -> all();
        $kredits = Kredit ::create($kredits);

        Alert::success('Terima Kasih', 'Berhasil Menambahkan Pengeluaran');
        return redirect()->route('kredit');
    }

    public function edit($id, Request $request)
    {
      $categories = CategoryKredit::all();
      $kredit = Kredit ::find($id);
      return view('admin.kredits.edit', compact('kredit', 'categories'));
    }
    public function update($id, Request $request)
    {
      $kreditsToUpdate = Kredit::findOrFail($id);
      $kreditsData = $request->all();
      $kreditsToUpdate->update($kreditsData);
    
      Alert::success('Terima Kasih', 'Data Berhasil Diubah');
      return redirect()->route('kredit');
    }

    public function destroy($id)
    {
        $kredits = Kredit::findOrFail($id);
        $kredits->delete();
        Alert::success('Terima Kasih', 'Data Berhasil Dihapus');
        return redirect()->route('kredit');
    }
}
