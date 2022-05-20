<?php

include_once "partials/header.php";

?>

<div class="container pt-5">
    <form action="" id="product_form">
        <div class="form-group">
            <label for="sku" class="pe-4">SKU</label>
            <input type="text" name="sku" id="sku" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="name" class="pe-4">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="price" class="pe-4">Price($)</label>
            <input type="text" name="price" id="price" class="form-control">
            <select name="type" id="producType" onchange="getValue(this)">
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select>
        </div>
        
        <div class="form-group">
            
        </div>
    </form>
</div>

<?php

include_once "partials/footer.php"

?>