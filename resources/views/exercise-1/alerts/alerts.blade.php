@if (session('successFormat'))
    <div class="alert alert-success">
        <p>{{ session('successFormat') }}</p>
    </div>
@endif

@if (session('invalidFormat'))
    <div class="alert alert-danger">
        <p>{{ session('invalidFormat') }}</p>
    </div>
@endif
