@if (Auth::check())
<!-- The user is logged in... -->
<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
             <!-- Icon X Product(s) | Total XX TRY  -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <strong class="caret"></strong></a>
            <ul class="dropdown-menu scrollable-menu">
                <li>
                    <a>Welcome {{ Auth::user()->name }}</a>
                </li>
                <li>
                    <a href="{{ url('logout') }}">Logut</a>
                </li> 
            </ul>
        </li>
</ul>
<!-- The user is logged in... -->

@else
<ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{ url('login') }}">Login</a>
        </li>
        <li>
            <a href="{{ url('register') }}">Register</a>
        </li>
</ul>
@endif