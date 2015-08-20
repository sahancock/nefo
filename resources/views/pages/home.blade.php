@extends('...layouts.default')
@section('title', 'Home')

<style>

    body{
        height:100%;

        background: url("/images/bg-image.png.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>
<div class="container"style="width:100%;height:100%;">

@section('content')

    @include('...includes.slider')


    <div style="max-width:100%;display:block;height:auto;">
    <center><img src="images/nefo-logo-lg.png"class="img-responsive"style="margin-top:20px;margin-bottom:15px;"></center>
    </div>
    <br>
    <center><h1>Northeast Florida Outdoors</h1></center>
    <p>Local Recreation at its best !!!</p>
</div>
@stop