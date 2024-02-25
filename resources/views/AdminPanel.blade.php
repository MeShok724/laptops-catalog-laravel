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
    @for($i = 0; $i<5; $i++)
    <div class="content-field-laptop">
            <div class="imgAndChoose">
                <img class="laptop-img" src="{{asset('images/lenovolegion5_1.jpeg')}}" alt="Laptop image">
                <input type="file" class="inpImg">
            </div>
            <div class="laptop-text-info">
                <div class="laptop-name">
                    <input class="inp" value="Lenovo Legion 5 15ACH6">
                </div>
                <div class="laptop-desc">
                    <ul>
                        <li class="inp-l"><input class="inp" value='15.6" 2560 x 1440, IPS, 165 Hz'></li>
                        <li class="inp-l"><input class="inp" value="AMD Ryzen 5 5600H"></li>
                        <li class="inp-l"><input class="inp" value="16 GB DDR4"></li>
                        <li class="inp-l"><input class="inp" value="SSD 1024 GB"></li>
                        <li class="inp-l"><input class="inp" value="NVIDIA GeForce RTX 3050 Ti 4 GB Graphics Card (TDP 95 W)"></li>
                        <li class="inp-l"><input class="inp" value="The color of the lid is dark blue"></li>
                        <li class="inp-l"><input class="inp" value="battery 60 Wh"></li>
                    </ul>
                </div>
                <div class="btn-cont"><button class="btn">Save</button></div>
            </div>
    </div>
    @endfor
</div>
</main>
</body>
@endsection
