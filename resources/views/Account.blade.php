@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/Account.css')}}">
<body>
<div class="registration">
    <h1 class="reg-header">Create account</h1>
    <form method="POST" action="{{route('register')}}" class="registration">
        @csrf
        <div class="reg-fields">
            <label class="reg-label">Your name</label>
            <input class = "reg-input @error('name') is-invalid @enderror" type = "text" name="name" placeholder="Enter login...">

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label class="reg-label">Your email</label>
            <input class = "reg-input @error('email') is-invalid @enderror" type = "email" name="email" placeholder="Enter email...">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label class="reg-label">Your password</label>
            <input class = "reg-input @error('password') is-invalid @enderror" type = "password" name="password" placeholder="Confirm password...">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label class="reg-label">Confirm password</label>
            <input class = "reg-input" type = "password" name="password_confirmation" placeholder="Repeat password...">
        </div>
        <div class="buttons">
            <button class="but-reg">Create your account</button>
            <a href="{{route('log')}}" class="but-in"><u>Log in</u></a>
        </div>
    </form>

</div>
</body>
@endsection
