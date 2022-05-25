<?php

include_once "partials/header.php";

?>

<script src="<?php echo $routeToJs ?>"></script>

<div class="container pt-5">
    <form action="Controllers/ProductController.php" method="POST" id="product_form">
        <div class="container">
            <h2>Product Add</h2>
            <div class="d-flex flex-row justify-content-end pt-2">
                <button class="btn btn-success pe-4 me-2" type="submit">Save</button>
                <a href="index.php" class="btn btn-danger ms-2" role="button">Cancel</a>
            </div>
        </div>
        <hr>
        <br/>
        <div class="form-group">
            <label for="sku" class="pe-4">SKU</label>
            <input type="text" name="sku" id="sku" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="name" class="pe-4">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="price" class="pe-4">Price($)</label>
            <input type="text" name="price" id="price" class="form-control" required>
            <select name="type" id="productType">
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select>
        </div>
        
        <div class="form-group" id="dynamic">
            
        </div>
    </form>
</div>



<?php

include_once "partials/footer.php"

?>