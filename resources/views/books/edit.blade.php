@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('books.index') }}">Kembali</a>
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0 fw-bold py-2">Edit Buku</h6>
                </div>
                <div class="card-body">
                    <x-alert />
                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Nama Buku</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $book->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="qty">Jumlah Buku</label>
                            <input type="number" class="form-control" name="qty" id="qty" value="{{ $book->qty }}">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
