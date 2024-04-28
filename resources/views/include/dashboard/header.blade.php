<header class="header">
    <div class="container">
        <div class="btn-menu">
            <label for="btn-menu">☰</label>
        </div>
        <a class="logo" href="index.php">
            <img src="img/logo/logoudablanco2.png" alt="">
        </a>
        <nav class="menu">
            <a href="dashboard/">Inicio</a>
            <a href="dashboard/Perfil.php">Mi Perfil</a>
            <a>
                <form action="{{ route('singOut') }}" method="POST">
                    @csrf
                    <button type="submit" style="border: none; background: 0%;">Desconectarse</button>
                </form>
            </a>
        </nav>
    </div>
</header>