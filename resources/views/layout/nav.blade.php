<section class="header">
    <div class="container mb-5">
        <nav class="navbar navbar-expand-xl navbar-light">
            <a class="navbar-brand navbar-brand-main text-center" href="/">
                <img src="{{asset('storage/pictures/dragon-small.png')}}" height="75" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-xl-around" id="navbarNavDropdown">
                <ul class="nav navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('menu')}}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}">Nieuws</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand navbar-brand-main p-md-0 p-0 text-center" href="/">
                <img src="{{asset('storage/pictures/dragon-small-flipped.png')}}" height="75" alt="logo">
            </a>
        </nav>
    </div>
</section>
