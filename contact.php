<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Théa and Mom's Créations - Contact</title>
</head>

<body>
    <?php include "header.php" ?>
    <?php include "nav.php" ?>

    <div>
        <div class='container'>
            <div class='row'>
                <div class='nousContacter col-6'>
                    <h3 class='h3Contact'>Nous contacter</h3>
                    <a class='aContact' href='thea.mom.creation@gmail.com'>thea.mom.creation@gmail.com</a>
                </div>
                <div class='col-6'>
                    <img src="images/mom.jpg" alt="maman de thea" />
                </div>
            </div>



            <section class='formulaire'>
                <h2 class='h2Formulaire'>Théa and Mom's Créations</h2>
                <p>Formulaire d'abonnement</p>

                <div class="contact">
                    <form name="contact" method="post" className='contact_form' onSubmit="submit">

                        <input type="hidden" name="form-name" value="contact" />
                        <label>Adresse Mail *</label>
                        <input type="email" name="email" placeholder='Votre email *' />

                        <button type="submit" class='btnContact'>Envoyer</button>

                    </form>

                    <p class='pMerciEnvoi'>Merci pour votre envoi !</p>
                    <a href='thea.mom.creation@gmail.com' class='aFormulaire'>thea.mom.creation@gmail.com</a>

                    <article>
                        <a href="https://www.facebook.com/mickaela.land" target="_blank">
                            <img src="images/facebook.png" alt="facebook" width="20px" class="facebook" />
                        </a>
                    </article>
                </div>
            </section>
        </div>
    </div>


    <?php include "footer.php" ?>
</body>

</html>