<header class="header">
    <nav>
        <div class="logo">
            <a href="/"> <img src="{{url('/img/logo_bzz.png')}}" style="height: 10vh"></a>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
            <li><a href="/">Accueil</a></li>
            <li><a href="/qsn">Qui sommes nous</a></li>
            <li><a href="/boutique">Boutique</a></li>
            <li><a href="/blog">Actualités</a></li>
            <li><a href="/contact">Contact</a></li>

            @auth
            @if (auth()->user()->isAdmin == 'oui')
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color : white">
                {{ __('Dashboard') }}
            </x-nav-link>

            <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')" style="color : white">
                {{ __('Créer un post') }}
            </x-nav-link>

            <x-nav-link :href="route('articles.create')" :active="request()->routeIs('articles.create')" style="color : white">
                {{ __('Créer une fiche produit') }}
            </x-nav-link>
            @endif


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Deconnexion') }}
                </x-dropdown-link>
            </form>
            @endauth
        </ul>
    </nav>
</header>