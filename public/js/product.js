function addcart()
{
    $.ajax({ 
        url: '/add-to-cart',
        type: 'GET',
        data: { id: $('#add_cart_button').val(),
                amount: $('#amount').val(), 
                variant: $('#variant_id').children("option:selected").val()},
        success: function()
        {
            $('#aggcart').removeAttr('hidden');
        }
    });
}
function buy_now()
{
    $.ajax({ 
        url: '/add-to-cart',
        type: 'GET',
        data: { id: $('#add_cart_button').val(),
                amount: $('#amount').val(),
                variant: $('#variant_id').children("option:selected").val()},
        success: function()
        {
            window.location.href = "mycart";
        }
    });
}
function savequest()
{
    $.ajax({ 
        url: '/savequest',
        type: 'GET',
        data: { id: $('#add_cart_button').val(),
                name: $('#qname').val(),
                mail: $('#qmail').val(),
                question: $('#qquest').val()},
        success: function(data)
        {
            if(data.status)
            {
                alert("Recibiras un correo al contestar tu pregunta.");
                location.reload();
            }
            else
            {
                alert("Ocurrio un error al guardar, intentelo mas tarde.");
            }
            
        }
    });
}
 