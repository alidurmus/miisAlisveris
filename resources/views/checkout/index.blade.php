@extends('template.app')

@section('title', $page_title)



@section('content')
{!! Form::open(array('action' => 'CheckoutController@checkForm')) !!}
<div class="col-md-6">
    <!-- Payment Information -->

    <h4>Payment Information</h4>
    <hr>
    <div class="form-group">
        <label>Firstname Lastname</label>
        <input type="text" class="form-control" name="payment_name" value="{{ old('payment_name') }}">
          @if ($errors->has('payment_name'))<p style="color:red;">{!!$errors->first('payment_name')!!}</p>@endif
    </div>
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="payment_company" value="{{ old('payment_company') }}">
          @if ($errors->has('payment_company'))<p style="color:red;">{!!$errors->first('payment_company')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="payment_address" value="{{ old('payment_address') }}">
          @if ($errors->has('payment_address'))<p style="color:red;">{!!$errors->first('payment_address')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control" name="payment_city" value="{{ old('payment_city') }}">
          @if ($errors->has('payment_city'))<p style="color:red;">{!!$errors->first('payment_city')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Postcode</label>
        <input type="text" class="form-control" name="payment_postcode" value="{{ old('payment_postcode') }}">
          @if ($errors->has('payment_postcode'))<p style="color:red;">{!!$errors->first('payment_postcode')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Country</label>
        <input type="text" class="form-control" name="payment_country" value="{{ old('payment_country') }}">
          @if ($errors->has('payment_country'))<p style="color:red;">{!!$errors->first('payment_country')!!}</p>@endif

    </div>
    <!-- Payment Information -->

</div>


<div class="col-md-6">
    <!-- Shipping Information -->
    <h4>Shipping Information</h4>
    <hr>
    <div class="form-group">
        <label>Firstname Lastname</label>
        <input type="text" class="form-control" name="shipping_name" value="{{ old('shipping_name') }}">
          @if ($errors->has('shipping_name'))<p style="color:red;">{!!$errors->first('shipping_name')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="shipping_company" value="{{ old('shipping_company') }}">
          @if ($errors->has('shipping_company'))<p style="color:red;">{!!$errors->first('shipping_company')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="shipping_address" value="{{ old('shipping_address') }}">
          @if ($errors->has('shipping_address'))<p style="color:red;">{!!$errors->first('shipping_address')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control" name="shipping_city" value="{{ old('shipping_city') }}">
          @if ($errors->has('shipping_city'))<p style="color:red;">{!!$errors->first('shipping_city')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Postcode</label>
        <input type="text" class="form-control" name="shipping_postcode" value="{{ old('shipping_postcode') }}">
          @if ($errors->has('shipping_postcode'))<p style="color:red;">{!!$errors->first('shipping_postcode')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Country</label>
        <input type="text" class="form-control" name="shipping_country" value="{{ old('shipping_country') }}">
          @if ($errors->has('shipping_country'))<p style="color:red;">{!!$errors->first('shipping_country')!!}</p>@endif

    </div>
    <!-- Shipping Information -->
</div>
<div class="col-md-12">
    <!-- Order comment -->
    <h4>Order Comment</h4>
    <hr>
    <div class="form-group">
        <label>Comment </label>
        <textarea class="form-control" name="comment">{{ old('comment') }}</textarea>
    </div>
    <!-- Order comment -->
</div>
<button type="submit" class="btn btn-success pull-right">Payment & Shipping &raquo;</button>

{!! Form::close() !!}

@endsection