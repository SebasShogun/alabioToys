
const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
//const nextBtnThird = document.querySelector(".next-2");
//const prevBtnFourth = document.querySelector(".prev-3");
//const submitBtn = document.querySelector(".submit");
const progressText = [...document.querySelectorAll(".step p")];
const progressCheck = [...document.querySelectorAll(".step .check")];
const bullet = [...document.querySelectorAll(".step .bullet")];
const input = document.querySelector(".input-class1");
const input1 = document.querySelector(".input-class2");
const input2 = document.querySelector(".input-class3");
const input3 = document.querySelector(".input-class4");
const input4 = document.querySelector(".input-class5");
const input5 = document.querySelector(".input-class6");
const input6 = document.querySelector(".input-class7");
const input7 = document.querySelector(".input-class8");
const input8 = document.querySelector(".input-class9");
const input9 = document.querySelector(".input-class0");
const input0 = document.querySelector(".input-class01");
const input20 = document.querySelector(".input-class20");

let max = 4;
let current = 1;

var name = "";
var lastname = "";

input.addEventListener("click", function(){
  $("#cliname").css("border-color", "lightgrey");  
});
input1.addEventListener("click", function(){
  $("#clilastname").css("border-color", "lightgrey");
});
input2.addEventListener("click", function(){
  $("#street").css("border-color", "lightgrey");
});
input3.addEventListener("click", function(){
  $("#noext").css("border-color", "lightgrey");
});
input4.addEventListener("click", function(){
  $("#colony").css("border-color", "lightgrey");
});
input5.addEventListener("click", function(){
  $("#city").css("border-color", "lightgrey");
});
input6.addEventListener("click", function(){
  $("#CP").css("border-color", "lightgrey");
});
input7.addEventListener("click", function(){
  $("#country").css("border-color", "lightgrey");
});
input8.addEventListener("click", function(){
  $("#tel").css("border-color", "lightgrey");
});
input9.addEventListener("click", function(){
  $("#email").css("border-color", "lightgrey");
});
input0.addEventListener("click", function(){
  $("#state").css("border-color", "lightgrey");
});
input20.addEventListener("click", function(){
  $("#contact").css("border-color", "lightgrey");
});

nextBtnFirst.addEventListener("click", function(){
if ($("#cliname").val() == "" || $("#cliname").val() == null) {
	swal({
    title: '¡Espera!',
    text: 'Llena los campos obligatorios',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })
  $("#cliname").css("border-color", "red");
  $("#cliname").css("border-color", "red");
  $("#clilastname").css("border-color", "red");
  $("#street").css("border-color", "red");
  $("#noext").css("border-color", "red");
  $("#colony").css("border-color", "red");
  $("#city").css("border-color", "red");
  $("#state").css("border-color", "red");
  $("#CP").css("border-color", "red");
  $("#country").css("border-color", "red");
  $("#tel").css("border-color", "red");
  $("#mail").css("border-color", "red");
  $("#contact").css("border-color", "red");
  $("#cliname").focus();  
} else if ($("#cliname").val() == "" || $("#cliname").val() == null) {
  alert("El nombre es obligatorio");
  $("#cliname").css("border-color", "red");
  $("#cliname").focus();  
} else if ($("#clilastname").val() == "" || $("#clilastname").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'El campo Apellido es un campo obligatorio',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })
  $("#clilastname").css("border-color", "red");
  $("#clilastname").focus();
} else if ($("#street").val() == "" || $("#street").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'La calle es importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })
  $("#street").css("border-color", "red");
  $("#street").focus();
} else if ($("#noext").val() == "" || $("#noext").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'El número es importante para identificar tu pedido',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })
  $("#noext").css("border-color", "red");
  $("#noext").focus();
} else if ($("#colony").val() == "" || $("#colony").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'La Colonia es importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  }) 
  $("#colony").css("border-color", "red");
  $("#colony").focus();
} else if ($("#city").val() == "" || $("#city").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'La ciudad o población importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  }) 
  $("#city").css("border-color", "red");
  $("#city").focus();
} else if ($("#state").val() == "" || $("#state").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'La estado es importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })
  $("#state").css("border-color", "red");
  $("#state").focus();
} else if ($("#CP").val() == "" || $("#CP").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'El Código Postal es importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })  
  $("#CP").css("border-color", "red");
  $("#CP").focus();
} else if ($("#CP").val() == "" || $("#CP").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'El Código Postal es importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  })   
  $("#CP").css("border-color", "red");
  $("#CP").focus();
} else if ($("#country").val() == "" || $("#country").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'El Pais es importante para el envío',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  }) 
  $("#country").css("border-color", "red");
  $("#country").focus();
} else if ($("#tel").val() == "" || $("#tel").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'Por favor deja un número es para poder contactarnos',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  }) 
  $("#tel").css("border-color", "red");
  $("#tel").focus();  
} else if ($("#email").val() == "" || $("#email").val() == null) {
  swal({
    title: '¡Espera!',
    text: 'Por favor deja un correo es para poder contactarnos',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  }) 
  $("#email").css("border-color", "red");
  $("#email").focus(); 
} else if ($("#contact").val() == 0 || $("#contact").val() == null || $("#contact").val() == "") {
  swal({
    title: '¡Espera!',
    text: 'Por favor seleccione una opcion de como nos Contacto. Gracias!',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  }) 
  $("#contact").css("border-color", "red");
  $("#contact").focus(); 
} 
else{
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
}  
});
nextBtnSec.addEventListener("click", function(e){
      e.preventDefault();
			e.stopImmediatePropagation();

  if($("#paytipe").val() == "StripeMSI"){
    if($('#paystrid').val() == "")
    {
      swal({
        title: '¡Espera!',
        text: 'Debes comprobar la tarjeta o selecciona otro método de pago',
        imageUrl: 'img/roto.png',
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: 'Infable Alabio',
      }) 
    }
    else{
      slidePage.style.marginLeft = "-50%";
      bullet[current - 1].classList.add("active");
      progressCheck[current - 1].classList.add("active");
      progressText[current - 1].classList.add("active");
      current += 1;
    }
  }
  if($('#msi-select').children("option:selected").val()==1)
  {
    $("#paytipe").val("Stripe");

    $.ajax({ 
      url: 'http://negocad.com/confirm_debit',
      type: 'GET',
      dataType: 'jsonp', 
    crossDomain: true,
      data: { 
        total:$('#selltotal').val(),
        desc:$('#payconcept').val()
   },
      success: function(result)
      {		
      console.log(result[0]);
      $('#client_secret').val(result[0].client_secret);
    slidePage.style.marginLeft = "-50%";
      bullet[current - 1].classList.add("active");
      progressCheck[current - 1].classList.add("active");
      progressText[current - 1].classList.add("active");
      current += 1;		
    		   
  },
  fail: function()
  {
    swal({
      icon: 'error',
      title: 'Oops...',
      text: 'Ocurrió un Error al procesar la tarjeta',
    })
  }

  
});
  }
  else if($("#paytipe").val() != "Stripe" && $("#paytipe").val() != "StripeMSI"){
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }
});
/*nextBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});*/
/*submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Tu compra se realizo con exito!!");
    location.reload();
  },800);
});*/

prevBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
/*prevBtnFourth.addEventListener("click", function(){
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});*/
