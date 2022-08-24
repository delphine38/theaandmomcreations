<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="nav/nav.css"> -->
    <link rel="stylesheet" href="css/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Théa and Mom's Créations - nav</title>
</head>

<body>
    <section class="ensemblenav">
        <nav>

            <div id="burger" class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <br>
            <ul class="nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link" activeClass="nav-link-active" aria-current="page">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="shop.php" class="nav-link">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link" href="https://thea-and-mom-creations.over-blog.com/">NewsLetters</a>
                </li>
            </ul>
        </nav>
        <article>
            <a href="https://www.thea.mom.creation@gmail.com" target="_blank" class="athemomcreation">
                thea.mom.creation@gmail.com
            </a>

            <a href="https://www.facebook.com/mickaela.land" target="_blank">
                <img src="images/facebook.png" alt="facebook" width="20px" class="facebook" />
            </a>
            <img src="images/panier" alt="panier" width="35px" class="panier" />
        </article>
    </section>

    <!-- <div>
        <section class="ensemblenav">
            <article>
                <ul class="nav">
                    <li class="nav-item">
                        <a onClick={navigateAccueil} class="nav-link" activeClassName="nav-link-active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a onClick={navigateBoutique} class="nav-link" href="#">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a onClick={navigateAPropos} class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a onClick={navigateContact} class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="https://thea-and-mom-creations.over-blog.com/">NewsLetters</a>
                    </li>


                </ul>
            </article>

            <article>
                <a href="https://www.thea.mom.creation@gmail.com" target="_blank" class="athemomcreation">
                    thea.mom.creation@gmail.com
                </a>

                <a href="https://www.facebook.com/mickaela.land" target="_blank">
                    <img src="images/facebook.png" alt="facebook" width="20px" class="facebook" />
                </a>
                <img src="images/panier" alt="panier" width="35px" class="panier" />
            </article>
        </section>



    </div> -->



</body>

</html>