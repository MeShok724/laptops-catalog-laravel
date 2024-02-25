@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/Account.css')}}">
<body>
<div class="registration">
    <h1 class="reg-header">Create account</h1>
    <div class="reg-fields">
        <label class="reg-label">Your name</label>
        <input class = "reg-input" type = "text" placeholder="Enter login...">
        <label class="reg-label">Your email</label>
        <input class = "reg-input" type = "email" placeholder="Enter email...">
        <label class="reg-label">Your password</label>
        <input class = "reg-input" type = "password" placeholder="Confirm password...">
        <label class="reg-label">Confirm password</label>
        <input class = "reg-input" type = "password" placeholder="Repeat password...">
    </div>
    <div class="buttons">
        <button class="but-reg">Create your account</button>
        <form action="{{route('login')}}">
            <button class="but-in">Log in</button>
        </form>
    </div>

</div>
</body>
@endsection
