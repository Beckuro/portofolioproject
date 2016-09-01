<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Project 2 Udacity">
        <meta name="author" content="Satria Bagus W">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <title>Portofolio Website</title>
    </head>
    <body>
     <section>
        <div class="row main-row">
            <div class="col-md-8"><img class="img-responsive main-logo" src="/images/avatar.svg"></div>
            <div class="col-md-4 text-box">
                <h1 class="thin-text black-text">SATRIA BAGUS</h1>
                <p class="black-text">FRONT-END NINJA</p>
            </div>
        </div>
               <hr>
    </section>
    <section>
        <div class="head-img">
            <picture>
                <source media="(max-width: 990px) and (min-width: 521px)" srcset="images/mountain-large.webp 2x, images/mountain-large_large.jpg 1x">
                <source media="(max-width: 520px)" srcset="images/mountain-medium.webp 2x, images/mountain-medium_medium.jpg 1x">
                <img class="img-res" src="/images/mountain.webp" alt="">
            </picture>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="muted-text"><h1 class="thin-text text-work">Featured Work</h1></div>
        </div>
    </section>
    <section>
        <div class="container text-center">
            <div class="col-md-4">
            <picture>
                <source media="(max-width: 520px)" srcset="/images/logo-medium_medium.jpg 1x, images/logo-medium.webp 2x">
                <img class="logo" src="/images/logo.webp" alt="">
            </picture>
            <h1>Vestigo</h1>
            <a href="http://github.com/Beckuro/sibartravel">
            <p class="thin-text muted-text">http://github.com/Beckuro/Vestigo</p>
            </a>
            </div>
            <div class="col-md-4">
                <img class="logo" src="/images/coding.svg" alt="">
            <h1>MovieProject</h1>
            <a href="https://github.com/Beckuro/FreshTomatoesMovieProject">
            <p class="thin-text muted-text">https://github.com/Beckuro<br class="rwd-break" />/FreshTomatoesMovieProject</p>
            </a>
            </div>
            <div class="col-md-4">
                <img class="logo" src="/images/monitor.svg" alt="">
            <h1>LoremIpsum</h1>
            <p class="thin-text muted-text">http://github.com/Beckuro/</p>
            </div>
        </div>
    </section>
    </body>
</html>