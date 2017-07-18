@if(Auth::guard('web')->check())
  <p class="text-success">
    You are logged in as a User.
  </p>
@else
  <p class="text-danger">
    You are not logged in as a User.
  </p>
@endif

@if(Auth::guard('admin')->check())
  <p class="text-success">
    You are logged in as an Admin.
  </p>
@else
  <p class="text-danger">
    You are not logged in as an Admin.
  </p>
@endif
