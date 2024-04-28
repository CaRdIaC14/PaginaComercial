<html>
    <body>
        <form action="{{ route('loginVerify') }}" method="POST" >
            @csrf
            <input type="email" name="correo" placeholder="Correo institucional">
            <input type="password" name="password" placeholder="Contraseña">
            <div class="button-box">
                <div class="button-box text-center">
                    <button type="submit" class="default-btn">Entrar</button>
                </div>
            </div>
        </form>
    </body>
</html>