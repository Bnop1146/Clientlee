<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/support.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'navbar.php';?>


<div class="oversek">
    <div class="overcon container">
        <p class="prisover text-white">Support</p>
        <p class="pristekst text-white">Brug venligst kontaktformularen herunder for at kontakte os med diverse spørgsmål. Vi vender tilbage med svar hurtigst muligt. Du er også velkommen til at ringe eller sende en sms.
        </p>

    </div>

</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svgbg" width="100%" height="100%" viewBox="0 0 1920 667.544">
    <defs>
        <clipPath id="clip-path">
            <path id="wave-haikei_5_" data-name="wave-haikei (5)" d="M0,220l64,29.7c64,29.6,192,89,320,87.5s256-63.9,384-82.4,256,6.9,384,51.7,256,109.2,384,152.7,256,66.1,320,77.5l64,11.3V0H0Z" fill="#5235d4"/>
        </clipPath>
    </defs>
    <g id="Group_51" data-name="Group 51" transform="translate(5816 -3997.456)">
        <g id="Group_50" data-name="Group 50" transform="translate(0 -343)">
            <path id="wave-haikei_5_2" data-name="wave-haikei (5)" d="M0,220l64,29.7c64,29.6,192,89,320,87.5s256-63.9,384-82.4,256,6.9,384,51.7,256,109.2,384,152.7,256,66.1,320,77.5l64,11.3V0H0Z" transform="translate(-5816 4460)" fill="#5235d4"/>
            <g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(-5816 4460)" clip-path="url(#clip-path)">
                <g id="circle-scatter-haikei_6_" data-name="circle-scatter-haikei (6)" transform="translate(6.581 -1.795)">
                    <circle id="Ellipse_18" data-name="Ellipse 18" cx="210.798" cy="210.798" r="210.798" transform="translate(173.419 173.434)" fill="#6146d8"/>
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="79.392" cy="79.392" r="79.392" transform="translate(1254.195 283.772)" fill="#6146d8"/>
                    <circle id="Ellipse_20" data-name="Ellipse 20" cx="190.209" cy="190.209" r="190.209" transform="translate(1651.001 252.345)" fill="#6146d8"/>
                    <circle id="Ellipse_21" data-name="Ellipse 21" cx="119.544" cy="119.544" r="119.544" transform="translate(-126.124 -117.749)" fill="#6146d8"/>
                    <path id="Path_34" data-name="Path 34" d="M111.323,0A111.323,111.323,0,1,1,0,111.323,111.323,111.323,0,0,1,111.323,0Z" transform="translate(1412.978 -109.528)" fill="#6146d8"/>
                    <circle id="Ellipse_23" data-name="Ellipse 23" cx="94.905" cy="94.905" r="94.905" transform="translate(967.328 30.996)" fill="#6146d8"/>
                    <circle id="Ellipse_30" data-name="Ellipse 30" cx="94.905" cy="94.905" r="94.905" transform="translate(1020.328 -221.004)" fill="#6146d8"/>
                </g>
            </g>
            <path id="Path_35" data-name="Path 35" d="M111.323,0A111.323,111.323,0,1,1,0,111.323,111.323,111.323,0,0,1,111.323,0Z" transform="translate(-4396.441 4349.677)" fill="#6146d8"/>
        </g>
        <g id="Halvcirkel" transform="translate(-6775.9 3576.656)">
            <g id="Layer_1">
                <path id="Path_37" data-name="Path 37" d="M1079.9,540.3A119.583,119.583,0,0,1,960.4,659.9H960V420.8h.3A119.519,119.519,0,0,1,1079.9,540.3Z" fill="#6146d8"/>
            </g>
        </g>
    </g>
</svg>







<div id="main-content-section" data-magellan-target="main-content-section">


    <div class="kontaktsektion container-fluid p-3" id="kontaktformular">
        <div class="row">
            <div class="sektion2 col-sm-12 col-md-12 col-lg-5 mt-5">


                <div class="kontaktinfo">
                    <p class="infoover">Information</p>
                    <div class="line"></div>
                    <p class="infotekst2 mt-3">Adresse: 4800, Nykøbing Falster, Danmark</p>
                    <p class="infotekst2">CVR: </p>
                </div>

                <div class="kontaktinfo mt-5">
                    <p class="infoover">E-mail</p>
                    <div class="line"></div>
                    <p class="infotekst2 mt-3">kontakt@clientlee.dk</p>
                </div>

                <div class="kontaktinfo mt-5">
                    <p class="infoover">Telefon tid</p>
                    <div class="line"></div>
                    <p class="infotekst2 mt-3">+45 11 22 33 44</p>
                    <p class="infotekst2 mt-3">Mandag - Søndag: 07.00 - 20.00</p>
                </div>

            </div>
            <?php
            $message_sent = false;
            if (isset($_POST['email']) && $_POST['email'] !='') {

                $userName = $_POST['name'];
                $userEmail = $_POST['email'];
                $userPhone = $_POST['phone'];
                $message = $_POST['message'];

                $to = "tekbas425@gmail.com";

                $body = "Fra: " . $userName . "\r\n";
                $body .= "Email: " .$userEmail. "\r\n";
                $body .= "Phone: " .$userPhone. "\r\n";
                $body .= "Besked: " .$message. "\r\n";

                mail($to,$message,$body);

                $message_sent = true;
            }
            ?>

            <div class="sektion1 col-sm-12 col-md-12 col-lg-7 mt-5 p-3  ">
                <div class="contact-section">


                    <form class="contact-form" action="#" method="post">
                    <span>* Navn
                    <input type="text" class="contact-form-text mb-4" aria-label="" name="name" id="name">
                    </span>

                        <span>* E-mail
                    <input type="email" class="contact-form-text mb-4"  aria-label="" name="email" id="email">
                    </span>

                        <span>* Telefon nr
                    <input type="text" class="contact-form-text mb-4"  aria-label="" name="phone">
                    </span>



                        <span>* Besked
                    <textarea name="message" class="contact-form-text mb-4"  aria-label=""></textarea>
                    </span>

                        <input type="submit" class="vidstknap contact-form-btn" value="Send">

                    </form>
                </div>


            </div>

        </div>
    </div>




    <div class ="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73629.95507434393!2d11.867449804545315!3d54.781090281073794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad2fd65c4f6387%3A0x474abab757992004!2s4800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sda!2sdk!4v1652087129383!5m2!1sda!2sdk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>



    <?php include 'footer.php';?>

</body>
</html>
