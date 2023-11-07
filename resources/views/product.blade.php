@extends('master')
@section('content')
    <style>
        #h3 {
            padding-bottom: 30px;
            text-align: center;
            font-size: 40px;
        }

        /* Product Listing Styles */

        .trending-wrapper {
            margin: 30px;
        }

        .trending-item {
            display: inline-block;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0 10px 20px 0;
            text-align: center;
            vertical-align: top;
            width: calc(33.33% - 20px);
        }


        .trending-item img.trending-image {
            height: 100px;
        }

        .trending-item h4 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-description {
            font-size: 14px;
            margin: 10px 0;
        }

        .product-price {
            font-size: 16px;
            font-weight: bold;
            color: #ff9900;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            background-color: #ff9900;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #ff6600;
        }   

        /* Responsive Grid Layout */
        @media screen and (max-width: 768px) {
            .trending-item {
                flex: 0 1 calc(50% - 20px);
            }
        }

        @media screen and (max-width: 576px) {
            .trending-item {
                flex: 0 1 100%;
                margin-right: 0;
            }
        }
    </style>
    <div class="custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="slider-img" src="{{ $item['gallery'] }}">
                            <div class="carousel-caption slider-text">
                                <h3>{{ $item['name'] }}</h3>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="trending-wrapper">
            <h3 id="h3">Trending Products</h3>
            @foreach ($products as $item)
                <div class="trending-item">

                    <img class="trending-image" src="{{ $item['gallery'] }}">
                    <div class="">
                        <h4>{{ $item['name'] }}</h4>
                        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="product-price">${{ $item['price'] }}</p>
                    </div>
                    <a href="detail/{{ $item['id'] }}" class="btn">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
