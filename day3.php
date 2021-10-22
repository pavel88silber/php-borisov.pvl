<?php

    // echo 
    //     '<!DOCTYPE html>
    //         <html lang="en">
    //         <head>
    //             <meta charset="UTF-8">
    //             <meta http-equiv="X-UA-Compatible" content="IE=edge">
    //             <meta name="viewport" content="width=device-width, initial-scale=1.0">
    //             <title>Document</title>
    //         </head>
    //         <body>

    //             <h1>ECHO</h1>
                
    //         </body>
    //         </html>'

    echo '<h1>DAY 3</h1>';

    echo time();

    echo '<hr>';

    print_r(getdate(1234567890)); // метка времени     

    echo '<hr>';
    
    var_export(getdate());
    
    echo '<hr>';

    echo time();

    echo '<hr>';

    echo '<h2>Make time</h2>';

    $dt = mktime(11, 11, 11, 11, 11, 2011);

    print_r(getdate($dt)); // метка времени     
    
    echo '<hr>';
    
    echo '<h2>Временные метки (1234567890 => 14-02-2009)</h2>';

    echo date("d-m-Y", 1234567890); // метка времени второй параметр
    
    echo '<hr>';
    
    $mkt = mktime(12, 12, 1, 11, 22, 2015);
    // $mkt = mktime(hour, min, sec, month, day, 2015);

    echo $mkt . ' timestamp';

    echo '<br>';
    
    echo date("d-m-Y H:i:s", $mkt);
    
    echo '<hr>';

    echo 'echo __FILE__;';
    echo '<br>';
    echo __FILE__;

    echo '<hr>';

    echo 'echo __LINE__;';
    echo '<br>';
    echo __LINE__;
    
    echo '<hr>';
    
    

    
    
