# Fatora-laravel
first you must install laravel framework
copy this file to your laravel project

1- Controller:
	HomeController:
		- function index(): this function show index of ministore
	
	PaymentController: 
		- function store(): this function save order in database, and call function getCheckout() 
		- Action getCheckout(): this function requests checkout page, and return pament page if success
2- MiddleWare: 
	CheckStatus:
		- This function is called each time your success page is requested to ensure that Fatora gateway which issued that request. 	
		- if check status successful then made order as done and continue to success page
3-Helpe: 
	PaymentHelper:
		- function curl_post(): this function send request to Fatora gateway
		- function checkResponseStatus: this function check response status

4- Resources:
	welcome.blade.php: it is the home page shows products 
	success.blade.php: it is the success page requested after payment successfully
	error.blade.php: it is the error page requested if response returned with error message

5- Router:
Route::get('/', function () {
    return view('welcome');
 
});

Route::resource('orders', 'PaymentController');
Route::group(['middleware' => ['checkstatus']], function()
{
    Route::get('/success/{orderId?}/{chkStatus?}', ['as' => 'payment.success' , 'uses' => 'PaymentController@getSuccessPage']);    
});
Route::get('/error/{error_msg}', 'PaymentController@getErrorPage')->name('payment.error');

----------------------------------------------------------------------------------------------------------------------------
6- in composer.json add 
"autoload" : {
		.....
		"files" : [
			"app/Help/PaymentHelper.php"
		],
    .....
		}
    
7- extract vendor.zip file

For more information please check http://fatora.io/developers

		

