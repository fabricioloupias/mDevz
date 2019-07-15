<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')

<body>
    @component('navBar')
    <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="/history">History</a>
    </li>
    @endcomponent
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('search')
                <div class="tweets mt-5">
                    <p class="text-center">Usa el buscador para encontrar tweets</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>