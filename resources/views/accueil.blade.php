<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Accueil</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <!-- Styles -->

</head>
<x-app-layout>
    <main class="accueil">

        <body>

            <div class="accueil_hero">
                <h1 class="titre">La cité de l'abeille</h1>
                <h2 class="centrer sous_titre">Bien plus qu'une histoire de miel</h2>
            </div>
            <div class="contenu_1">
                <div class="espaceur"></div>
                <div class="espaceur"></div>
                <h2 class="centrer">Services</h2>
                <div class="liste_service">
                    <div class="service testanim_service_1">
                        <i class="fa-solid fa-book"></i>
                        <h3>Musée</h3>
                        <p>Description musée</p>
                        <div class="espaceur"></div>
                        <a href="/qsn">
                            <div class="btn btn-three">
                                <span>En savoir +</span>
                            </div>
                        </a>
                    </div>
                    <div class="service testanim_service_2">
                        <i class="fa-solid fa-shop"></i>
                        <h3>Boutique</h3>
                        <p>Description boutique</p>
                        <div class="espaceur"></div>
                        <a href="/produits">
                            <div class="btn btn-three">
                                <span>En savoir +</span>
                            </div>
                        </a>
                    </div>
                    <div class="service testanim_service_3">
                        <i class="fa-brands fa-hive fa-rotate-90"></i>
                        <h3>Ruche à domicile</h3>
                        <p>Description ruche à domicile</p>
                        <div class="espaceur"></div>
                        <a href="/parrainage">
                            <div class="btn btn-three">
                                <span>En savoir +</span>
                            </div>
                        </a>
                    </div>
                    <div class="service testanim_service_4">
                        <i class="fa-solid fa-newspaper"></i>
                        <h3>Blog</h3>
                        <p>Description blog</p>
                        <div class="espaceur"></div>
                        <a href="/blog">
                            <div class="btn btn-three">
                                <span>En savoir +</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="espaceur"></div>
                <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                            <stop stop-color="rgba(95, 111, 82, 1)" offset="0%"></stop>
                            <stop stop-color="rgba(17, 20, 23, 1)" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,65L34.3,54.2C68.6,43,137,22,206,17.3C274.3,13,343,26,411,41.2C480,56,549,74,617,69.3C685.7,65,754,39,823,26C891.4,13,960,13,1029,28.2C1097.1,43,1166,74,1234,71.5C1302.9,69,1371,35,1440,26C1508.6,17,1577,35,1646,39C1714.3,43,1783,35,1851,26C1920,17,1989,9,2057,21.7C2125.7,35,2194,69,2263,84.5C2331.4,100,2400,95,2469,95.3C2537.1,95,2606,100,2674,88.8C2742.9,78,2811,52,2880,36.8C2948.6,22,3017,17,3086,28.2C3154.3,39,3223,65,3291,78C3360,91,3429,91,3497,84.5C3565.7,78,3634,65,3703,54.2C3771.4,43,3840,35,3909,45.5C3977.1,56,4046,87,4114,91C4182.9,95,4251,74,4320,54.2C4388.6,35,4457,17,4526,10.8C4594.3,4,4663,9,4731,21.7C4800,35,4869,56,4903,67.2L4937.1,78L4937.1,130L4902.9,130C4868.6,130,4800,130,4731,130C4662.9,130,4594,130,4526,130C4457.1,130,4389,130,4320,130C4251.4,130,4183,130,4114,130C4045.7,130,3977,130,3909,130C3840,130,3771,130,3703,130C3634.3,130,3566,130,3497,130C3428.6,130,3360,130,3291,130C3222.9,130,3154,130,3086,130C3017.1,130,2949,130,2880,130C2811.4,130,2743,130,2674,130C2605.7,130,2537,130,2469,130C2400,130,2331,130,2263,130C2194.3,130,2126,130,2057,130C1988.6,130,1920,130,1851,130C1782.9,130,1714,130,1646,130C1577.1,130,1509,130,1440,130C1371.4,130,1303,130,1234,130C1165.7,130,1097,130,1029,130C960,130,891,130,823,130C754.3,130,686,130,617,130C548.6,130,480,130,411,130C342.9,130,274,130,206,130C137.1,130,69,130,34,130L0,130Z"></path>
                </svg>
            </div>

            <div class="contenu_2">

                <h2 class="centrer a_propos">A propos</h2>
                <div class="espaceur"></div>
                <div class="accueil_a_propos">
                    <div class="accueil_a_propos_gauche testanim">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio dolorum quod quis, corporis error repudiandae nulla, modi architecto ratione cupiditate omnis autem iusto totam dicta nihil exercitationem consequatur dolor.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio dolorum quod quis, corporis error repudiandae nulla, modi architecto ratione cupiditate omnis autem iusto totam dicta nihil exercitationem consequatur dolor.</p>
                        <div class="espaceur"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio dolorum quod quis, corporis error repudiandae nulla, modi architecto ratione cupiditate omnis autem iusto totam dicta nihil exercitationem consequatur dolor.</p>
                        <div class="espaceur"></div>
                        <a href="/qsn">
                            <div class="btn btn-three">
                                <span>En savoir +</span>
                            </div>
                        </a>
                    </div>



                    <div class="accueil_a_propos_droite testanim2">
                        <div class="accueil_a_propos_photo_principale">
                            <div class="polaroids">
                                <a title="Ruche">
                                    <img src="{{url('/img/abeille_close.jpg')}}" class="">
                                </a>
                            </div>
                        </div>
                        <div class="accueil_a_propos_photo_secondaire">
                            <div class="polaroids">
                                <a title="Musée">
                                    <img src="{{url('/img/musee.png')}}" class="">
                                </a>
                            </div>
                        </div>
                        <div class="accueil_a_propos_photo_secondaire_2">
                            <div class="polaroids">
                                <a title="Miel">
                                    <img src="{{url('/img/miel_bocaux.png')}}" class="">
                                </a>
                            </div>
                        </div>
                        <div class="accueil_a_propos_photo_secondaire_3">
                            <div class="polaroids">
                                <a title="Formation">
                                    <img src="{{url('/img/formation.jpg')}}" class="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="espaceur"></div>
                <div class="espaceur"></div>
            </div>


            <div class="accueil_liste_posts">

                <svg class="vague" id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg">

                    <defs>
                        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                            <stop stop-color="rgba(95, 111, 82, 1)" offset="0%"></stop>
                            <stop stop-color="rgba(17, 20, 23, 1)" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,65L34.3,54.2C68.6,43,137,22,206,17.3C274.3,13,343,26,411,41.2C480,56,549,74,617,69.3C685.7,65,754,39,823,26C891.4,13,960,13,1029,28.2C1097.1,43,1166,74,1234,71.5C1302.9,69,1371,35,1440,26C1508.6,17,1577,35,1646,39C1714.3,43,1783,35,1851,26C1920,17,1989,9,2057,21.7C2125.7,35,2194,69,2263,84.5C2331.4,100,2400,95,2469,95.3C2537.1,95,2606,100,2674,88.8C2742.9,78,2811,52,2880,36.8C2948.6,22,3017,17,3086,28.2C3154.3,39,3223,65,3291,78C3360,91,3429,91,3497,84.5C3565.7,78,3634,65,3703,54.2C3771.4,43,3840,35,3909,45.5C3977.1,56,4046,87,4114,91C4182.9,95,4251,74,4320,54.2C4388.6,35,4457,17,4526,10.8C4594.3,4,4663,9,4731,21.7C4800,35,4869,56,4903,67.2L4937.1,78L4937.1,130L4902.9,130C4868.6,130,4800,130,4731,130C4662.9,130,4594,130,4526,130C4457.1,130,4389,130,4320,130C4251.4,130,4183,130,4114,130C4045.7,130,3977,130,3909,130C3840,130,3771,130,3703,130C3634.3,130,3566,130,3497,130C3428.6,130,3360,130,3291,130C3222.9,130,3154,130,3086,130C3017.1,130,2949,130,2880,130C2811.4,130,2743,130,2674,130C2605.7,130,2537,130,2469,130C2400,130,2331,130,2263,130C2194.3,130,2126,130,2057,130C1988.6,130,1920,130,1851,130C1782.9,130,1714,130,1646,130C1577.1,130,1509,130,1440,130C1371.4,130,1303,130,1234,130C1165.7,130,1097,130,1029,130C960,130,891,130,823,130C754.3,130,686,130,617,130C548.6,130,480,130,411,130C342.9,130,274,130,206,130C137.1,130,69,130,34,130L0,130Z"></path>
                </svg>

                <div class="espaceur"></div>



                <h2 class="centrer">Consultez nos derniers articles</h2>

                <div class="espaceur"></div>

                @if ($post->isNotEmpty())
                <ul>
                    @foreach ($post as $post)
                    <li>
                        <article class="card">
                            <img class="card__background" src="{{ asset('/storage/' . $post->image) }}" alt="photo actualité" width="1920" height="2193" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h2 class="card__title card_h2">{{ Str::limit($post->title, 15)}}</h2>
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
                @endif

                <div class="espaceur"></div>
                <div class="espaceur"></div>
                <div class="espaceur"></div>

            </div>


            <div class="accueil_contact">
                <div class="accueil_contact_texte">
                    <div class="espaceur"></div>
                    <h2>Une question ? Une suggestion ?</h2>
                    <div class="espaceur"></div>
                    <p>Votre avis nous interesse !</p>
                    <div class="espaceur"></div>
                    <a href="/contact">
                        <div class="btn btn-three accueil_bouton_contact">
                            <span>Nous contacter</span>
                        </div>
                    </a>
                </div>
            </div>







        </body>
        <!-- Footer -->
    </main>

</html>

</x-app-layout>
@include('layouts.footer')