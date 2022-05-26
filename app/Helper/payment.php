<?php

namespace App\Helper;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class payment 
{
//there is many ways to implement dynamic managment on payment entrye
//1- external xml configuration and we read all allowed values from it 
//2-implement managemnr page in adminstration panal for manage currencies 

/* CoinSlot: There are four denominations: • 10c • 20c • 50c • $1 
CardSlot : all cards accepted
Notes Slot :20$ and 50$ only */

   
    public function ValidateCoins($enteredValue){
        $res = false;
        switch($enteredValue) {
            case '10':
  
                  $res= true;
                break;  
                case '20':
  
                    $res= true;
                  break;  
                  case '50':
  
                    $res= true;
                  break;  
                  case '100':
  
                    $res= true;
                  break;  
              
               
            }
     
        return $res;
    }

    public function ValidateNotes($enteredValue){
        $res = false;
        switch($enteredValue) {
            case '20':
  
                  $res= true;
                break;  
                case '50':
  
                    $res= true;
                  break;  
                 
               
            }
     
        return $res;
    }
    public function PaymentProcess($paymentType,$PaymentValue)
    {
         
        $resValidation =false;
        switch($paymentType) {
            case 'coins':
  
                  $resValidation=      $this->ValidateCoins($PaymentValue);
                break;  

                case 'notes':
  
                    $resValidation=  $this->ValidateNotes($PaymentValue);
            break;  
            case 'cards':
  
                $resValidation= true;
        break;  
                }

                return $resValidation;
            }
     

}

