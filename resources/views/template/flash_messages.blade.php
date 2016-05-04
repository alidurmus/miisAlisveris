<!-- Error Flash Messages -->
@if(Session::has('flash_message_error'))
     <div class="alert alert-danger">
         <em> {!! session('flash_message_error') !!}</em>
     </div>
@endif

<!-- Success Flash Messages -->
@if(Session::has('flash_message_success'))
     <div class="alert alert-success">
         <em> {!! session('flash_message_success') !!}</em>
     </div>
@endif

 <!-- Info Flash Messages -->
@if(Session::has('flash_message_info'))
     <div class="alert alert-info">
         <em> {!! session('flash_message_info') !!}</em>
     </div>
@endif
