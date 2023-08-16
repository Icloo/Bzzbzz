<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Parrainer une ruche</title>

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

        <main class="parrainage">

            <body>
                <!-- Navigation-->

                <!-- page-content -->
                <div class="hero_parrainage">

                </div>

                <div class="espaceur parrainage_explication"></div>

                <div class="parrainage_explication">

                    <div class="parrainage_explication_texte">
                        <h2>Intéressé par l'apiculture ou bien soucieux de l'environnement ?</h2>
                        <div class="espaceur"></div>
                        <p>Grace à notre service “adopte une abeille” vous pourez vous aussi vous initié a l’art de l’apiculture et ainsi contribuer activement a la fois a la sauvegarde des abeilles ainsi qu’a la bonne poleinisation de votre environnement.

                            Vous pouvez souscrir a ce service peux importe votre lieu de vie, campagne, foret, lotissement et même en ville

                            Ce service consiste a louer l’une de nos ruche et de l’installer sur votre terrain. Nous nous occupons de l’installation et de l’entretient de celle ci.

                            A l’issue de la récolte, vous garderez une partie de celle ci et pourez goutter le fruit du labeur de vos abeilles.


                        </p>
                    </div>
                    <div class="parrainage_explication_image">
                        <img src="{{url('/img/tour_eiffel.png')}}">
                    </div>
                
                </div>

                <div class="espaceur parrainage_explication"></div>

                <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(206, 130, 13, 1)" offset="0%"></stop><stop stop-color="rgba(19, 20, 22, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,80L14.1,71.7C28.2,63,56,47,85,33.3C112.9,20,141,10,169,15C197.6,20,226,40,254,41.7C282.4,43,311,27,339,31.7C367.1,37,395,63,424,75C451.8,87,480,83,508,75C536.5,67,565,53,593,41.7C621.2,30,649,20,678,21.7C705.9,23,734,37,762,50C790.6,63,819,77,847,68.3C875.3,60,904,30,932,20C960,10,988,20,1016,35C1044.7,50,1073,70,1101,71.7C1129.4,73,1158,57,1186,55C1214.1,53,1242,67,1271,71.7C1298.8,77,1327,73,1355,68.3C1383.5,63,1412,57,1440,48.3C1468.2,40,1496,30,1525,35C1552.9,40,1581,60,1609,58.3C1637.6,57,1666,33,1694,28.3C1722.4,23,1751,37,1779,45C1807.1,53,1835,57,1864,50C1891.8,43,1920,27,1948,20C1976.5,13,2005,17,2019,18.3L2032.9,20L2032.9,100L2018.8,100C2004.7,100,1976,100,1948,100C1920,100,1892,100,1864,100C1835.3,100,1807,100,1779,100C1750.6,100,1722,100,1694,100C1665.9,100,1638,100,1609,100C1581.2,100,1553,100,1525,100C1496.5,100,1468,100,1440,100C1411.8,100,1384,100,1355,100C1327.1,100,1299,100,1271,100C1242.4,100,1214,100,1186,100C1157.6,100,1129,100,1101,100C1072.9,100,1045,100,1016,100C988.2,100,960,100,932,100C903.5,100,875,100,847,100C818.8,100,791,100,762,100C734.1,100,706,100,678,100C649.4,100,621,100,593,100C564.7,100,536,100,508,100C480,100,452,100,424,100C395.3,100,367,100,339,100C310.6,100,282,100,254,100C225.9,100,198,100,169,100C141.2,100,113,100,85,100C56.5,100,28,100,14,100L0,100Z"></path></svg>

                <div class="espaceur"></div>
                <div class="espaceur"></div>

                <h2 class="centrer">Nos offres</h2>

                <div class="espaceur"></div>

                <div class="parrainage_liste">
                    <div class="parrainage_offre">
                        <h2>Offre Marguerite</h2>
                        <img src="{{url('/img/marguerite.png')}}" class="parrainage_offre_photo">
                        <ul>
                            <li>Location d'une ruche</li>
                            <li>Entretien trimestriel des ruches par notre équipe</li>
                            <li>20% de la production de miel</li>
                        </ul>
                    </div>
                    <div class="parrainage_offre">
                        <h2>Offre Lavande</h2>
                        <img src="{{url('/img/lavande.png')}}" class="parrainage_offre_photo">
                        <ul>
                            <li>Location d'une ruche</li>
                            <li>10H de formation sur l'entretien de base</li>
                            <li>Vous effectuez l'entretien</li>
                            <li>50% de la production de miel</li>
                        </ul>
                    </div>
                    <div class="parrainage_offre">
                        <h2>Offre Tournesol</h2>
                        <img src="{{url('/img/tournesol.png')}}" class="parrainage_offre_photo">
                        <ul>
                            <li>Location d'une ruche</li>
                            <li>26H de formation sur l'entretien d'une ruche</li>
                            <li>Vous effectuez l'entretien et la récolte</li>
                            <li>100% de la production de miel</li>
                            <li>-15% sur l'achat du matériel dans notre boutique</li>
                        </ul>
                    </div>
                </div>

                <div class="espaceur"></div>
                <div class="espaceur"></div>

        </main>

    </body>

</html>

</x-app-layout>
@include('layouts.footer')