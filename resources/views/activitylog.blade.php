@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Activity Log</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="white-space: nowrap">
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
                        @foreach ($activity as $d)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($d->created_at)->format('d M Y H:i') }}</td>
                                <td>{{ $d->log_name }}</td>
                                <td>{{ $d->description }}</td>
                                <td>{{ $d->causer->name }}</td>
                                <td>{{ $d->changes }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $activity->links() }}
        </div>
    </div>
@endsection
