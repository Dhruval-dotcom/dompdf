@if( session()->has('user'))
    Hello {{session('user')}}
@endif
<a href="p1">p1</a>
<a href="p2">p2</a>
<a href="logout">logout</a>
