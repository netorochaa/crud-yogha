<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('property.index') }}">Cadastrar Propridade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('type.index') }}">Cadastrar Tipo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>