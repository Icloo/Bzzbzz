<x-app-layout>
  <div class="produits">


    <div class="hero_produits">

    </div>

    <div class="espaceur"></div>

    <section class="produits_liste_produits">

      <h2 class="centrer">Les miels</h2>


      <ul>
        @foreach($articles as $article)



        @if ($article->articlecategory_id == '1')
        <li>
          <div class="">

            <div class="">



              <div class="">
                <div class="">
                  <img class="" src="{{ asset('/storage/' . $article->image) }}">
                  <div class="">

                    <h1 class="">{{$article->title}}</h1>
                    <p class="">{{ Str::limit($article->content, 75)}}</p>
                    <span class="">
                      {{$article->price}} €
                    </span>
                    <div class="">
                      <a href="{{ route('articles.show', $article)}}">
                        <button class="">Learn more</button>
                      </a>

                    </div>
                  </div>

                </div>

              </div>

            </div>



        </li>
        @endif


        @endforeach
      </ul>
    </section>

    <div class="espaceur"></div>
    <div class="espaceur"></div>

    <div class="produits_adoption">

      <h2>Devenez le foyer d'une ruche</h2>
      <p>----------></p>
      <a href="/parrainage">
        <p>IMAGE ICI</p>
      </a>
    </div>


    <div class="espaceur"></div>
    <div class="espaceur"></div>


    <section class="produits_liste_produits">

      <h2 class="centrer">Les accessoires</h2>


      <ul>
        @foreach($articles as $article)



        @if ($article->articlecategory_id == '3')
        <li>
          <div class="">

            <div class="">



              <div class="">
                <div class="">
                  <img class="" src="{{ asset('/storage/' . $article->image) }}">
                  <div class="">

                    <h1 class="">{{$article->title}}</h1>
                    <p class="">{{ Str::limit($article->content, 75)}}</p>
                    <span class="">
                      {{$article->price}} €
                    </span>
                    <div class="">
                      <a href="{{ route('articles.show', $article)}}">
                        <button class="">Learn more</button>
                      </a>

                    </div>
                  </div>

                </div>

              </div>

            </div>

            <hr>

        </li>
        @endif


        @endforeach
      </ul>
    </section>

  </div>

</x-app-layout>
@include('layouts.footer')