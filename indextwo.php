
<?php 
    $pagetitel = "detta är veggieets";
    include("abtest/header.php");
    ?>    

    <section id="hero" class="img-header">
        <img src="/img/kantarellPasta.webp" alt="kantarell pasta" rel="preload">
        <article class="content">
            <h1>Att äta mer vegetariskt ska vara lätt, vi är här för att hjälpa dig</h1>
            <!-- <p>Att äta mer vegitariskt ska vara lätt, vi är här för att hjälpa dig</p> -->
            <!-- <a class="btn" href="recepie.html">Hitta ditt nya</a> -->
        </article>
        <!-- Vet inte vad för semantiskt element man ska använda här -->
        <div class="overlay"></div>
    </section>
    <main class="container main-container">
        <section class="popular">
            <h2>Nya recept sida 2 Test för att se något nyt hehe</h2>
            <article class="popular-cards" data-user-popular>
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
            </article>
        </section>
        <aside class="quote">
            <article class="content">
                <h3>Använd filtreringsverktyget om du vill ha inspiration efter vilken bas du vill jobba med</h3>
                <a class="btn-primary" href="recepie.html">Till filtreringsvektyget</a>
            </article>
        </aside>
        <section class="popular">
            <h2>För nybörjare</h2>
            <article class="popular-cards" data-user-popular2>
                <!-- rör ej template HTML -->
                <template data-user-template>
                    <article class="card">
                        <a href="" data-link>
                            <img data-image>
                            <figcaption class="card-text">
                                <p class="p1" data-cat></p>
                                <h2 class="p1" data-header></h2>
                                <span class="material-symbols-outlined p1">
                                    schedule
                                </span>
                                <span data-time></span>
                            </figcaption>

                            <!-- <div class="gradient"></div> -->
                        </a>
                    </article>
                </template>
            </article>
        </section>
        <aside class="quote">
            <article class="content">
                <h3>Utforska våra råd för att minska köttintaget och främja en mer hållbar kost.</h3>
                <a class="btn-primary" href="blogg.html">Till tips</a>
            </article>
        </aside>
        <section class="popular">
            <h2>Gamla goingar</h2>
            <article class="popular-cards" data-user-popular3="">
                <!-- rör ej template HTML -->
                <template data-user-template>
                    <article class="card">
                        <a href="" data-link>

                            <p data-cat></p>
                            <!-- Testar lägga till time -->
                            <p data-time></p>
                            <h3 data-header></h3>
                            </header>
                            <img data-image>
                            <!-- <div class="gradient"></div> -->
                        </a>
                        <article class="card-text">


                        </article>
                </template>
            </article>
        </section>

        <!-- Vi kan ta bort sen -->
        <!-- <section class="news">
            <h2>Blogg</h2>
            <article class="news-card">
                <figure>
                    <img src="img/graddig-vegansk-svampstroganoff-med-ris.jpg" alt="">
                </figure>
                <figcaption>
                    <h3>Så sparar du mat</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum iusto nulla vitae officia, magnam
                        soluta totam at hic nihil rem inventore dolorem minus culpa in a rerum esse atque? Est.</p>
                </figcaption>
                <a href="blogPosts/sa-sparar-du-mat.html" class="btn">Läs mer</a>
            </article>
            <article class="news-card">
                <figure>
                    <img src="img/graddig-vegansk-svampstroganoff-med-ris.jpg" alt="">
                </figure>
                <figcaption>
                    <h3>Så sparar du mat</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum iusto nulla vitae officia, magnam
                        soluta totam at hic nihil rem inventore dolorem minus culpa in a rerum esse atque? Est.</p>
                </figcaption>
                <a href="blogPosts/sa-sparar-du-mat.html" class="btn">Läs mer</a>
            </article>
        </section> -->















    </main>
    </main>

    <!-- Ta med allt nerifrån här till och med html i en footer.php -->
    
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
    <script src="cookie-consent/cookie-consent.js"></script>
    <script src="js/script.js"></script>
    <script src="js/getRecept.js"></script>

    <!-- <script src="js/getRecept.js"></script> -->
</body>

</html>