<x-app-layout>
  <div class="produits">


    <div class="hero_produits">

    </div>



    <section class="produits_liste_produits">

      <div class="espaceur"></div>

      <h2 class="centrer">Les miels</h2>


      <ul>
        @foreach($articles as $article)

        @if ($article->articlecategory_id == '1')
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


      <div class="espaceur"></div>
      <div class="espaceur"></div>
    </section>
    <div class="espaceur"></div>
    <div class="espaceur"></div>

    <div class="produits_adoption">

      <h2>Vous voulez devenir le foyer d'une ruche ?</h2>
      <a href="/parrainage">
        <div class="btn btn-three">
          <span>En savoir +</span>
        </div>
      </a>
      <a href="/parrainage">
        <img src="{{url('/img/tour_eiffel.png')}}" class="parrainage_photo">
      </a>

    </div>

    <div class="espaceur"></div>
    <div class="espaceur"></div>

    <section class="produits_liste_produits">

      <div class="espaceur"></div>
      <div class="espaceur"></div>



      <h2 class="centrer">Les accessoires</h2>


      <ul>
        @foreach($articles as $article)



        @if ($article->articlecategory_id == '3')
        <li>
          <article class="card">
            <img class="card__background" src="{{ asset('/storage/' . $article->image) }}" alt="photo produit" width="1920" height="2193" />
            <div class="card__content | flow">
              <div class="card__content--container | flow">
                <h2 class="card__title card_h2">{{ Str::limit($article->title, 10)}}</h2>
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

  </div>

</x-app-layout>
@include('layouts.footer')