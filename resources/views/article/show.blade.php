<x-app-layout>
    <div class="fiche_produit_general">

        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <div class="fiche">
            <img src="{{ asset('/storage/' . $article->image) }}" alt="miniature article" class="miniature_fiche">

            <div class="fiche_contenu">
                <h2>{{ $article->title }}</h2>
                <div class="espaceur"></div>
                <p>{{ $article-> content }}</p>
                <div class="espaceur"></div>
                <p>{{ $article->price }} €</p>
                <div class="espaceur"></div>
                <p>Origine : France</p>
            </div>
        </div>
        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <h2 class="centrer">Produits similaire</h2>

        <div class="espaceur"></div>

        <section class="produits_liste_produits">

        <?php
            $categ = $article->articlecategory_id;
            $name = $article->title;
        ?>

            <ul>
                @foreach($articles as $article)



                @if ($article->articlecategory_id == $categ && $article->title != $name )
                <li>


                    <article class="card">
                        <img class="card__background" src="{{ asset('/storage/' . $article->image) }}" alt="photo produit" width="1920" height="2193" />
                        <div class="card__content | flow">
                            <div class="card__content--container | flow">
                                <h2 class="card__title card_h2">{{$article->title}}</h2>
                                <p class="card__description card_p">
                                    {{ Str::limit($article->content, 75)}}
                                </p>
                            </div>
                            <a href="{{ route('articles.show', $article)}}">
                                <button class="card__button">En savoir +</button>
                            </a>
                        </div>
                    </article>



                </li>
                @endif


                @endforeach
            </ul>

        </section>

        <div class="espaceur"></div>
        <div class="espaceur"></div>
    </div>




</x-app-layout>
@include('layouts.footer')