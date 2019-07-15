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
                    
                    @foreach($data->statuses as $arr)
                    <div class="media mb-5">
                        <img src="{{ $arr->user->profile_image_url_https }}" class="mr-3">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">{{ $arr->user->name }}</h5>
                            <p><small>{{$arr->created_at}}</small></p>
                            {{ $arr->text}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>