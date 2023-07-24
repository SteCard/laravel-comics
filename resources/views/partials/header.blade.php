<header>
    <div class="header-f">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-star justify-content-end">            
                    <ul class="d-flex list-unstyled fw-bolder me-5 text-uppercase ">
                        <li class="me-5"><a href="/" class="text-white">dc power&#8480;visa&#174;</a></li>
                        <li><a href="/" class="text-white"> additional dc sites</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-2">
                <div class="img-container">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
                </div>
            </div>
            <nav class="col-10 header-s">
                <ul class="d-flex align-items-center text-uppercase list-unstyled">
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">characters</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('comics') }}" class="list-group-item fw-bolder mx-3">comics</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">movies</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">tv</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">games</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">collectibles</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">videos</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">fans</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">news</a>
                    </li>
                    <li class="padding-hr header-li">
                        <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">shop</a>
                    </li>
                    <li class="padding-hr header-li">
                        <div class="search d-flex s-control">
                            <input type="text" class="form-control s-bar" placeholder="Search">
                            <i class="fa fa-search align-self-center"></i>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="jumbotron">
        <div class="box-btn">
            <button class="btn btn-primary py-2 px-4 text-uppercase fw-bold fs-4 rounded-0 ">current series</button>
        </div>
    </div>
</header>
