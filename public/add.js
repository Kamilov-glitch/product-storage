$(document).ready(() => {
    $('#productType').change(function()
{
    switch(this.value) {
        case 'dvd':
            $('#dynamic').html("<label for='size'>Size</label>" +
                "<input type='text' class='form-control' name='size' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>"
            );
            break;
        case 'book':
            $('#dynamic').html("<label for='weight'>Weight</label>" +
                "<input type='text' class='form-control' name='weight' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>"
            );
            break;
        case 'furniture':
            $('#dynamic').html("<label for='height'>Height</label>" +
                "<input type='text' class='form-control' name='height' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>" +
                "<label for='width'>Width</label>" +
                "<input type='text' class='form-control' name='width' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>" +
                "<label for='length'>Length</label>" +
                "<input type='text' class='form-control' name='length' required>" +
                "<div class='text-danger'><small><?php if(isset($errors['type'])) echo $errors['type'] ?></small></div>"
            );
            break;
    }
    
});
})

