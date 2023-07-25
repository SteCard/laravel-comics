@extends('layouts.app')

@section('content')
<div class="jumbotron-thumbnail">
    <div class="container">
        <div class="row">
            <div class="col position-relative">
                <div class="content-image position-absolute">
                    <div class="img-container-comics position-relative">
                        <img src="{{ $product['thumb'] }}" alt="">
                        <span class="position-absolute top-0 start-0 text-uppercase thumb-background p-1">comic
                            book</span>
                        <span
                            class=" text-uppercase thumb-background position-absolute bottom-0 start-50 translate-middle-x w-100 text-center">view
                            gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 mt-5">
            <h4>{{ $product['title'] }}</h4>
            <div class="aviability d-flex justify-content-between">
                <div class="">
                    U.S Price: {{ $product['price'] }}
                </div>
                <div class="">Check Aviability</div>
            </div>
            <div class="description mt-3">
                <p>{{ $product['description'] }}</p>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="jumbotron-comic">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Talent</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Art by:</th>
                            <td><span>{{ implode(', ', $product['artists']) }}</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Written by:</th>
                            <td><span>{{ implode(', ', $product['writers']) }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Specs</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Series:</th>
                            <td>
                                <h6>{{ $product['series'] }}</h6>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">U.S. Price:</th>
                            <td><span>{{ $product['price'] }}</span></td>
                        </tr>
                        <tr>
                            <th scope="row">On Sale Date:</th>
                            <td><span>{{ $product['sale_date'] }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection