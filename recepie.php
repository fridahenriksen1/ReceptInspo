<!-- <!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"> -->
    <!-- Oswald -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet"> -->



    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Inclusive+Sans:ital@0;1&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet"> -->

    <!-- ikoner -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"> -->

    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />






    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="main-header">
        <section class="container">
            <a class="logo" href="index.html">VeggieEats</a>
            <nav class="main-nav">
                <ul class="main-menu">
                    <li class="main-menu-item">
                        <a class="link" href="recepie.html">Alla recept</a>
                    </li>
                    <li class="main-menu-item">
                        <a class="link" href="blogg.html">Tips</a>
                    </li>
                </ul>
            </nav>
        </section>

    </header> -->

    <?php 
    $pagetitel = "VeggieEats";
    include("abtest/header.php");
    ?>


    <main>

        <section id="search" class="container">
            <h1>Recept</h1>
            <form id="search-bar" role='search'>
                <label for='header-search'>
                    <span class='visually-hidden'>Search</span>
                </label>
                <input type='search' id='header-search' placeholder="Sök recept" data-search>
                <button type='submit' id="btn-search">
                    <span class="material-symbols-rounded">search</span>
                    <span class='visually-hidden'>Submit Search</span>
                </button>
            </form>
            <form class="m1b" id="categorys" action="">
                <input class="chip" type="checkbox" id="categoryOne">
                <label for="categoryOne">Sallad</label>
                <input class="chip" type="checkbox" id="categoryTwo">
                <label for="categoryTwo">Tortilla</label>
                <input class="chip" type="checkbox" id="categoryThree">
                <label for="categoryThree">Pasta</label>
                <input class="chip" type="checkbox" id="categoryFour">
                <label for="categoryFour">Nudlar</label>
                <input class="chip" type="checkbox" id="categoryFive">
                <label for="categoryFive">Ris</label>
                <input class="chip" type="checkbox" id="categorySix">
                <label for="categorySix">Pizza</label>
                <input class="chip" type="checkbox" id="categorySeven">
                <label for="categorySeven">Couscous</label>
                <input class="chip" type="checkbox" id="categoryEight">
                <label for="categoryEight">Potatis</label>
            </form>
        </section>
        <section class="user-recipes container" data-user-cards>
            <!-- Use <template> to hold some content that will be hidden when the page loads. Use JavaScript to display it:  -->
            <template data-user-template>
                <article class="card">
                    <a class="card-content" href="" data-link>
                        <figure>
                            <div class="img-box">
                                <img data-image>

                            </div>
                            <figcaption class="card-text">
                                <p class="style-chips" data-cat></p>
                                <h2 data-header></h2>
                            </figcaption>
                        </figure>

                        <section class="time-box">
                            <span class="material-symbols-outlined p1">
                                schedule
                            </span>
                            <span data-time></span>
                        </section>
                        <!-- <div class="gradient"></div> -->
                    </a>
                </article>
            </template>

        </section>
        <!-- <section class="quote">
            <article class="content">
                <h3>Lär dig att laga mat</h3>
                <a class="btn-primary" href="lar-dig-laga-mat.html">klicka här</a>
                <a href="#" class="btn-secondary">Annars kan du klicka här!</a>
            </article>
        </section> -->
    </main>
    <footer id="main-footer">
        <section class="footer-inside">
            <h3>VeggieEats</h3>
            <!-- <p>Skriv in din mejl här du, du kommer ändå inte få något</p>
            <form action="/" id="newsletter">
                <label for="email">
                    <span class="visually-hidden">Email</span>
                </label>
                <input class="textField" type="text" name="email" id="email" placeholder="Email">
                <input class="btn btn-submit" type="submit" value="Skicka">
            </form> -->
            <button id="cookie-settings-button" class="cookie-settings-button">Kakinställningar</button>
            <p class="footer-text">©Copyright 2023 VegieEats</p>
        </section>
    </footer>
      <!-- Cookie Popup -->
  <div id="cookie-popup" class="cookie-popup">
    <div class="popup-content">
        <span id="close-icon" class="close-icon">×</span>
        <h2>Vi använder kakor</h2>
        <p>Vi använder kakor för att göra ett så bra material som möjligt för sidan. Allting som samlas in är till för att förbättra upplevelsen på sidan och för att skapa ett så bra lärande material som möjligt.</p>
        <div class="cookie-switch-container">
            <span id="cookie-status" class="cookie-status">Kakinställningar</span>
            <label class="switch">
                <input type="checkbox" id="cookie-switch">
                <span class="slider round"></span>
            </label>
        </div>
        <button id="only-necessary-button" style="display: none;">Bara nödvändiga</button>
        <button id="ok-button" style="display: none;">Ok</button>
        <div class="b">
            <a href="/cookie-consent/privacy-policy.html" class="integrity">Integritetspolicy</a>

        </div>
    </div>
    <!-- <script src="js/chatgpt.js"></script> -->
    <script src="js/script.js" defer></script>
    <script src="cookie-consent/cookie-consent.js"></script>
</body>

</html>