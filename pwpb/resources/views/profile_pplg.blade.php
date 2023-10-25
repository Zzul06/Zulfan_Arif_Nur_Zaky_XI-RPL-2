<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('css/profilepplg_style.css') }}"> 


    <title>profile_pplg</title>
</head>
    <body>
        <div class="container">
            <nav>
                <img src="{{ asset ('img/logo.png') }}">
                <h2>PPLG</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="cv">CV</a><li>
                </ul>
            </nav>
            <header>
                <div class="judul">
                    <h1>Pengembangan Perangkat Lunak Dan Gim</h1>
                    <p>Profile Kejuruan PPLG</p>
                </div>
            </header>
                <main id="about">
                    <div class="intro">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque porro unde sunt sequi provident ratione dolore, 
                            neque quam blanditiis similique consequatur ducimus eaque aliquid laboriosam corrupti, 
                            maxime distinctio accusantium aliquam.</p>
                    </div> 
                    <div class="warp-box">
                        <div class="box">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <img src="{{ asset ('img/smk2.jpeg') }}">
                        </div>
                        <div class="box">
                            <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>
                            <img src="{{ asset ('img/smk2.jpeg') }}">
                        </div>
                        <div class="box">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <img src="{{ asset ('img/smk2.jpeg') }}">                           
                        </div>
                    </div>
                </main>
            <footer id="contact">
                <P class="penutup">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsum minus magnam laudantium, aperiam cupiditate mollitia. 
                    Praesentium iure quidem perferendis consequatur inventore reiciendis ad magnam debitis eaque fuga! Accusamus, deserunt!</P>
                <div class="fot-row">
                    <div class="fot-col">
                        <h2>Judul</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="fot-col">
                        <h2>Judul</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="fot-col">
                        <h2>Judul</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="fot-col">
                        <h2>Judul</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>    
                <p class="copyright">&copy; copyright 2023 zulfan</p>
            </footer>
        </div>        
    </body>
</html>