<?php

use App\Models\BussinessOwenr;


return [

   

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

   
    

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
            
        ],
        'business_owners' => [
        'driver' => 'session', // You can use the same driver as 'web' or choose a different one based on your requirements
        'provider' => 'business_owners', // Set the appropriate provider for business owners
    ],
    ],

     

    'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\BussinessOwenr::class,  
    ],
    'business_owners' => [
        'driver' => 'eloquent',
        'model' => App\Models\BussinessOwenr::class,  
    ],
    
 


        
    ],

    

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

   

    'password_timeout' => 10800,

];
