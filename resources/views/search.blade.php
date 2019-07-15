<form method="GET" action="/search" class="form-inline my-2 my-lg-0 text-center">
    <div class="container-fluid px-0">
        <div class="row ">
            <div class="col-md-9 col-sm-8 mb-2">
                <input class="form-control mr-sm-2 w-100" name="search" type="search" placeholder="Buscar tweets" aria-label="Search">
                {{csrf_field()}}
            </div>
            <div class="col-md-3 col-sm-4">
                <button class="btn btn-outline-success my-2 my-sm-0 w-100" type="submit">Buscar</button>
            </div>
        </div>
    </div>
</form>