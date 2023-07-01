<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryDebit;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryDebitController extends Controller
{
    public function index()
    {
        $categories = CategoryDebit::with('debit')->latest()->get();
        $debitRPs = $categories->pluck('debit')->flatten()->pluck('rp');
        // dd($categories);
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
    public function destroy(int $id) : RedirectResponse
    {
        $category = CategoryDebit::findOrFail($id);
    
        if ($category->Debit()->exists()) {
            Alert::error('Mohon Maaf!', 'Category Tidak Bisa Dihapus Untuk Saat Ini.');
            return redirect()->route('CategoryDebit');
        }
    // dd($category);
        $category->delete();
    
        Alert::success('Terima Kasih', 'Data Category Berhasil Dihapus');
        return redirect()->route('CategoryDebit');
    }
}
