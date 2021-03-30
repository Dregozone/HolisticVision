<?php $page = $_GET["p"] ?? 'Home'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $page ?> - Holistic Vision</title>

        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/css/shared.css" />
        <link rel="stylesheet" href="public/css/<?= $page ?>.css" />


    </head>
    <body>
        
        <header>
            <a href="?p=Home">
                <img src="public/img/logo.jpg" alt="Logo" title="Logo" aria-label="logo" class="logo" />
            </a>

            <nav>
                <div><a href="?p=Home">Home</a></div>
                <div><a href="?p=Treatments">Treatments</a></div>
                <div><a href="?p=Contact">Contact</a></div>
            </nav>

            <div class="navSpacer"></div>
        </header>

        <main>
            <?php require "app/$page.php" ?>
        </main>

        <footer>
            <section class="footer">
                <section>
                    <div>About</div>
                    <div><a href="?p=Contact">Contact</a></div>
                </section>

                <section>
                    <div>Terms of Service</div>
                    <div>Privacy Policy</div>
                </section>

                <section>
                    <h2>Socials</h2>

                    <div>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </section>
            </section>

            <section class="copy">
                Copyright &copy; 2021. All rights reserved. RCN: xx.xx.xx
            </section>
        </footer>

    </body>
</html>
