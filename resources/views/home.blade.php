@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                        <br><br>
                        <div>
                            <a href="/products_list">Products list</a>
                        </div>
                        <br>
                        <div>
                            List of products by select it can see all his attributes: <br>
                            @foreach ($products_list as $product)
                                <a href="/product/show/{{$product->id}}">{{$product->name}}</a><br>
                            @endforeach
                        </div>
                        <br>
                        <div>
                            List of products by select it will delete data: <br>
                            @foreach ($products_list as $product)
                                <a href="/product/destroy/{{$product->id}}">{{$product->name}}</a><br>
                            @endforeach
                        </div>
                        <br>
                        <div>
                            By pressing this link will add new product - Lemon with his attributes: </br>
                            <a href="/add_product/create">Add new product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
