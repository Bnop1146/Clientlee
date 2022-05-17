<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-3">
    <div class="container align-items-baseline">

        <a class="navbar-brand" href="Forside.php">



            <svg xmlns="http://www.w3.org/2000/svg" width="210" height="44" viewBox="0 0 844.337 189.255">
                <g id="Clientlee_Logo" data-name="Clientlee Logo" transform="translate(-383 -452.3)">
                    <g id="Logo_No_Fill">
                        <path id="Path_33" data-name="Path 33" d="M583,552.3a99.767,99.767,0,0,1-34.3,75.4l-35.5-35.5a50,50,0,1,0-60.4,0l-35.5,35.5A100,100,0,1,1,583,552.3Z" fill="#0c0623"/>
                    </g>
                    <g id="Layer_7">
                        <text id="logo" transform="translate(628.337 587.555)" fill="#fff" font-size="135.674" font-family="Nexa-Black, Nexa" font-weight="800"><tspan x="0" y="0">Clientlee</tspan></text>
                    </g>
                </g>
            </svg>

        </a>

        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">


           <span class="navbar-toggler">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                  <path id="burger" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
           </span>


        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" id="nav-text" href="pris.php">Pris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link1" id="nav-text" href="support.php">Support</a>
                </li>
                <li class="nav-item number-flex">
                   <a class="nav-link nav-link2 " id="nav-text" href="#"> <i class="fa-solid fa-phone me-2"></i>12345678</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav login-flex">
                <li class="nav-item">
                    <a class="nav-link nav-link3 " id="nav-text" href="#"> Login</a>
                </li>
                <li class="nav-item btn">
                    <button class="nav-btn nav-link4  " id="nav-text" > Opret gratis bruger</button>
                </li>

            </ul>

        </div>

</nav>

<script src="js/Navbar_Scroll.js"></script>





</body>
</html>
