@section('title') {{ 'Income' }}@endsection
@extends('.admin.layouts')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Data Uang Masuk</h5>
          <a href="{{ route('debit.create') }}" class="btn btn-primary btn-xs">Add Income  +</a>
          <p class="text-xs text-secondary font-weight opacity-7" >
            {{-- Total Uang Masuk Rp: {{ $totalRp }}</p > --}}
            Total Uang Masuk Rp: {{ number_format($totalRp, 0, ',', '.') }} </p >
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-center text-xs text-secondary font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                  <th class="text-center text-uppercase text-xs text-secondary font-weight-bolder opacity-7">Rp</th>
                  <th class="text-center text-uppercase text-xs text-secondary font-weight-bolder opacity-7">Category</th>
                  <th class="text-center text-uppercase text-xs text-secondary font-weight-bolder opacity-7">Keterangan</th>
                  <th class="text-secondary opacity-7 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($debits as $debit)
                <tr>
                  <td class="text-center text-xs">{{ $loop->iteration }}</td>
                  <td class="text-xs">{{ $debit->created_at->format('Y-m-d') }}</td>
                  <td class="text-xs">{{ number_format($debit->rp, 0, ',', '.') }}</td>
                  <td class="text-xs">{{ $debit->category->name }}</td>
                  {{-- <td class="text-xs">{{ $debit->category->name ?? 'N/A' }}</td> --}}
                  <td class="text-xs">{{ $debit->description }}</td>
                  <td class="text-center text-xs">
                    <form action="/dahsboard/debit/{{ $debit->id }}"method="POST">
                      <a class="btn btn-link text-dark px-3 mb-0" href="/dahsboard/debit/{{ $debit->id }}/edit"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" 
                      onclick="return confirm ('Apakah Anda yakin ingin menghapus Data ini?')">
                      <i class="far fa-trash-alt me-2"></i>Delete</button>
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