<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class CheckStatus 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     /*
     
     */
     
     /*
    This function is called each time your success page is requested:
    To ensure that Fatora gateway which issued that request.
    
    If the result of the response was successfully, the action processes the following:
    1- converting The customer's order into a paid status
    2- show success page successful msg
    If the result of the response was failed, the action
    1- returns the error page with failure message
     */
    public function handle($request, Closure $next)
    {  
         $orderId =  $request->query->get("orderId") ;  
        
        $url = 'https://maktapp.credit/v3/CheckStatus';
        $data = array(
            'token'           => '5BC4B469-1EC0-4222-AF1F-7CE632F29A23',
            'orderId'         => $orderId
        );
        
        $response = curl_post( $url , $data );
        $data_json_decode = json_decode($response);
        /*
                
                The above request will returns JSON structured if Fatora gateway find the payment:

                { 
                    "result": 1,
                    "payment":
                    {
                        "transactionID": "XXXXXXX",
                        "amount": XXXX,
                        "currencyCode":  "XXX",
                        "customerEmail": "XXXX",
                        "customerPhone": "XXXX",
                        "customerName":  "XXXX",
                        "paymentDate":   "XXXX",
                        "paymentstate":  "XXXX" [SUCCESS, PENDING,FAILURE], 
                        "auth" : "XXXX",
                        "mode": "XXX" [Live, Test] ,
                        "ExchangeRate":0,
                        "token":null,
                        "description":"Transation Successfull",
                        "refundState":false,
                        "refundstatus":null,
                        "refundDescription":null,
                        "refundTransactionId":null
                    } 
                }
                Response if Fatora gatway dos not find the payment:
                { 
                    "result": 0
                }
                Response in case one of the request parameters is null or not valid:

                { 
                    "result": X
                } [-1, -2, -3, -6, -8, -10, -20, -21 ]
                                
                */		
        $result = $data_json_decode->{'result'};
       
        $response = checkResponseStatus($result); 
        
         if ($response == "success")
        {
           //------- confirm order status that mean payment is done successfully.
            
           // $order = Order::findOrFail($orderId);
           // $order->status = "publish";            
           // $order->save();
            //-----------------------------------------------
            
             $request->route()->setParameter('orderId',$orderId);
             $request->route()->setParameter('chkStatus',1);
            
            // return to sccuess page
            return $next($request);           
        }
        else
        {
            $error_msg = $response;                  
            return redirect()->route('payment.error', ['error_msg' => $error_msg]);
        }
    }
}
