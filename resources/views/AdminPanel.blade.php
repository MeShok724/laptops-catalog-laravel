@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/AdminPanel.css')}}">
<body>
<main>
<div class="categories-fields">
    <ul>
        <li><a href="#">Office laptops</a></li>
        <li><a href="#">Gaming laptops</a></li>
        <li><a href="#">Compact laptops</a></li>
    </ul>
</div>
<div class="content-field">
    <div class="content-field-laptop">
        <form class="form-add">
            <div class="laptop-name">
                <input class="inp" value="" name="name" placeholder="Name">
            </div>
            <div class="laptop-desc">
                <ul>
                    <li class="inp-l"><input class="inp" value="" name="image" placeholder="Image"></li>
                    <li class="inp-l"><input class="inp" value="" name="screen" placeholder="Screen"></li>
                    <li class="inp-l"><input class="inp" value="" name="processor" placeholder="Processor"></li>
                    <li class="inp-l"><input class="inp" value="" name="ram" placeholder="Ram"></li>
                    <li class="inp-l"><input class="inp" value="" name="rom" placeholder="Rom"></li>
                    <li class="inp-l"><input class="inp" value="" name="video_card" placeholder="Video card"></li>
                    <li class="inp-l"><input class="inp" value="" name="color" placeholder="Color"></li>
                    <li class="inp-l"><input class="inp" value="" name="battery" placeholder="Battery"></li>
                </ul>
            </div>
            <div class="btns">
                <div class="btn-cont"><button class="btn">Add</button></div>
            </div>
        </form>
    </div>
    @foreach($laptops as $laptop)
    <div class="content-field-laptop">
        <img class="laptop-img" src="{{asset($laptop->image)}}" alt="Laptop image">
        <form class="laptop-text-info">
            <div class="laptop-name">
                <input class="inp" value="{{$laptop->name}}">
            </div>
            <div class="laptop-desc">
                <ul>
                    <li class="inp-l"><input class="inp" value="{{$laptop->image}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->screen}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->processor}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->ram}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->rom}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->video_card}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->color}}"></li>
                    <li class="inp-l"><input class="inp" value="{{$laptop->battery}}"></li>
                </ul>
            </div>
            <div class="btns1">
                <div class="btn-cont"><button class="btn">Save</button></div>
                <div class="btn-cont"><button class="btn">Delete</button></div>
            </div>
        </form>
    </div>
    @endforeach
</div>
</main>
</body>
@endsection
