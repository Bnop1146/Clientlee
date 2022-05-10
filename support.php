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

<div id="main-content-section" data-magellan-target="main-content-section">

    



    <div class="kontaktsektion container-fluid p-3" id="kontaktformular">
        <div class="row">
            <div class="sektion2 col-sm-12 col-md-12 col-lg-5 mt-5">


                <div class="kontaktinfo">
                    <p class="infoover">Information</p>
                    <div class="line"></div>
                    <p class="infotekst2 mt-3">Adresse: 4990, Sakskøbing, Danmark</p>
                    <p class="infotekst2">CVR: 40748016</p>
                </div>

                <div class="kontaktinfo mt-5">
                    <p class="infoover">E-mail</p>
                    <div class="line"></div>
                    <p class="infotekst2 mt-3">Bengtson-multiservice@outlook.dk</p>
                </div>

                <div class="kontaktinfo mt-5">
                    <p class="infoover">Telefon tid</p>
                    <div class="line"></div>
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

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
