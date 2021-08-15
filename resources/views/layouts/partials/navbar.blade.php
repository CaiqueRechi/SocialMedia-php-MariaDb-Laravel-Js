<header class="nav-down responsive-nav hidden-lg hidden-md">
    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!--/.navbar-header-->
    <div id="main-nav" class="collapse navbar-collapse">
        <nav>
            <ul class="nav navbar-nav">
                <li><a href="#top">Home</a></li>
                <li><a href="#featured">TOP Posts</a></li>
                <li><a href="#recent">Últimas Postagens</a></li>
                <li><a href="#contact">Entre em Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="sidebar-navigation hidde-sm hidden-xs">
    <div class="logo">
        <a href="{{ route('home') }}">D<em>agh</em></a>
    </div>
    <nav>
        <ul>
            <li>
                <a href="#top">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Home
                </a>
            </li>
            <li>
                <a href="#featured">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    TOP Posts
                </a>
            </li>
            <li>
                <a href="#recent">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Últimas Postagens
                </a>
            </li>
            <li>
                <a href="{{ route('posts.create') }}">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Nova Postagem
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Entre em Contato
                </a>
            </li>
        </ul>
    </nav>
    <ul class="social-icons">
        <li><a href="https://www.facebook.com/caique.rechi"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/in/caique-rechi-170595172/"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>
