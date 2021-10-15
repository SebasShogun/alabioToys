<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/api/delivery', 'ControllerChatBot@getdelivery');
Route::get('/', 'ControllerService@products');

Route::get('/eng', 'ControllerService@productseng');
Route::get('/catalogo', 'ControllerCatalogo@download');
Route::get('/descarga', function(){
	return view('Catalogo.descarga');
});
Route::name('catalogo')->get('/imprimir-catalogo', 'ControllerCatalogo@acua');

Route::name('imprimir')->get('/imprimir-pdf', 'ControllerPDF@imprimir');

Route::get('/entrega-inmediata', 'ControllerService@entregainmediata');
Route::get('/eng/entrega-inmediata', 'ControllerService@entregainmediataeng');
Route::get('/about', function () {
	return view('layouts.about');
});

Route::get('/products', 'ControllerService@index');

//Un producto
Route::get('/products/{name}','ControllerOneService@index' );
Route::get('/products/{name}/','ControllerOneService@index' );
//Route::put('/add-to-cart/{id}','ControllerOneService@addcart');
Route::get( '/add-to-cart', 'ControllerOneService@addcart'); 
Route::get( '/savequest', 'ControllerOneService@savequest'); 
//
//
//------------------------------------------------------------------//
//Rutas de controladores de Ingles
Route::get('/eng/products', 'ControllerService@indexeng');
Route::get('/eng/products/{name}','ControllerOneService@indexeng');
Route::get('/eng/filter', 'ControllerService@filtereng');
Route::get('/eng/category/{id}', 'ControllerService@pruebaeng');

//Carrito Ingles
Route::get( '/eng/mycart', 'ControllerShoppingCart@indexeng'); 
Route::get( '/eng/delete-cart', 'ControllerShoppingCart@delete_cart'); 
Route::get( '/eng/delete-allcart', 'ControllerShoppingCart@delete_allcart'); 
Route::get( '/eng/update-cart', 'ControllerShoppingCart@update_cart'); 
Route::get( '/eng/update-ship', 'ControllerShoppingCart@update_ship'); 
//Checkout Ingles
Route::get('/eng/checkout', 'ControllerCheckout@indexeng');
Route::get('/eng/collect_details', 'ControllerCheckout@stripemonths');
Route::get('/eng/confirm_debit', 'ControllerCheckout@stripedebitcreate');
Route::get('/eng/resendemail/{id}', 'ControllerThanks@redendmail');
Route::get('/eng/recalctotal', 'ControllerCheckout@recalctotal');

Route::get('/eng/thanks', 'ControllerThanks@indexeng');

//------------------------------------------------------------------//
//Carrito
Route::get( '/mycart', 'ControllerShoppingCart@index'); 
Route::get( '/delete-cart', 'ControllerShoppingCart@delete_cart'); 
Route::get( '/delete-allcart', 'ControllerShoppingCart@delete_allcart'); 
Route::get( '/update-cart', 'ControllerShoppingCart@update_cart'); 
Route::get( '/update-ship', 'ControllerShoppingCart@update_ship'); 
//

Route::get('/checkout', 'ControllerCheckout@index');
Route::get('/collect_details', 'ControllerCheckout@stripemonths');
Route::get('/confirm_debit', 'ControllerCheckout@stripedebitcreate');
Route::get('/resendemail/{id}', 'ControllerThanks@redendmail');
Route::get('/recalctotal', 'ControllerCheckout@recalctotal');

Route::get('/category/{id}', 'ControllerService@prueba');
Route::get('/filter', 'ControllerService@filter');
Route::get('/search/{tts}', 'ControllerService@searchinput');

Route::get('/savecontract','ControllerCheckout@savecontract');
Route::get('/thanks', 'ControllerThanks@index');
Route::post('/page-form', 'ContollerPageForm@insert');
/*Route PayPyl*/
Route::get('/paypal/pay/{amount}', 'ControllerPaypal@paymentpaypal');
Route::get('/paypal/status', 'ControllerPaypal@payPalStatus');
Route::get('/paypal/failed', function() {
	return view('layouts.paypalfailed');
});
//Paginas
Route::get('/sucursales', function() {
	return view('layouts.sucursales');
});
Route::get('/categorias', function() {
	return view('layouts.categorias');
});
Route::get('/metodos-pago', function() {
	return view('layouts.metodos-pago');
});
Route::get('/aviso-de-privacidad', function() {
    return view('layouts.aviso-de-privacidad');
});
Route::get('/devoluciones', function() {
    return view('layouts.devoluciones');
});
Route::get('/terminos-y-condiciones', function() {
    return view('layouts.terminos-y-condiciones');
});
Route::get('/faqs', function() {
    return view('layouts.faqs');
});
Route::get('/como-colocar-parche', function() {
    return view('layouts.colocar-parche');
});



