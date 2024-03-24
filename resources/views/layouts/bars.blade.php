<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laptops catalog</title>
    <link rel="stylesheet" href="{{asset('css/bars.css')}}">
    <script src="https://kit.fontawesome.com/0cca381f7a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <a href="{{route('main')}}"><h2 class="header-website">Laptops Catalog</h2></a>
    <div class="menu-buttons">
        <form action="{{ route('search') }}" class="search-field" method="GET">
            <input type="text" name="search" class="search-input" placeholder="Enter name...">
            <button type="submit" class="search-btn">Search</button>
        </form>
        <a href="{{route('main')}}" class="header-button">Home</a>
        @guest
           @if (Route::has('register'))   {{--Если пользователь не авторизован--}}
            <a href="{{route('log')}}" class="header-button">My account</a>
            @endif
        @else   {{--Если пользователь авторизован--}}
                @if (\Illuminate\Support\Facades\Auth::user()->admin == 1)
                    <a href="{{route('admin')}}" class="header-button">Admin panel</a>
                @endif
            <div class="dropdown">
                <a class="dropbtn">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                <div class="dropdown-content">
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        @endguest
    </div>
</header>
    @yield('bars')
</body>
<footer class="footer">
    <div class="footer-desc">
        <h2 class="footer-header">Laptops catalog</h2>
        <p class="footer-desc-text">This website was developed by a student of the Belarusian State University of Informatics and Radioelectronics, Faculty of Computer Systems and Networks, specialty "Information Technology Software" as part of a task on the subject of Web technology.<br>Use of this site constitutes acceptance of our Terms of Service, Privacy Policy (Your Privacy Rights) and Do Not Sell or Share My Personal Information.<br><br></br>BSUIR, 2024</p>
    </div>
    <div class="footer-author">
        <h3 class="author-header">Creator - Mikhail Kopytok</h3>
        <div class="number">
            <span><i class = "fas fa-phone"></i> 123-456-789</span>
            <span><i class = "fas fa-envelope"></i> total_gsk@gmail.com</span>
        </div>
        <div class = "footer-social">
            <a class = "social" href = "#"><i class = "fab fa-facebook"></i></a>
            <a class = "social" href = "#"><i class = "fab fa-instagram"></i></a>
            <a class = "social" href = "#"><i class = "fab fa-telegram"></i></a>
            <a class = "social" href = "#"><i class = "fab fa-vk"></i></a>
        </div>
    </div>
</footer>
</html>
