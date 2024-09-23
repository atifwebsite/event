<?php
use App\Models\MasterSetting;
if(!function_exists('p')){
    function p($data){
        echo "<pre>",
        print_r($data);
         echo "<pre>";
    }
}

function get_master_details(){
   return MasterSetting::first();
//    dd($data->company_title);
}
