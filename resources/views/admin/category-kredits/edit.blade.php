@section('title') {{ 'Category Cost' }}@endsection
@extends('.admin.layouts')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Data Category Uang Keluar</h5>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-4">
            
            <form action="/dahsboard/CategoryKredit/{{ $categories->id }}" method="post" class="col-10">
              @csrf @method('put')
              <div class="mb-3 col-12">
                <label for="name" class="form-label text-secondary 
                font-weight opacity-7">Nama Cateogry Cost</label>
                <input type="text" value="{{ $categories->name }}" name="name" class="form-control" id="name" 
                required >
              </div>
              <div class="text-end">
                <a href="{{ route('CategoryKredit') }}" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm ml-2 pl-3">Simpan</button>
              </div>
              
            </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
