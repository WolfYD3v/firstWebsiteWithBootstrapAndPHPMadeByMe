<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap Online Shop With PHP</title>
        <link
            rel="stylesheet"
            href="css/bootstrap/bootstrap.min.css"
            class="css"
        />
        <link rel="stylesheet" href="css/style.css" class="css" />
    </head>
    <body>
        <div id="page-content">
            <!-- Header Here -->
            <?php
                require_once("inc/header.php");
            ?>

            <!-- Shopping Area Here -->
            <main class="bg-secondary-subtle p-5 shopping_section">
                <div class="row col-md-10 mx-auto text-center">
                    <h1 class="text-uppercase">Our Best Seller</h1>

                    <div class="col-md-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#">T-Short</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Shirts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Pull Over</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row col-md-9">
                        <?php
                            $itemPrice = 300.0;
                            for ($photogrammeIdx = 1; $photogrammeIdx <= 10; $photogrammeIdx++) {
                                echo "
                                <div class='col-md-4 pr-2 pl-2 pb-2'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='pictures/$photogrammeIdx.png' class='card-img-top' alt='Photogramme - $photogrammeIdx/10'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Photogramme - $photogrammeIdx/10</h5>
                                            <p class='card-text text-center'>A piece of the photogramme</p>

                                            <div class='d-flex flex-row justify-content-center align-items-end'>
                                                <h5 class='px-2'>$itemPrice$</h5>
                                                <a href='product_info.php' target='_blank' class='btn btn-primary'>Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                $itemPrice += 225.5;
                            }
                        ?>
                    </div>
                </div>
            </main>
            
            <!-- Footer Here -->
            <?php
                require_once("inc/footer.php");
            ?>
        </div>

        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>