jQuery(document).ready(function($) {

    $('table.products-list tbody tr td').on('click', function(){
       $(this).parent('tr').toggleClass('focus');
    });

});

