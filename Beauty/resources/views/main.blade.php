@extends('layouts.app')
@section('content')

<body>
    <div class="commercial" id="commercial_left">
        @include('commercial_left')
    </div>
    <div class="commercial" id="commercial_right">
        @include('commercial_right')
    </div>
    <div class="main">
        @include('games.index')
    </div>
</body>
    @endsection