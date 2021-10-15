function deletecart()
{

  $indx = $(event.target).data("id");

  $.ajax({ 
    url: '/delete-cart',
    type: 'GET',
    data: { indx: $indx},
    success: function()
    {
      window.location.reload();
    }
});
}
function deleteallcart()
{

  $.ajax({ 
    url: '/delete-allcart',
    type: 'GET',   
    success: function()
    {
      window.location.reload();
    }
});
}
function showcoupon()
{
  $('#couponcode').removeAttr('hidden');
  $('#validatebuttom').removeAttr('hidden');
  $('#showbuttom').attr('hidden',true);
}
function validatecoupon()
{
  $.ajax({ 
    url: '/validate_coupon',
    type: 'GET',   
    data:{code: $('#couponcode').val()},
    success: function(result)
    {
      if(result.status==0)
      {
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'El código que ingresaste es incorrecto',
        })
        alert($r);
      }     
      if(result.status==-1)
      {
        $r="Solo puede usar una vez este cupon";
        alert($r);
      }
      if(result.status==1)
      {
        //$r="Cup�n V�lido";
        window.location.reload();
      }
      
    }
  });
}

