@extends('layouts.bars')
@section('bars')
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
<body>
<div class="login">
    <h1 class="log-header">Log in</h1>
    <div class="log-fields">
        <label class="log-label">Your name</label>
        <input class = "log-input" type = "text" placeholder="Enter login...">
        <label class="log-label">Your password</label>
        <input class = "log-input" type = "password" placeholder="Confirm password...">
    </div>
    <div class="buttons">
        <button class="but-log">Log in</button>
        <form action="{{route('createAccount')}}">
            <button  class="but-reg">Create account</button>
        </form>
    </div>

</div>
</body>
@endsection
