@if(session()->has('info'))
    <div class="alert alert-primary">
        {{ session()->get('info') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
