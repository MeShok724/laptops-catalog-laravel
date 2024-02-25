@extends('layouts.bars')
@section('bars')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <main>
        <div class="categories-fields">
            <ul>
                <li><a href="#">Office laptops</a></li>
                <li><a href="#">Gaming laptops</a></li>
                <li><a href="#">Compact laptops</a></li>
            </ul>
        </div>
        <div class="content-field">
            @for($i = 0; $i<5; $i++)
                <div class="content-field-laptop">
                    <img class="laptop-img" src="{{asset('images/lenovolegion5_1.jpeg')}}" alt="Laptop image">
                    <div class="laptop-text-info">
                        <div class="laptop-name">
                            <a class="black-text" href="#">Lenovo Legion 5 15ACH6</a>
                        </div>
                        <div class="laptop-desc">
                            <ul>
                                <li>15.6" 2560 x 1440, IPS, 165 Hz</li>
                                <li>AMD Ryzen 5 5600H</li>
                                <li>16 GB DDR4</li>
                                <li>SSD 1024 GB</li>
                                <li>NVIDIA GeForce RTX 3050 Ti 4 GB Graphics Card (TDP 95 W)</li>
                                <li>The color of the lid is dark blue</li>
                                <li>battery 60 Wh</li>
                            </ul>
                        </div>
                        <div class="laptop-under-desc">
                            <a class="product-page-ref" href="{{route('lapPage')}}">Product page</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </main>
@endsection