// Rutas Ingles
Route::get('eng/privacy-policies', function() {
    return view('eng.layouts.aviso-de-privacidad');
});
Route::get('eng/terms-and-conditions', function() {
    return view('eng.layouts.terminos-y-condiciones');
});
Route::get('eng/categories', function() {
	return view('eng.layouts.categories');
});
Route::get('eng/faqs', function() {
    return view('eng.layouts.faqs');
});
Route::get('eng/devolution', function() {
    return view('eng.layouts.devoluciones');
});
Route::get('eng/method', function() {
	return view('eng.layouts.metodos-pago');
});
Route::get('eng/offices', function() {
	return view('eng.layouts.sucursales');
});
Route::get('eng/about', function() {
	return view('eng.layouts.about');
});
Route::get('eng/devoluciones', function() {
	return view('eng.layouts.devoluciones');
});



/*Route Landings*/
Route::get('/venta_de_inflables_cdmx', function() {
	return view('venta_de_inflables.cdmx');
});
Route::get('/venta_de_inflables_queretaro', function() {
	return view('venta_de_inflables.queretaro');
});
Route::get('/venta_de_inflables_guanajuato', function() {
	return view('venta_de_inflables.guanajuato');
});
Route::get('/venta_de_inflables_jalisco', function() {
	return view('venta_de_inflables.jalisco');
});
Route::get('/venta_de_inflables_guadalajara', function() {
	return view('venta_de_inflables.guadalajara');
});
Route::get('/venta_de_inflables_monterrey', function() {
	return view('venta_de_inflables.monterrey');
});
Route::get('/venta_de_inflables_veracruz', function() {
	return view('venta_de_inflables.veracruz');
});
Route::get('/venta_de_inflables_sanluis', function() {
	return view('venta_de_inflables.sanluis');
});
Route::get('/venta_de_inflables_michoacan', function() {
	return view('venta_de_inflables.michoacan');
});
Route::get('/venta_de_inflables_cancun', function() {
	return view('venta_de_inflables.cancun');
});
Route::get('/venta_de_inflables_villahermosa', function() {
	return view('venta_de_inflables.villahermosa');
});
Route::get('/venta_de_inflables_tuxtla', function() {
	return view('venta_de_inflables.tuxtla');
});
Route::get('/venta_de_inflables_oaxaca', function() {
	return view('venta_de_inflables.oaxaca');
});
Route::get('/venta_de_inflables_acapulco', function() {
	return view('venta_de_inflables.acapulco');
});
Route::get('/venta_de_inflables_cuernavaca', function() {
	return view('venta_de_inflables.cuernavaca');
});
Route::get('/venta_de_inflables_juarez', function() {
	return view('venta_de_inflables.juarez');
});
Route::get('/venta_de_inflables_tijuana', function() {
	return view('venta_de_inflables.tijuana');
});
Route::get('/venta_de_inflables_mexicali', function() {
	return view('venta_de_inflables.mexicali');
});
Route::get('/venta_de_inflables_sonora', function() {
	return view('venta_de_inflables.sonora');
});
Route::get('/venta_de_inflables_tampico', function() {
	return view('venta_de_inflables.tampico');
});


Route::get('/promociones/cupones', 'ControllerCupones@index');
Route::POST('/promociones/generate-cupon', 'ControllerCupones@save');
Route::get('/validate_coupon', 'ControllerCupones@validate_c');


/*Redirecciones*/
Route::get('/producto/cubo-casero', function () { 
    return redirect('/products/Inflable_Cubo_Casero_(Amarillo_con_Azul)', 301); 
});
Route::get('/categoria-producto/tematicos', function () { 
    return redirect('/category/Tematicos', 301); 
});
Route::get('/producto/orejas-de-mickey', function () { 
    return redirect('/products/Orejas_de_Mickey_4x8', 301); 
});
Route::get('/categoria-producto/acuaticos', function () { 
    return redirect('/category/Acuaticos', 301); 
});
Route::get('/producto/buzz', function () { 
    return redirect('/products/Inflable_Buzz_Cubo_Resbaladilla', 301); 
});
Route::get('/producto/mini-cocodrilo', function () { 
    return redirect('/products/Cubo_Mini_Cocodrilo', 301); 
});
Route::get('/producto/casita', function () { 
    return redirect('/products/Inflable_Casita_Casera', 301); 
});
Route::get('/categoria-producto/entrega_inmediata', function () { 
    return redirect('/entrega-inmediata', 301); 
});
Route::get('/formas-de-pago', function () { 
    return redirect('/metodos-pago', 301); 
});
Route::get('/producto/kit-de-reparacion-de-inflables', function () { 
    return redirect('/products/Kit_de_Parches_para_Inflables', 301); 
});
Route::get('/category/1', function () { 
    return redirect('/category/Accesorios', 301); 
});

//Cache
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});