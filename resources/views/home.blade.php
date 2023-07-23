<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="jumbotron-black">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-wrap mt-5">
                        @foreach($products as $product)    
                        <div class="card-content mx-2 my-2">
                            <div class="img-container-2">
                                <img class="card" src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                            </div>
                            <h6>{{ $product['series'] }}</h6>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-button ">
                        <button class="btn">load more</button>
                    </div>
                </div>
            </div>
            <!-- <div class="jumbotron-blue">
                <div class="container container-blue">
                    <div class="content">
                        <ul class="d-flex">
                            <li :key="index" v-for="(list, index) in lists" class="d-flex align-center">
                                <div class="img-container">
                                    <img :src="list.immg" :alt="list.lable">
                                </div>
                                <h4 class="uppercase"></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </main>

</body>

</html>