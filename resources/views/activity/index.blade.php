@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="fw-bold">Activity Log</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Created at</th>
                            <th>Log Name</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Changes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($activity as $d)
                            <tr>
                                <td>{{ \Carbon\carbon::parse($d->created_at)->format('d M Y H:i') }} WITA</td>
                                <td>{{ $d->log_name }}</td>
                                <td>{{ $d->description }}</td>
                                <td>{{ $d->causer->name }}</td>
                                <td>{{ $d->changes }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" align="center">-tidak ada data-</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
