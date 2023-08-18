<nav x-data="{ open: false }" class="header">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-26">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{url('/img/logo_bzz.png')}}" style="height: 10vh">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="display: flex; align-items : center">


                    <x-nav-link>

                        <a href="/" style="margin-left : -1rem;">
                            {{ __('Accueil') }}
                        </a>

                    </x-nav-link>

                    <x-nav-link>

                        <a href="/qsn" style="margin-left : -1rem;">
                            {{ __('Qui sommes nous') }}
                        </a>

                    </x-nav-link>

                    <x-nav-link :href="route('articles.index')" :active="request()->routeIs('articles.index')" style="color : white">
                        {{ __('Boutique') }}
                    </x-nav-link>

                    <x-nav-link>
                        <a href="/blog" style="margin-left : -1rem;">
                            {{ __('Actualités') }}
                        </a>
                    </x-nav-link>



                    <x-nav-link>

                        <a href="/contact" style="margin-left : -1rem;">
                            {{ __('Contact') }}
                        </a>

                    </x-nav-link>








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
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    @endauth
<!-- 
                    @guest

                    <x-dropdown-link :href="route('login')">
                        {{ __('Se connecter') }}
                    </x-dropdown-link>

                    <x-dropdown-link :href="route('register')">
                            {{ __('S\'enregistrer') }}
                        </x-dropdown-link>

                    @endguest -->



                </div>
            </div>

       

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-nav-link>

                <a href="/accueil" style="margin-top : 1.2rem ; margin-left : -1rem;">
                    {{ __('Accueil') }}
                </a>

            </x-nav-link>

            <x-nav-link :href="route('articles.index')" :active="request()->routeIs('articles.index')" style="color : white">
                {{ __('Nos produits') }}
            </x-nav-link>

            <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')" style="color : white">
                {{ __('Créer un post') }}
            </x-nav-link>







            <x-nav-link>

                <a href="/qsn" style="margin-top : 1.2rem ; margin-left : -1rem;">
                    {{ __('Qui sommes nous') }}
                </a>

            </x-nav-link>

            <x-nav-link>

                <a href="/contact" style="margin-top : 1.2rem ; margin-left : -1rem;">
                    {{ __('Contact') }}
                </a>

            </x-nav-link>

            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color : white">
                {{ __('Dashboard') }}
            </x-nav-link>

            <x-nav-link :href="route('articles.create')" :active="request()->routeIs('articles.create')" style="color : white">

                @if (auth()->id() == 1)
                {{ __('Créer une fiche produit') }}
                @endif

            </x-nav-link>




        </div>

        <!-- Responsive Settings Options -->
        @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800" style="color : white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500" style="color : white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" style="color : white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" style="color : white">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" style="color : white">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>