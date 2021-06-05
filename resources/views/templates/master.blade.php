@include('templates.head')
    <div class="wrapper">
        @include('templates.navbar')
        @yield('content')
    </div>
@include('templates.footer')
