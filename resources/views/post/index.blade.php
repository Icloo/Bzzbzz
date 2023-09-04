<x-app-layout>

    <div class="actualite">

        <div class="espaceur"></div>
        <div class="espaceur"></div>


        <div class="liste_posts testanim_service_1 animate">

            <h2 class="centrer">L'actualité de la cité des abeilles</h2>

            <div class="espaceur"></div>


            <ul>
                @foreach ($posts as $post)
                <li>
                    <!-- <div class="">
                        <img src="{{ asset('/storage/' . $post->image) }}" alt="miniature article" class="miniature_article">
                        <h3 class="">{{ Str::limit($post->title, 30) }}</h3>
                        <p>{{ Str::limit($post->content, 15) }}</p>
                        <a href="{{ route('posts.show', $post) }}">Lire l'article</a>
                    </div> -->

                    <article class="card">
                        <img class="card__background" src="{{ asset('/storage/' . $post->image) }}" alt="photo actualité" width="1920" height="2193" />
                        <div class="card__content | flow">
                            <div class="card__content--container | flow">
                                <h2 class="card__title card_h2">{{ Str::limit($post->title, 10)}}</h2>
                                <p class="card__description card_p">
                                    {{ Str::limit($post->content, 75)}}
                                </p>
                            </div>
                            <a href="{{ route('posts.show', $post)}}">
                                <button class="card__button">Lire l'article</button>
                            </a>
                        </div>
                    </article>


                </li>
                @endforeach
            </ul>

        </div>

        <div class="espaceur"></div>
        <div class="espaceur"></div>





    </div>


</x-app-layout>