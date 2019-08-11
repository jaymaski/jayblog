@extends('layouts.layout') 

@section('content')
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem recusandae omnis laudantium sequi obcaecati optio aperiam, corporis magnam, molestiae quia quasi in nulla? Vel corrupti voluptatem dolore placeat libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem recusandae omnis laudantium sequi obcaecati optio aperiam, corporis magnam, molestiae quia quasi in nulla? Vel corrupti voluptatem dolore placeat libero?</p>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection