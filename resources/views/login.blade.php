@extends('master')
@section("content")

<!--  making login form using bootstrap  -->
<div class="container costuml">
    <di class="row">
        <div class="col-sm-4">
        <form action="login" method="post" >
            <div class="mb-3">
                @csrf
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" name="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </di>
</div>


@endsection 

 