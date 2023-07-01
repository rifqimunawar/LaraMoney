@section('title') {{ 'Edit Income' }}@endsection
@extends('.admin.layouts')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Edit Uang Masuk</h5>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-4">
            
            <form action="/dahsboard/debit/{{ $debit->id }}" method="post" class="col-10">
              @csrf @method('put')
              <div class="mb-3 col-12">
                <label for="rp" class="form-label text-secondary 
                font-weight opacity-7">Rupiah Dalam Angka</label>
                <input type="text" name="rp" class="form-control" id="rp" 
                required oninput="formatRupiah(this)" value="{{ $debit->rp }}">
              </div>

              <div class="mb-3 col-12">
                <label for="category_id" class="form-label text-secondary 
                font-weight opacity-7">Category Income</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                  <option disabled selected>== Pilih Category ==</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" 
                      {{ $debit->category_id == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                    </option>
                @endforeach
                </select>
              </div>

              <div class="mb-3 col-12">
                <label for="description" class="form-label text-secondary 
                font-weight opacity-7">Deskripsi (Optional)</label>
                <textarea class="form-control" name="description" id="description" rows="3">
                  {{ $debit->description }}</textarea>
            </div>
            

              <div class="text-end">
                <a href="{{ route('debit') }}" class="btn btn-warning btn-sm">Kembali</a>
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
{{-- <script>
  function formatRupiah(input) {
    let value = input.value.replace(/\D/g, '');
    value = (value === '') ? '' : parseInt(value).toLocaleString('en-US');
    input.value = value;
  }
</script> --}}
