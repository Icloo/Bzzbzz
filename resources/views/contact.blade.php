<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Contact</title>

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

        <main class="contact">

            <div class="contact_gauche">

                <div class="espaceur"></div>
                <div class="espaceur"></div>

                <h2>Restons en contact</h2>

                <div class="espaceur"></div>
                <div class="espaceur"></div>

                <div class="contact_liste">
                    <img src="{{url('/img/Icon_Email.png')}}" class="contact_icone">
                    <p>lacitedelabeille@gmail.com</p>
                </div>

                <div class="espaceur"></div>

                <div class="contact_liste">
                    <img src="{{url('/img/Icon_Loc.png')}}" class="contact_icone">
                    <p>10 rue de la forêt 63666</p>
                </div>

                <div class="espaceur"></div>

                <div class="contact_liste">
                    <img src="{{url('/img/Icon_Tel.png')}}" class="contact_icone">
                    <p>06 94 23 59 20</p>
                </div>

                <div class="espaceur"></div>

                <div class="contact_rs">
                    <img src="{{url('/img/instagram.webp')}}" class="logo_rs">
                    <img src="{{url('/img/x.png')}}" class="logo_rs">
                    <img src="{{url('/img/facebook.png')}}" class="logo_rs">
                </div>

                <div class="test">
                    ----->
                </div>
            </div>


            <div class="contact_droite">

                <div class="espaceur"></div>
                <div class="espaceur"></div>

                <h2> Programmer un rappel</h2>

                <div class="espaceur"></div>

                <form>

                    <div>
                        <label for="nom_prenom">Nom et prénom</label>
                        <br>
                        <input type="text" id="nom_prenom" name="nom_prenom">
                    </div>
                    <div>
                        <label for="tel">Numéro de téléphone</label>
                        <br>
                        <input type="tel" id="tel" name="tel">
                    </div>
                    <div>
                        <label for="mail">Adresse mail</label>
                        <br>
                        <input type="email" id="mail" name="mail">
                    </div>
                    <label for="raison">Raison de l'appel</label>

                    <div>
                        <input type="checkbox" id="location" name="location">
                        <label for="location">Location de ruches</label>
                    </div>

                    <div>
                        <input type="checkbox" id="visite" name="visite">
                        <label for="visite">Visite du musée</label>
                    </div>

                    <div>
                        <input type="checkbox" id="question" name="question">
                        <label for="question">Question/suggestion sur la boutique</label>
                    </div>
                    <div>
                        <label for="message">Votre message</label>
                        <br>
                        <input type="textarea" id="message" name="message">
                    </div>

                    <div class="espaceur"></div>

                    <input type="submit" value="Envoyer">


                </form>

                <div class="espaceur"></div>
            </div>

        </main>

    </body>

</html>

</x-app-layout>
@include('layouts.footer')