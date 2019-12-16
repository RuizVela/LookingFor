
<style>
     body {
        
    background: url("https://estaticos.elperiodico.com/resources/jpg/6/8/ciencia-del-universo-1530540262286.jpg") no-repeat center center fixed;
    background-size: cover;
    }
    .form {
        background-color: gray;
        width: 300px;
        padding: 10px;
        text-align: center;
        position: absolute;
        right: 15;
        top: 15;
        border-radius: 10%;
        display: block;
    }
    h1 {
        text-align: center;
        font-size: 50px;
    }
    #text {
        background-color: rgba(128, 128, 128, 0.5);
        position: absolute;
        left: 0;
        right: 0;
        top: 100px;
        margin: auto;
        width: 500px;  
    }
    p{
        font-size: 20px;
        font-weight: bold;
    }
    #enter{
        background-color: yellow;
        border: none;
        padding: 32px 54px;
        font-size: 32px;
        margin: 0px 25%;
    }

   
</style>

<body>
    <div id="text">
        <h1>¡Te damos la bienvenida a LookingFor!</h1>
        <p>Encuentra un equipo en el que competir a nivel amateur o profesional.</p>
        <p>Anuncia tu equipo para que lo vean miles de jugadores.</p>
<a href="/main">
    <input id="enter" type="button" value="ENTRA">
</a>
    </div>
    <div class="form">
        @auth
            <form action="{{ route('logout') }}" method="POST" >
                @csrf
                <input type="submit" value="Cerrar sesión">
            </form>

            @endauth
            @guest
        @include('auth.register')
        @include('auth.login')
    </div>
    @endguest
</body>