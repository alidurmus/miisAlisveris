@extends('template.app')

@section('title', $page_title)

@section('content')
<!-- User Information Panel -->

<div class="panel panel-default">
    <div class="panel-heading">User Information</div>
    <div class="panel-body">
        {{ $user->name }}<br>
        {{ $user->email }} 
    </div>
</div>
<!-- User Information Panel -->

<div class="panel panel-default">
    <div class="panel-heading">User Addresses</div>
    <div class="panel-body">
        <!-- Responsive User Address List table -->

        <div class="table-responsive">
            <table class="table table-hover table-striped"> 
                <thead> 
                    <tr> 
                        <th>ID#</th> 
                        <th>Firstname Lastname</th> 
                        <th>Company Name</th> 
                        <th>Address</th>
                        <th>Postcode</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach($user_addresses as $address)
                    <tr> 
                        <td>ID#{{ $address->user_address_id }}</td> 
                        <td>{{ $address->name }}</td> 
                        <td>{{ $address->company }}</td> 
                        <td>{{ $address->address }}</td>
                        <td>{{ $address->postcode }}</td>
                        <td>{{ $address->country }}</td>
                        <td>
                            @if($address->status == 1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Passive</span>
                            @endif
                        </td>
                        <td class="col-sm-2">
                            <div class="btn-group btn-group-sm" role="group" aria-label="">
                                <a href="{{ url('profile/showAddress', $address->user_address_id)}}" class="btn btn-info" role="button"> Update</a>
                                <a href="{{ url('profile/deleteAddress', $address->user_address_id)}}" class="btn btn-danger" role="button"> Delete</a>
                            </div>

                        </td>
                    </tr> 
                    @endforeach

                </tbody>
            </table>

        </div>
        <!-- Responsive User Address List table -->

        <!-- User Address Actions Buttons Group -->

        <div class="col-md-4">
            <div class="btn-group btn-group-xl" role="group" aria-label="">
                <a href="{{ url('profile/newAddress')}}" class="btn btn-success" role="button"> Add New Address</a>
            </div>
        </div>

        <!-- User Address Actions Buttons Group -->

    </div>
</div>
@endsection

