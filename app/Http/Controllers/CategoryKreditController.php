<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryKredit;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryKreditController extends Controller
{
    public function index()
    {
        $categories = CategoryKredit::with('kredit')->latest()->get();
        $kreditRPs = $categories->pluck('kredit')->flatten()->pluck('rp');
        // dd($categories);
        return view('admin.category-kredits.index', compact('categories', 'kreditRPs'));
    }
    

    public function create(){
        return view('admin.category-kredits.create');
    }
    public function store(Request $request)  {
      // dd($request);
        $category = $request -> all();
        $category = CategoryKredit ::create($category);

        Alert::success('Terima Kasih', 'Berhasil Menambahkan Category Cost');
        return redirect()->route('CategoryKredit');
    }

    public function edit($id, Request $request)
    {
      $categories = CategoryKredit::find($id);
      return view('admin.category-kredits.edit', compact('categories'));
    }
    public function update($id, Request $request)
    {
      $categoriesToUpdate = CategoryKredit::findOrFail($id);
      $categoriesData = $request->all();
      $categoriesToUpdate->update($categoriesData);
    
      Alert::success('Terima Kasih', 'Data Berhasil Diubah');
      return redirect()->route('CategoryKredit');
    }

    public function destroy(int $id) : RedirectResponse
    {
        $category = CategoryKredit::findOrFail($id);
    
        if ($category->Kredit()->exists()) {
            Alert::error('Mohon Maaf!', 'Category Tidak Bisa Dihapus Untuk Saat Ini.');
            return redirect()->route('CategoryKredit');
        }
    // dd($category);
        $category->delete();
    
        Alert::success('Terima Kasih', 'Data Category Berhasil Dihapus');
        return redirect()->route('CategoryKredit');
    }
    
}
