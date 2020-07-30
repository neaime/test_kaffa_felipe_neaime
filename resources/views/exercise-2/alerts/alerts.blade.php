@if (session('successCNPJ'))
    <div class="alert alert-success">
        <p>{{ session('successCNPJ') }}</p>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        <p>{{ session('error') }}</p>
    </div>
@elseif (session('invalidCPNJ'))
    <div class="alert alert-danger">
        <p>{{ session('invalidCPNJ') }}</p>
    </div>
@endif
