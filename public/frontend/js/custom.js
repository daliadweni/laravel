$(document).ready(function () {
    
    $('.addToCartBtn').click(function (e) { 
        e.preventDefault();
        var product_id= $(this).closest('.product_data').find('.prod_id').val();
        var product_qty= $(this).closest('.product_data').find('.qty-input').val();
        $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
        $.ajax({
            type: "POST",
            url: "/add-cart",
            data: {
                'product_id' : product_id,
                'product_qty' : product_qty
            },
            dataType: "json",
            success: function( data, textStatus, jQxhr ){
       swal( data.status );
    },
            error: function( jqXhr, textStatus, errorThrown ){
        console.log( textStatus );
    }
        });
    });
    
    $('.increment-btn').click(function (e) { 
        e.preventDefault();
       var inc_value=$(this).closest('.product_data').find('.qty-input').val(); 
        var value = parseInt(inc_value, 10);
        value= isNaN(value) ? 0 : value;
        if(value< 10)
        {
            value++;
          $(this).closest('.product_data').find('.qty-input').val(value); 
        }
    });
    $('.decrement-btn').click(function (e) { 
        e.preventDefault();

        var dec_value=$(this).closest('.product_data').find('.qty-input').val(); 

        var value = parseInt(dec_value, 10);
        value= isNaN(value) ? 0 : value;
        if(value>1)
        {
            value--;
            $(this).closest('.product_data').find('.qty-input').val();         }

});
$('.delete-cart-item').click(function (e) { 
    e.preventDefault();
    var prod_id=  $(this).closest('.product_data').find('.prod_id').val();
    $.ajax({
        method: "POST",
        url: "url",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
});
});


