@extends('layouts.app')
@section('content')
<style>
         body {
    background: url("https://images.squarespace-cdn.com/content/v1/5a1bcb0db7411ccec823b109/1513288418944-T20C4ELX9YV6I590B517/ke17ZwdGBToddI8pDm48kCKxPW2sfGBnvcQSgcMLVQQUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYy7Mythp_T-mtop-vrsUOmeInPi9iDjx9w8K4ZfjXt2dh4T5RKB6zPI3hbe2JUz2BbdWsSPbgPXsF7Rr_6Gv48QZDqXZYzu2fuaodM4POSZ4w/rejilla.jpg?format=2500w") no-repeat center center fixed;
    background-size: cover;
    }
    h1{
        text-align: center;
        color:white;
    }
    </style>
<body>    

    @include('games.index')
    
    
</body>
    @endsection