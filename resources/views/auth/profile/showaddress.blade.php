@extends('template.app')

@section('title', 'Edit #'.$page_title.' Address')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Update Address</div>
    <div class="panel-body">
        <!-- User Address Update -->
        {!! Form::open(array('action' => 'ProfileController@updateAddress')) !!}
        <div class="form-group">
            <input type="hidden" name="user_address_id" value="{{ $address->user_address_id }}">
            <label>Firstname Lastname</label>
            <input type="text" class="form-control" name="name" value="{{ $address->name }}">
            @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
        </div>
        <div class="form-group">
            <label>Company Name</label>
            <input type="text" class="form-control" name="company" value="{{ $address->company }}">
            @if ($errors->has('company'))<p style="color:red;">{!!$errors->first('company')!!}</p>@endif
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="{{ $address->address }}">
            @if ($errors->has('address'))<p style="color:red;">{!!$errors->first('address')!!}</p>@endif
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="city" value="{{ $address->city }}">
            @if ($errors->has('city'))<p style="color:red;">{!!$errors->first('city')!!}</p>@endif
        </div>
        <div class="form-group">
            <label>Postcode</label>
            <input type="text" class="form-control" name="postcode" value="{{ $address->postcode }}">
            @if ($errors->has('postcode'))<p style="color:red;">{!!$errors->first('postcode')!!}</p>@endif
        </div>
        <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" name="country" value="{{ $address->country }}">
            @if ($errors->has('country'))<p style="color:red;">{!!$errors->first('country')!!}</p>@endif
        </div>
        <div class="form-group">
            <label>Status</label>

            {{ Form::select('status', [
                                    '1' => 'Active',
                                    '0' => 'Passive',
                                        ], $address->status, ['class' => 'form-control']) }}

            @if ($errors->has('status'))<p style="color:red;">{!!$errors->first('status')!!}</p>@endif
        </div>
        
        <button type="submit" class="btn btn-info">Update</button>
{!! Form::close() !!}

    </div>
    <!-- User Address Update -->

</div>
@endsection

