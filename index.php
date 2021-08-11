<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> School Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Internal CSS-->
    <link rel="stylesheet" href="css/style.css" />

    <!--BootStrap and Fotorama-->
    <!--Fotorama Scripts and CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

</head>
<body>

    <header>

        <!--Top Menu -->
            <h1 id="h1apex"> Apex Teaching </h1> <!--CSS Class-->

        <nav  class="navbar">
            <!--nav is to navigate-->
            <a class="nava" href="#">Home</a>
            <a class="nava" href="#">About</a>
            <a class="nava" href="#">Teachers</a>
            <a class="nava" href="#">Blog</a>
            <a class="nava" href="#">Contact</a>
        </nav>

    </header>

    <!--Banner corousel-->
    <!--Section is equal to DIV -->
    <section class="fotorama">

        <img src="images/banner01.jpg" />
        <img src="images/banner04.jpg" />

    </section>

    <main>

        <!--About--> 
        <section class="about">
            <h1 id="h1about"> About CSS Classes </h1>  <!-- hiabout for styling-->
            <img id="aboutimg" src="images/o_que_oferecemos.jpg" />   <!-- about image id for image styling-->

            <ul class="listabout">
                <li>Teachers</li>
                <li>Students</li>
                <li>Technologies</li>
                <li>Classes</li>
            </ul>
        </section>

        <!-- Blog -->
        <section class="blog">
            <h1> Blog </h1>  <!--Our Blog class-->

            <ul>
                <li>
                    <img src="images/blog01.jpg" />
                    <p>Teachers</p>
                </li>

                <li>
                    <img src="images/blog02.jpg" />
                    <p>Work</p>
                </li>

                <li>
                    <img src="images/blog03.jpg" />
                    <p>Prepare</p>
                </li>

                <li>
                    <img src="images/blog04.jpg" />
                    <p>The Power</p>
                </li>
            </ul>

        </section>

    </main>

    <footer>

        <p> Copyright 2021 - All rights reserved</p>
    </footer>

    <select style="font-weight:bolder;" "align>
        <option value="1" style="color:#0026ff"> Kg </option>
        <option style="color:#0026ff" > Lb </option>
    </select>

</body>
</html>