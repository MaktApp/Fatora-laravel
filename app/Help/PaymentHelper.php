<?php 

if (!function_exists("curl_post"))
{
    function curl_post($url, array $post = NULL, array $options = array())
    {
          try{
        $defaults = array(
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_URL => $url,
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FORBID_REUSE => 1,
            CURLOPT_TIMEOUT => 500,
            CURLOPT_POSTFIELDS => http_build_query($post)
        );
        $ch = curl_init();
        curl_setopt_array($ch, ($options + $defaults));
        if (! $result = curl_exec($ch)) {
            trigger_error(curl_error($ch));
        }
        curl_close($ch);
        
        return $result;
          }
        catch (Exception $ex)
        {
            $result = -99;
            return $result;
        }
    }
}

if (!function_exists("checkResponseStatus")){
    function checkResponseStatus($result)
    {
        switch ($result) {
            case -1:
                $msg = "Unauthorized -- API key is invaild(not Valid GUID), or no merchant for this token";
                break;
            case -2:
                $msg = "Not Found -- The specified orderId could not be found.";
                break;
            case -3:
                $msg = "Not Support -- merchnat application doesn't support the sent currency code.";
                break;
            case -7:
                $msg = "Not Found -- there isn't any recurring or autosave payment in Fatora gateway for this merchant with the request parameter.";
                break;
            case -8:
                $msg = "Invalid -- Token is not valid guid.";
                break;
            case -10:
                $msg = "Bad Request -- required parameters requested aren't sent in request.";
                break;
            case -20:
                $msg = "Not Found -- There isn't application data for the merchant for the sent currency in payment gateway.";
                break;
            case -21:
                $msg = "Not Support -- payment gateway doesn't support void payment";
                break;
            case -99:
                $msg = "Connection error -- can`t make connection";
                break;
                
            default:
                $msg = "success";
                break;
        }
        return $msg;
    }
}

?>