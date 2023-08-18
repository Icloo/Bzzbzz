<x-app-layout>




    <div class="dashboard">

        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <h2 class="centrer">DASHBOARD</h2>

        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <div class="">

            @if(session('success'))
            {{session('success')}}
            @endif


            @if (auth()->user()->isAdmin == 'oui')

            <div class="">
                <h2 class="centrer">FICHES PRODUITS</h2>
                @foreach ($articles as $article)
                <div class="dashboard_modif">
                    <a href="{{ route('articles.edit', $article) }}" class="editer">Editer {{ $article->title }}</a>

                    <div class="supprimer">

                        <form action="{{ route('articles.destroy',$article)}}" method="post" id="destroy-article-form">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer {{ $article->title }} </button>
                        </form>

                    </div>
                </div>
                @endforeach
            </div>

            <div class="espaceur"></div>


            <div class="">
                <h2 class="centrer">ACTUALITES</h2>
                @foreach ($posts as $post)
                <div class="dashboard_modif">
                    <a href="{{ route('posts.edit', $post) }}" class="editer">Editer {{ $post->title }}</a>

                    <div class="supprimer">

                        <form action="{{ route('posts.destroy',$post)}}" method="post" id="destroy-post-form">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer {{ $post->title }} </button>
                        </form>

                    </div>

                </div>
                @endforeach
            </div>

            @endif

        </div>

        <div class="espaceur"></div>
        <div class="espaceur"></div>

    </div>
</x-app-layout>
@include('layouts.footer')