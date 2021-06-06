@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span style="text-align: center">
            <ul class="list-group list-group-flush">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span style="text-align: center">
            <p>{{ session('success') }}</p>
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif