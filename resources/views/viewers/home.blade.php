@extends('layouts.layout') 
@section('content')

<h1 class="header">Home</h1> 

<div class="body">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem recusandae omnis laudantium sequi obcaecati optio aperiam, corporis magnam, molestiae quia quasi in nulla? Vel corrupti voluptatem dolore placeat libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem recusandae omnis laudantium sequi obcaecati optio aperiam, corporis magnam, molestiae quia quasi in nulla? Vel corrupti voluptatem dolore placeat libero?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem recusandae omnis laudantium sequi obcaecati optio aperiam, corporis magnam, molestiae quia quasi in nulla? Vel corrupti voluptatem dolore placeat libero?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem recusandae omnis laudantium sequi obcaecati optio aperiam, corporis magnam, molestiae quia quasi in nulla? Vel corrupti voluptatem dolore placeat libero?</p>
</div>

@endsection

@section('sidebar')
    @parent
    <p>this ia appended from home</p>
@endsection