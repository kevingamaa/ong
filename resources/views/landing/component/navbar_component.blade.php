<section id="fh5co-header">
    <div class="container">
        <nav role="navigation">
            <ul class="pull-left left-menu">
                <li><a href="{{ route('quem-somos.landing') }}">Quem Somos</a></li>
                <li><a href="{{ route('doacoes.landing') }}">Doações</a></li>
                <!-- <li><a href="album.php">Album</a></li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
			          Saiba mais <i class="fas fa-caret-down"></i>
			        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('parceiros.landing') }}">Parceiros</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('projetos.landing') }}">Projetos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('album.landing') }}">Album</a>
                    </div>
                </li>
            </ul>
            <h1 id="fh5co-logo">
                <a href="{{ route('index.landing') }}"><img src="{{ asset('landing/img/logo.png') }}" ></a>
            </h1>
            <ul class="pull-right right-menu">
                <li class="fh5co-cta-btn"><a href="javascript:void(0)" class="btn-doar">Realizar uma Doação</a></li>
            </ul>
        </nav>
    </div>
</section>