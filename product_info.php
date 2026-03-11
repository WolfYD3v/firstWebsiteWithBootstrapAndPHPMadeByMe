<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap Online Shop With PHP - INFO</title>
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

            <!-- Product Info Here -->
            <div class="row m-5 justify-content-center">
                <div class="card col-md-4">
                    <img id="cover" src="" class="card-img-top p-2" alt="">
                    <div class="card-body">
                        <h5 id="product_name" class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Category: Masterpiece</li>
                        <li class="list-group-item">Color: Colored</li>
                        <li class="list-group-item">Size: Big</li>
                        <li id="price_tag" class='list-group-item'>Price: 0$</li>
                    </ul>
                    <div class="w-100 mt-3"></div>

                    <form action="">
                        <div class="form-group">
                            <p>Quantity:</p>
                            <input id="quantity_input" class="form-control w-100" type="number" value="1" min="1" max="999">
                        </div>
                    </form>

                    <input id='add_to_cart_btn' type='submit' class='btn btn-primary mt-3 w-100' value='Add to cart - 0$'>
                </div>
            </div>
            <div class="w-100" style="height: 20vh;"></div>
            
            <!-- Footer Here -->
            <?php
                require_once("inc/footer.php");
            ?>
        </div>

        <script src="js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>

<script type="module">
    import { getSearchBarParam, readProductsDataBase } from "./js/app.js"
    const productIdx = getSearchBarParam("productIdx");
    const data = await readProductsDataBase(productIdx);
    console.log(data);

    const cover = document.getElementById("cover");
    cover.src = data["coverPath"];
    cover.alt = `Masterpice ${productIdx}/10`;
    const productName = document.getElementById("product_name");
    productName.innerText = `Photogramme - ${productIdx}/10`;

    var basePrice = data["price"];
    
    const priceTag = document.getElementById("price_tag");
    priceTag.innerText = `Price: ${basePrice}$`;

    const quantityInput = document.getElementById("quantity_input");
    quantityInput.value = 1;
    const addToCartBtn = document.getElementById("add_to_cart_btn");
    addToCartBtn.value = `Add to cart - ${basePrice}$`;

    quantityInput.addEventListener("change", (event) => {
        addToCartBtn.value = `Add to cart - ${basePrice * quantityInput.value}$`;
    })
    addToCartBtn.addEventListener("click", (event) => {
        console.log(quantityInput.value);
        // Change PHP value
    })
</script>