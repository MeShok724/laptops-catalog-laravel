@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/laptopPage.css')}}">
<body>
    <h1 class="laptop-header">{{$laptop->name}}</h1>
    <div class="laptop-img-cont">
        <img class="laptop-img" src="{{asset($laptop->image)}}" alt="Laptop image">
    </div>
    <div class="laptop-desc">
        <div>
            <h3 class="desc-header">Description</h3>
            <ul class="desc-ul">
                <li>Screen: {{$laptop->screen}}</li>
                <li>Processor: {{$laptop->processor}}</li>
                <li>RAM: {{$laptop->ram}}</li>
                <li>ROM: {{$laptop->rom}}</li>
                <li>Video card: {{$laptop->video_card}}</li>
                <li>{{$laptop->color}}</li>
                <li>{{$laptop->battery}}</li>
                <li>Release date: {{$laptop->release_date}}</li>
            </ul>
        </div>
    </div>
</body>
@endsection
