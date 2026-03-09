<?php
    $nbElementsInCart = 1;
?>

<div id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="25" class="d-inline-block align-text-top">
                Bootstrap Online Shop With PHP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Profile</a>
                    </li>
                    <li class="nav-item pos_relative">
                        <?php
                            echo "<span class='nb_elements_in_cart'>$nbElementsInCart</span>"
                        ?>
                        <a class="nav-link" href="#">My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disconnection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Back Off</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>