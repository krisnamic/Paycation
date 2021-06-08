<form method="GET" action="{{route('welcome')}}">
{{csrf_field()}}
    <button>back</button>
</form>

<form class="form-inline my-2 my-lg-0" method="GET" action="{{route('searching')}}">
{{csrf_field()}}
    <input type="search" class="form-control mr-sm-2" name="query" placeholder="Search..." >
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"></button>
</form>