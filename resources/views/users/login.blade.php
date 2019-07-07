@extends('master/master')
@section('titel')
    Login
@endsection

@section('body')


<div class="container">
    
<form action="{{url('sinup')}}" method="get">   
<label for="name">Name</label>
<input type="text" name="name" >
<label for="password">password</label>
<input type="password" class="form" name="password" id="" placeholder="">
<button type="submit" class="btn btn-primary">SinUp</button>

</form>
</div>


@endsection