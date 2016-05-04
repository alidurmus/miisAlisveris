@extends('template.app')

@section('title', $page_title)
 


@section('content')
<!-- Cart Header -->
    <div class="container-fluid">
       <div class="row">
           <div class="col-xs-3">
               <h4>Product</h4>
           </div>
           <div class="col-xs-2">
               <h4>Qty.</h4>
           </div>
           <div class="col-xs-3">
               <h4>Subtotal</h4>
           </div>
           <div class="col-xs-4">

           </div>
       </div>
        <hr>
   </div>

<!-- Cart Header -->
<!-- Foreach Items from Cart -->
@foreach (CartProvider::instance()->content() as $cart) 

   {!! Form::open(array('action' => 'CartController@update')) !!}
 
       <div class="container-fluid">
           <div class="row cart-navigation-line">
               <div class="col-xs-3">
                   {{ $cart->name }}<br>
                   <small>@currency($cart->price)</small>
               </div>
               <div class="col-xs-2">
                   <input type="hidden" size="3" value="{{ $cart->rowid }}" name="rowID">
                   <input type="text" size="3" value="{{ $cart->qty }}" name="qty">
               </div>
               <div class="col-xs-3">
                   @currency($cart->subtotal)
               </div>
               <div class="col-xs-4">
                   <div class="btn-group btn-group-sm" role="group" aria-label="">
                       <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                       <a href="{{ url('cart/remove', $cart->rowid) }}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a>
                   </div>

               </div>
           </div>
           <hr>
       </div>
 
   {!! Form::close() !!}

@endforeach
<!-- Foreach Items from Cart -->
<!-- Cart Footer -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">

            </div>
            <div class="col-xs-2">

            </div>
            <div class="col-xs-3">
                Total
            </div>
            <div class="col-xs-4">
                @currency(CartProvider::instance()->total())
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="btn-group btn-group-xl pull-right" role="group" aria-label="">
                        <a href="{{ url('cart') }}" class="btn btn-info" role="button"> View Cart </a>
                        <a href="{{ url('checkout') }}" class="btn btn-success" role="button">Checkout</a>
                    </div>
            </div>
        </div>
    </div>



  <!-- Cart  Footer -->
@endsection