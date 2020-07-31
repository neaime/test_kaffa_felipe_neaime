@if (session('successCNPJ'))
    <div class="alert alert-success mt-2 text-center">
        <p class="h-auto mb-0">{{ session('successCNPJ') }}</p>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger mt-2 text-center">
        <p class="h-auto mb-0">{{ session('error') }}</p>
    </div>
@elseif (session('invalidCPNJ'))
    <div class="alert alert-danger mt-2 text-center">
        <p class="h-auto mb-0">{{ session('invalidCPNJ') }}</p>
    </div>
@endif
