<?php

include_once "partials/header.php";
use App\Models\Product;

$prod = new Product();
$products = $prod->all();
?>





<div class="container">
    <div class="pt-4">
        <form action="<?php echo $routeToDeleteProduct ?>" method="POST" class="row">

            <div class="container">
                <div class="d-flex flex-row justify-content-end pt-5">
                    <a href="<?php echo $routeToAddProduct ?>" class="btn btn-success pe-4 me-2" role="button">ADD</a>
                    <button type="submit" class="btn btn-danger ms-2">MASS DELETE</button>
                </div>
            </div><br/>

            <hr class="divider mt-3" >

            <?php foreach ($products as $product): ?>
                <div class="col-4 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><input type="checkbox" class="delete-checkbox" 
                            value="<?php echo $product['sku'] ?>" name="<?php echo $product['sku'] ?>" required></h5>
                        <p class="card-text"><?php echo $product['sku'] ?></p>
                        <p class="card-text"><?php echo $product['name'] ?></p>
                        <p class="card-text"><?php echo $product['price'] ?>$</p>
                        <p class="card-text"><?php echo $product['attr'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </form>
    </div>
</div>

<?php 

include_once "partials/footer.php"

?>