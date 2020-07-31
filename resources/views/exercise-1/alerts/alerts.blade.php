@if (session('successFormat'))
    <div class="alert alert-success mt-2 text-center">
        <p class="h-auto mb-0">{{ session('successFormat') }}</p>
    </div>
@endif

@if (session('invalidFormat'))
    <div class="alert alert-danger mt-2 text-center">
        <p class="h-auto mb-0">{{ session('invalidFormat') }}</p>
    </div>
@endif
