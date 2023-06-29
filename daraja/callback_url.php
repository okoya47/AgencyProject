<?php
 		header("Content-Type: application/json");

     $response = '{
         "ResultCode": 0, 
         "ResultDesc": "Confirmation Received Successfully"
     }';
 
     // DATA
     $mpesaResponse = file_get_contents('php://input');
 
     // log the response
     $logFile = "M_PESAConfirmationResponse.txt";
 
     // write to file
     $log = fopen($logFile, "a");
 
     fwrite($log, $mpesaResponse);
     fclose($log);

     // Process json reponse data

     $mpesaResponse = file_get_contents('M_PESAConfirmationResponse.txt');
     $callBackContent = json_decode($mpesaResponse);

     $ResultCode = $callBackContent->Body->stkCallback->ResultCode;
     $CheckoutRequestID = $callBackContent->Body->stkCallback->CheckoutRequestID;
     $Amount = $callBackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
     $MpesaReceiptNumber = $callBackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
     $PhoneNumber = $callBackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;

     $formatedPhone = str_replace("254", "0", $PhoneNumber);

     if($ResultCode == 0){
      echo "Getting to data base";
     }
 
     echo $response;
?>