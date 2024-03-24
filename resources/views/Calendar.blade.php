@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/Calendar.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div id="calendar"></div>
<script type="module" src="{{ asset('js/calendar.js') }}"></script>
</body>
@endsection
