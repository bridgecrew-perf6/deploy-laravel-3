@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('books.index') }}">Kembali</a>
            <div class="card my-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-bold py-2">Detail Buku</h6>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success btn-sm">Edit</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-muted mb-0">Nama:</p>
                            <p class="fw-bold">{{ $book->name }}</p>
                        </div>
                        <div class="col">
                            <p class="text-muted mb-0">Jumlah:</p>
                            <p class="fw-bold">{{ $book->qty }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
