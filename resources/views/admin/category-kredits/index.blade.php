@section('title') {{ 'Category Cost' }}@endsection
@extends('.admin.layouts')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Data Category Uang Keluar</h5>
          <a href="{{ route('CategoryKredit.create') }}" class="btn btn-primary btn-xs">Tambah Category</a>
          <p class="text-xs text-secondary font-weight opacity-7" >
            {{-- Total Uang Masuk Rp: {{ $totalRp }}</p > --}}
            {{-- Total Uang Masuk Rp: {{ number_format($totalRp, 0, ',', '.') }} </p > --}}
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-center text-xs text-secondary font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Nama Category</th>
                  <th class="text-center text-uppercase text-xs text-secondary font-weight-bolder opacity-7">Jumlah</th>
                  <th class="text-secondary opacity-7 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="text-center text-xs">{{ $loop->iteration }}</td>
                        <td class="text-xs">{{ $category->name }}</td>
                        <td class="text-xs">Rp: {{ number_format($category->kredit_sum_rp ?? 0, 0, ',', '.') }}</td>
                        <td class="text-center text-xs">
                            <form action="/dahsboard/CategoryKredit/{{ $category->id }}" method="POST">
                                <a class="btn btn-link text-dark px-3 mb-0" href="/dahsboard/CategoryKredit/{{ $category->id }}/edit"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm ('Apakah Anda yakin ingin menghapus Data ini?')">
                                    <i class="far fa-trash-alt me-2"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection