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
                <h2 class="centrer">Services</h2>
                <div class="liste_service">
                    <div class="service">
                        <img src="Kih-ja_a_big_rustic_building_that_serves_as_a_store_to_sell_hon_7c7dcea5-aa6a-41ba-adb4-741acdd038ab.png" class="image_service">
                        <h2>Musée</h2>
                        <p>Description musée</p>
                    </div>
                    <div class="service">
                        <img src="Kih-ja_a_range_of_honey_in_their_premium_jars_for_presentation__4ecd495a-7ee7-4f0c-be0d-7787524da22c.png" class="image_service">
                        <h2>Boutique</h2>
                        <p>Description boutique</p>
                    </div>
                    <div class="service">
                        <img src="Kih-ja_a_beehive_on_the_roof_of_a_building_in_paris_in_the_fore_cca49013-0c90-4887-bcc6-bd05dfc838e4.png" class="image_service">
                        <h2>Ruche à domicile</h2>
                        <p>Description ruche à domicile</p>
                    </div>
                    <div class="service">
                        <img src="Kih-ja_contact_page_for_website_of_a_bee_holding_a_letter_on_le_c1da7c8f-e0ee-4db3-9583-4df23c5ab4c2.png" class="image_service">
                        <h2>Blog</h2>
                        <p>Description blog</p>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#5f6f52" fill-opacity="1" d="M0,192L20,181.3C40,171,80,149,120,160C160,171,200,213,240,234.7C280,256,320,256,360,245.3C400,235,440,213,480,213.3C520,213,560,235,600,234.7C640,235,680,213,720,197.3C760,181,800,171,840,192C880,213,920,267,960,250.7C1000,235,1040,149,1080,138.7C1120,128,1160,192,1200,218.7C1240,245,1280,235,1320,213.3C1360,192,1400,160,1420,144L1440,128L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
                </svg>
            </div>

            <div class="contenu_2">

                <h2 class="centrer">A propos</h2>

                <div class="accueil_a_propos">
                    <div class="accueil_a_propos_gauche">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio dolorum quod quis, corporis error repudiandae nulla, modi architecto ratione cupiditate omnis autem iusto totam dicta nihil exercitationem consequatur dolor.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio dolorum quod quis, corporis error repudiandae nulla, modi architecto ratione cupiditate omnis autem iusto totam dicta nihil exercitationem consequatur dolor.</p>
                        <div class="espaceur"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio dolorum quod quis, corporis error repudiandae nulla, modi architecto ratione cupiditate omnis autem iusto totam dicta nihil exercitationem consequatur dolor.</p>
                    </div>

                    <div class="accueil_a_propos_droite">
                        <img src="{{url('/img/ruche_foret.png')}}" class="accueil_a_propos_photo_principale">
                        <img src="{{url('/img/ruche_foret.png')}}" class="accueil_a_propos_photo_secondaire">
                        <img src="{{url('/img/ruche_foret.png')}}" class="accueil_a_propos_photo_secondaire_2">
                        <img src="{{url('/img/ruche_foret.png')}}" class="accueil_a_propos_photo_secondaire_3">
                    </div>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#5f6f52" fill-opacity="1" d="M0,192L20,181.3C40,171,80,149,120,160C160,171,200,213,240,234.7C280,256,320,256,360,245.3C400,235,440,213,480,213.3C520,213,560,235,600,234.7C640,235,680,213,720,197.3C760,181,800,171,840,192C880,213,920,267,960,250.7C1000,235,1040,149,1080,138.7C1120,128,1160,192,1200,218.7C1240,245,1280,235,1320,213.3C1360,192,1400,160,1420,144L1440,128L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path>
            </svg>

            <div class="espaceur"></div>

            <div class="accueil_liste_posts">

            <h2 class="centrer">Consultez nos derniers articles</h2>

            <div class="espaceur"></div>

            @if ($post->isNotEmpty())
            <ul>
                @foreach ($post as $post)
                <li>
                    <div class="">
                        <h3 class="">{{ Str::limit($post->title, 30) }}</h3>
                        <p>{{ Str::limit($post->content, 15) }}</p>
                        <a href="{{ route('posts.show', $post) }}">Lire l'article</a>
                    </div>
                </li>
                @endforeach
            </ul>
            @endif

            </div>







        </body>
        <!-- Footer -->
    </main>

</html>

</x-app-layout>
@include('layouts.footer')