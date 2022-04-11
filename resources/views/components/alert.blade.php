@if (session()->has('success'))
    <div class="alert alert-success py-2">
        {{ session()->get('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger py-2">
        {{ session()->get('error') }}
    </div>
@endif
