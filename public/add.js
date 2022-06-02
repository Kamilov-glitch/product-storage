$(document).ready(() => {
    $('#productType').change(function()
{
    switch(this.value) {
        case 'dvd':
            $('#dynamic').html("<label for='size'>Size</label>" +
                "<input type='number' step='1' class='form-control' id='size' name='size' required>" +
                "<br>" + "<h5>Please, provide size in MB</h5>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>"
            );
            break;
        case 'book':
            $('#dynamic').html("<label for='weight'>Weight</label>" +
                "<input type='number' class='form-control' id='weight' name='weight' required>" +
                "<br>" + "<h5>Please, provide weight in KG</h5>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>"
            );
            break;
        case 'furniture':
            $('#dynamic').html("<label for='height'>Height</label>" +
                "<input type='number' class='form-control' id='height' name='height' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>" +
                "<label for='width'>Width</label>" +
                "<input type='number' class='form-control' id='width' name='width' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>" +
                "<label for='length'>Length</label>" +
                "<input type='number' class='form-control' id='length' name='length' required>" +
                "<br>" + "<h5>Please, provide dimensions</h5>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>"
            );
            break;
    }
    
});
})

