<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Qui sommes-nous ? </title>

        <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> 
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" /> 


        <!-- Styles -->
      
    </head>
    <x-app-layout>
<body>

    <main class="qsn">
    <body>
        <!-- Navigation-->

        <!-- page-content -->
        <div class="hero_qsn">

        </div>

        <div class="espaceur"></div>

        <div class="qsn_missions">
            <div class="qsn_missions_gauche">
                <h2>Nos missions</h2>
                <div class="espaceur"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime autem ut nihil perspiciatis perferendis consectetur doloribus sint vel quam sequi voluptas fuga impedit, placeat, dignissimos, tempore harum provident necessitatibus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime autem ut nihil perspiciatis perferendis consectetur doloribus sint vel quam sequi voluptas fuga impedit, placeat, dignissimos, tempore harum provident necessitatibus.</p>
                <div class="espaceur"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime autem ut nihil perspiciatis perferendis consectetur doloribus sint vel quam sequi voluptas fuga impedit, placeat, dignissimos, tempore harum provident necessitatibus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime autem ut nihil perspiciatis perferendis consectetur doloribus sint vel quam sequi voluptas fuga impedit, placeat, dignissimos, tempore harum provident necessitatibus.</p>
            </div>
            <div class="qsn_missions_droite">
                <div class="qsn_missions_photo">
                    <img src="{{url('/img/ruche_foret.png')}}" class="qsn_missions_photo_haut">
                    <img src="{{url('/img/abeille_ruche.png')}}" class="qsn_missions_photo_haut">
                </div>
                    <img src="{{url('/img/boutique_redim.png')}}">
            </div>
        </div>

        <div class="espaceur"></div>
        
        <div class="qsn_famille">

            <div class="espaceur"></div>

            <h2 class="centrer">Rencontrez notre famille</h2>
            <div class="separateur"></div>

            <div class="espaceur"></div>
            <div class="espaceur"></div>

            <div class="qsn_famille_liste">
                <img src="{{url('/img/michel_bzz.png')}}" class="qsn_famille_selfie">
                <img src="{{url('/img/petit_michel_bzz.png')}}" class="qsn_famille_selfie">
                <img src="{{url('/img/grand_pere_michel_bzz.png')}}" class="qsn_famille_selfie">
                <img src="{{url('/img/femme_michel_bzz.png')}}" class="qsn_famille_selfie">
            </div>

            <div class="espaceur"></div>
            <div class="espaceur"></div>

        </div>

        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <div class="qsn_magasin">
            <div class="qsn_magasin_gauche">
                <img src="{{url('/img/boutique_interieur.png')}}">
            </div>
            <div class="qsn_magasin_droite">
                <h2 class="p_magasin">Le magasin</h2>
                <div class="espaceur"></div>
                <p class="p_magasin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error placeat temporibus aspernatur maxime! Aliquam animi, veritatis, placeat quos ratione, fugit molestiae magnam reprehenderit commodi officia qui officiis quia iusto id?</p>
                <p class="p_magasin">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error placeat temporibus aspernatur maxime! Aliquam animi, veritatis, placeat quos ratione, fugit molestiae magnam reprehenderit commodi officia qui officiis quia iusto id?</p>
            </div>
        </div>

        <div class="qsn_magasin">
            <div class="qsn_magasin_gauche">
                <h2>Le musée</h2>
                <div class="espaceur"></div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error placeat temporibus aspernatur maxime! Aliquam animi, veritatis, placeat quos ratione, fugit molestiae magnam reprehenderit commodi officia qui officiis quia iusto id?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error placeat temporibus aspernatur maxime! Aliquam animi, veritatis, placeat quos ratione, fugit molestiae magnam reprehenderit commodi officia qui officiis quia iusto id?</p>
            </div>
            <div class="qsn_magasin_droite">
                <img src="{{url('/img/musee_2.png')}}">
            </div>
        </div>

        <div class="espaceur"></div>
        <div class="espaceur"></div>
    </main>

</body>
</html>

</x-app-layout>
@include('layouts.footer')