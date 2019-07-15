<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        @component('navBar')
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/history">History</a>
        </li>
        @endcomponent
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <h2 class="mb-5">Búsquedas recientes</h2>
                        @foreach ($tweets as $item)
                            <p class="mb-0">{{$item->query}}</p>
                            <small class="mb-3">{{$item->created_at}}</small>
                            <hr>
                        @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
