<?php

include_once "partials/header.php";

?>

<div class="container">
    <div class="d-flex flex-row justify-content-end pt-5">
            <a href="" class="btn btn-success pe-4 me-2" role="button">ADD</a>
            <a href="" class="btn btn-primary ms-2" role="button">MASS DELETE</a>
    </div>
</div><br/>

<hr class="divider" style="border-top: 3px double #8c8b8b;">

<div class="container">
    <div class="pt-4">
        <form action="" class="row">
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