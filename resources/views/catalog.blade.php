@extends('layouts.bars')
@section('bars')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <main>
        <div class="categories-fields">
            <ul>
                <li><a href="{{route('category', 'Office laptops')}}">Office laptops</a></li>
                <li><a href="{{route('category', 'Gaming laptops')}}">Gaming laptops</a></li>
                <li><a href="{{route('category', 'Compact laptops')}}">Compact laptops</a></li>
            </ul>
        </div>
        <div class="content-field">
            @foreach($laptops as $laptop)
                <div class="content-field-laptop">
                    <img class="laptop-img" src="{{asset($laptop->image)}}" alt="Laptop image">
                    <div class="laptop-text-info">
                        <div class="laptop-name">
                            <a class="black-text" href="{{route('lapPage', $laptop->id)}}">{{$laptop->name}}</a>
                        </div>
                        <div class="laptop-desc">
                            <ul>
                                <li>{{$laptop->screen}}</li>
                                <li>{{$laptop->processor}}</li>
                                <li>{{$laptop->ram}}</li>
                                <li>{{$laptop->rom}}</li>
                                <li>{{$laptop->video_card}}</li>
                                <li>{{$laptop->color}}</li>
                                <li>{{$laptop->battery}}</li>
                            </ul>
                        </div>
                        <div class="laptop-under-desc">
                            <a class="product-page-ref" href="{{route('lapPage', $laptop->id)}}">Product page</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
