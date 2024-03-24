@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/AdminPanel.css')}}">
<body>
<main>
<div class="categories-fields">
    <ul>
        <li><a href="{{route('adminCategory', 'Office laptops')}}">Office laptops</a></li>
        <li><a href="{{route('adminCategory', 'Gaming laptops')}}">Gaming laptops</a></li>
        <li><a href="{{route('adminCategory', 'Compact laptops')}}">Compact laptops</a></li>
    </ul>
</div>
<div class="content-field">
    <div class="content-field-laptop">
        <form class="form-add" action="{{route('adminCreate')}}" method="POST">
            @csrf
            <div class="laptop-name">
                <input class="inp" value="" name="name" placeholder="Name">
            </div>
            <div class="laptop-desc">
                <ul>
                    <li class="inp-l"><input class="inp" value="" name="image" placeholder="Image"></li>
                    <li class="inp-l"><input class="inp" value="" name="category" placeholder="Category"></li>
                    <li class="inp-l"><input class="inp" value="" name="screen" placeholder="Screen"></li>
                    <li class="inp-l"><input class="inp" value="" name="processor" placeholder="Processor"></li>
                    <li class="inp-l"><input class="inp" value="" name="ram" placeholder="Ram"></li>
                    <li class="inp-l"><input class="inp" value="" name="rom" placeholder="Rom"></li>
                    <li class="inp-l"><input class="inp" value="" name="video_card" placeholder="Video card"></li>
                    <li class="inp-l"><input class="inp" value="" name="color" placeholder="Color"></li>
                    <li class="inp-l"><input class="inp" value="" name="battery" placeholder="Battery"></li>
                    <li class="inp-l"><div class="date">
                            <p class="date-text">Release date:</p>
                            <input type="date" class="date-inp" value="2024-03-24" min="1982-01-01" name="release_date">
                        </div></li>
                </ul>
            </div>
            <div class="btns">
                <div class="btn-cont"><button class="btn">Add</button></div>
            </div>
        </form>
    </div>
    @foreach($laptops as $laptop)
    <div class="content-field-laptop">
        <div style="display: flex; width: 100%">
            <img class="laptop-img" src="{{asset($laptop->image)}}" alt="Laptop image">
            <form class="laptop-text-info" method="post" action="{{route('adminUpdate', $laptop->id)}}">
                @csrf
                <div class="laptop-name">
                    <input class="inp" name="name" value="{{$laptop->name}}">
                </div>
                <div class="laptop-desc">
                    <ul>
                        <li class="inp-l"><input class="inp" name="image" value="{{$laptop->image}}"></li>
                        <li class="inp-l"><input class="inp" name="category" value="{{$laptop->category}}"></li>
                        <li class="inp-l"><input class="inp" name="screen" value="{{$laptop->screen}}"></li>
                        <li class="inp-l"><input class="inp" name="processor"  value="{{$laptop->processor}}"></li>
                        <li class="inp-l"><input class="inp" name="ram" value="{{$laptop->ram}}"></li>
                        <li class="inp-l"><input class="inp" name="rom"  value="{{$laptop->rom}}"></li>
                        <li class="inp-l"><input class="inp" name="video_card" value="{{$laptop->video_card}}"></li>
                        <li class="inp-l"><input class="inp" name="color"  value="{{$laptop->color}}"></li>
                        <li class="inp-l"><input class="inp" name="battery"  value="{{$laptop->battery}}"></li>
                        <li class="inp-l"><div class="date">
                                <p class="date-text">Release date:</p>
                                <input type="date" class="date-inp" value="{{$laptop->release_date}}" min="1982-01-01" name="release_date">
                            </div></li>
                    </ul>
                </div>
                <div class="btns1">
                    <div class="btn-cont"><button type="submit" class="btn">Save</button></div>
                </div>
            </form>
        </div>
        <form method="post" action="{{route('adminDelete', $laptop->id)}}">
            @csrf
            <button class="btn-delete" type="submit">Delete</button>
        </form>
    </div>
    @endforeach
</div>
</main>
</body>
@endsection
