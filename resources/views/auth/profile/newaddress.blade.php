@extends('template.app')

@section('title', $page_title)

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Create Address</div>
    <div class="panel-body">
        <!-- Create New User Address  -->
        {!! Form::open(array('action' => 'ProfileController@createAddress')) !!}
    <div class="form-group">
        <label>Firstname Lastname</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
    </div>
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company" value="{{ old('company') }}">
          @if ($errors->has('company'))<p style="color:red;">{!!$errors->first('company')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
          @if ($errors->has('address'))<p style="color:red;">{!!$errors->first('address')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control" name="city" value="{{ old('city') }}">
          @if ($errors->has('city'))<p style="color:red;">{!!$errors->first('city')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Postcode</label>
        <input type="text" class="form-control" name="postcode" value="{{ old('postcode') }}">
          @if ($errors->has('postcode'))<p style="color:red;">{!!$errors->first('postcode')!!}</p>@endif

    </div>
    <div class="form-group">
        <label>Country</label>
        <input type="text" class="form-control" name="country" value="{{ old('country') }}">
          @if ($errors->has('country'))<p style="color:red;">{!!$errors->first('country')!!}</p>@endif
    </div>
    <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status"><option value="1">Active</option><option value="0">Passive</option></select>
        @if ($errors->has('status'))<p style="color:red;">{!!$errors->first('status')!!}</p>@endif
    </div>
        

        
        
        <button type="submit" class="btn btn-info">Create</button>
        {!! Form::close() !!}

    </div>
        <!-- Create New User Address  -->
        
</div>
@endsection

