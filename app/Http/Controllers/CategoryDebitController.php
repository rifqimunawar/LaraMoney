<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use Illuminate\Http\Request;
use App\Models\CategoryDebit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryDebitController extends Controller
{
    public function index()
    {
        $categories = CategoryDebit::withSum('debit', 'rp')->latest()->get();
        $debitRPs = Debit::with('category')->sum('rp');
        return view('admin.category-debits.index', compact('categories', 'debitRPs'));
    }

    
    public function create(){
        return view('admin.category-debits.create');
    }
    public function store(Request $request)  {
      // dd($request);
        $category = $request -> all();
        $category = CategoryDebit ::create($category);

        Alert::success('Terima Kasih', 'Berhasil Menambahkan Category Income');
        return redirect()->route('CategoryDebit');
    }
    
    public function edit($id, Request $request)
    {
      $categories = CategoryDebit::find($id);
      return view('admin.category-debits.edit', compact('categories'));
    }
    public function update($id, Request $request)
    {
      $categoriesToUpdate = CategoryDebit::findOrFail($id);
      $categoriesData = $request->all();
      $categoriesToUpdate->update($categoriesData);
    
      Alert::success('Terima Kasih', 'Data Berhasil Diubah');
      return redirect()->route('CategoryDebit');
    }

    public function destroy($id)
    {
        $category = CategoryDebit::findOrFail($id);
        $category->load('debit');
    
        // Memeriksa apakah ada relasi yang terkait dengan kategori
        if ($category->debit && $category->debit->count() > 0) {
            Alert::error('Mohon Maaf', 'Kategori memiliki postingan terkait dan tidak dapat dihapus');
            return redirect()->back();
        }
    
        $category->delete();
    
        Alert::success('Terima Kasih', 'Data Berhasil Dihapus');
        return redirect()->route('CategoryDebit');
    }
}


