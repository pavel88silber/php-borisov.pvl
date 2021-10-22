<?
    function drawMenu($menu, $vertical) {

    }


    setlocale(LC_ALL, 'russian');
    
    $day = strftime('%d');
    $mon = strftime('%B');
    $mon = iconv("windows-1251", "UTF-8", $mon);
    $year = strftime('%Y');

    $hour = (int) strftime('%H');

    $welcome = '';

    $size = ini_get("post_max_size");
    $letter = $size{strlen($size)-1};   // last symbol
    $size = (int)$size;
    echo '<h2>' . 'Max post size ' . $size . $letter . '</h2>';
    
    switch(strtoupper($letter)):
        case 'G': 
            $size *= 1024;
            break;
        case 'M': 
            $size *= 1024;
            break;
        case 'K': 
            $size *= 1024;
            break;
    endswitch;

    echo '<h2>Max size ' . $size .' bytes</h2>';
?>
  
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="UTF-8"> -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Websait of Our School</title>
        <link rel="stylesheet" href="style.css" />
    </head>



    <?
        function randCol() {
            $c1 = rand(10,99);
            $c2 = rand(10,99);
            $c3 = rand(10,99);
            static $fc = '';
            $fc = $c1.$c2.$c3;
            return $fc;
        }
        $myC = randCol();
        $color = '#'.$myC;
        echo '<body style="background:' . $color .'">';

        echo '<hr>';

        //=========================  HTTP request =========================
        
        $title = 'Websait of Our School';
        $header = "$welcome, Guest";
        $id = strtolower(strip_tags(trim($_GET['id'])));
        

        echo '<h1>Dynamic page here below</h1>';


        echo 'issset? ' . (bool)isset($id);
        echo $id;

        echo '<hr>';

            // Инициализация заголовков страницы
        $title = 'Websait of Our School';
        $header = "$welcome, Гость!";
        $id = strtolower(strip_tags(trim($_GET['id'])));

        switch($id){
            case 'about':
                $title = 'О сайте';
                $header = 'О нашем сайте';
                break;
            case 'contact':
                $title = 'Контакты';
                $header = 'Обратная связь';
                break;
            case 'table':
                $title = 'Таблица умножения';
                $header = 'Таблица умножения';
                break;
            case 'calc':
                $title = 'Он-лайн калькулятор';
                $header = 'Калькулятор';
                break;
        }        
    ?>

        <h1><? echo $day ?></h1>
        <h1><? echo $mon ?></h1>
        <h1><? echo $year ?></h1>

        <?
            echo '<h1>' . $welcome . '</h1>';

            if ($hour < 6 && $hour > 0) {
                echo '<h1>' . 'Good night' . '</h1>';
            }
            elseif ($hour < 18 && $hour > 12) {
                echo '<h1>' . 'Good day!' . '</h1>';
            }
            elseif ($hour < 23 && $hour > 18) {
                echo '<h1>' . 'Good evening!' . '</h1>';
            }

            echo '<h1>' . 'Now time is: ' . $hour . '</h1>';
        ?>


                            <!-- MENU -->
        <ul>
            <? 
                $rand = rand(0,255);
                $transp = 0.55;
                $color = 'rgba('.$rand.', '.$rand.', '.$rand.', '.$transp.')';

                $menu = [
                    'Home' => 'index.php',    
                    'Array' => 'array.php',    
                    'Test' => 'test.php',
                    'Foreach' => 'foreach.php',
                    'Global Variables' => 'globalvar.php',
                    'func_num_args()' => 'func_num_args.php'
                ];

                foreach($menu as $key => $val) {
                    echo '<li style="color:' . $color .'">
                    <a href="'.$val.' ">'. $key . '</a>
                    </li>' . "\n";
                }
            ?>
        </ul>

        <div id="mainPage">
            <div><?
                    echo 'Home page';
                    
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';
                    echo '<hr>';
                    
                    foo(1, 2, 3);

                    $code = '<?php
                    $numargs = func_num_args();
                    echo number of arguments = . $numargs;

                    ?>';
                    

                    // function foo() {
                    //     $numargs = func_num_args();
                    //     echo 'number of arguments = ' . $numargs;
                    // }

                    echo '<br>';
                    // echo '<pre>' . highlight_string($code) . '</pre>';
                    echo '<h2>' . highlight_string($code) . '</h2>';
                
                    function foo(...$nums) {
                        foreach ($nums as $key => $value) {
                            echo "Argument $key : $value\n";
                        }
                    }
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';
                    echo '<hr>';


                    // include "day321.php"; // no error 
                    // require "day321.php"; // error

                    // require_once "day3.php"; // LEVEL1-day3  1:47
                ?>
            </div>
        </div>




    </body>
</html>
