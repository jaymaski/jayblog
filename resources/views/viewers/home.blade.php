@extends('layouts.layout') 
@section('landing-page')
    <div class="home">
        <div class="home__title">
            <p class="popout">
                <span>H</span>
                <span>I</span>
                <span>,</span><br>
                <span>I</span>
                <span>'</span>
                <span>M</span>
                <span>J</span>
                <span>A</span>
                <span>Y</span>
                <span>!</span>
            </p>
        </div>
        
        <div class="home__image">
            <img class="home__image-cover" src="{{URL::asset('/images/parts/jay-bnw.png')}}" alt="background_image" />
        </div>
    </div>
@endsection

@section('sidebar')
    @parent
    <p>this ia appended from home</p>
@endsection