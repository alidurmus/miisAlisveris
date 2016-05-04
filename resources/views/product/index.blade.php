@extends('template.app')

@section('title', $page_title)

@section('content')
<!-- Products -->
<div class="row">
     <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img src="{{ $product->image }}" alt="">
            <div class="caption">
                <h4><a href="{{ url('/product', $product->slug) }}">{{ $product->name }}</a></h4>            
                <h4> @currency($product->price)</h4>
                <p>{{ $product->content }}</p>
            </div>
            <!-- ratings -->
            <div class="ratings">
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </p>
            </div>
            <!-- ratings -->
            <!-- add to cart -->
            <div class="addcart">
                {!! Form::open(array('action' => 'CartController@add')) !!}
                    <input type="hidden" size="3" value="{{ $product->id }}" name="productID">
                    QTY : <input type="text" size="3" value="" name="qty">
                    <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
                {!! Form::close() !!}
             </div>
            <!-- add to cart -->
        </div>
    </div>
 </div>
<!-- Products -->

@endsection