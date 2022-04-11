@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 fw-bold py-2">Data Buku</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('books.store') }}" method="POST" class="mb-4">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control" placeholder="Nama Buku">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="qty" class="form-control" placeholder="Jumlah Buku">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <x-alert />
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="10">#</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ $book->qty }}</td>
                                        <td>
                                            <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('books.edit', $book->id) }}"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('books.show', $book->id) }}"
                                                class="btn btn-primary btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" align="center">-tidak ada data-</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
