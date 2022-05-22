<?php

include_once "partials/header.php";
include_once "Models/Product.php";

$prod = new Product(0, 0, 0, 0, 0);
$products = $prod->all();
?>



<div class="container">
    <div class="d-flex flex-row justify-content-end pt-5">
            <a href="addproduct.php" class="btn btn-success pe-4 me-2" role="button">ADD</a>
            <a href="" class="btn btn-danger ms-2" role="button">MASS DELETE</a>
    </div>
</div><br/>

<hr class="divider" style="border-top: 3px double #8c8b8b;">

<div class="container">
    <div class="pt-4">
        <form action="" class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-4 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><input type="checkbox" value="<?php echo $product['type'] ?>" name="<?php echo $product['sku'] ?>"></h5>
                        <p class="card-text"><?php echo $product['sku'] ?></p>
                        <p class="card-text"><?php echo $product['name'] ?></p>
                        <p class="card-text"><?php echo $product['price'] ?>$</p>
                        <p class="card-text"><?php echo $product['attr'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="col-4 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><input type="checkbox" value="dvd" name="dvd1"></h5>
                        <p class="card-text">kod123123</p>
                        <p class="card-text">disk</p>
                        <p class="card-text">200$</p>
                        <p class="card-text">Size: 700 MB</p>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><input type="checkbox" value="dvd" name="dvd1"></h5>
                        <p class="card-text">kod123123</p>
                        <p class="card-text">disk</p>
                        <p class="card-text">200$</p>
                        <p class="card-text">Size: 700 MB</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php 

include_once "partials/footer.php"

?>