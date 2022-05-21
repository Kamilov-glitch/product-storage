$(document).ready(() => {
    $('#productType').change(function()
{
    switch(this.value) {
        case 'dvd':
            $('#dynamic').html("<label for='size'>Size</label>" +
                "<input type='text' class='form-control' name='size'>"
            );
            break;
        case 'book':
            $('#dynamic').html("<label for='weight'>Weight</label>" +
                "<input type='text' class='form-control' name='weight'>"
            );
            break;
        case 'furniture':
            $('#dynamic').html("<label for='height'>Height</label>" +
                "<input type='text' class='form-control' name='height'>" +
                "<label for='width'>Width</label>" +
                "<input type='text' class='form-control' name='width'>" +
                "<label for='length'>Length</label>" +
                "<input type='text' step='0.01' class='form-control' name='length'>"
            );
            break;
    }
    
});
})

