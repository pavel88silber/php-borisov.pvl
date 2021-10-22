<?php
    // Ассоциативный массив
    $user = [
        "name"=>"John",
        "login"=>"root",
        "password"=>"1234",
        "age"=>25,
        true
    ];
    $user[1] = [
        "name"=>"Alex",
        "login"=>"root",
        "password"=>"1234",
        "age"=>33,
        true
    ];

    $user[] = true;
    $user[88] = 'true';
    $user[7] = 'zzz';
    unset($user[7]);

    echo count($user); //5
    print_r($user); //5
    echo '<br>';
    echo '<hr>';
    var_dump($user);

    echo '<br>';
    echo '<br>';
    echo '<hr>';

    echo '<h2>$nums = [1,2,3,4,5] => as &$val</h2>';

    $nums =[1,2,3,4,5];
    foreach ($nums as &$val) {
        $val *=10;
    }
    print_r($nums);

    echo '<br>';
    echo '<br>';
    echo '<hr>';
    