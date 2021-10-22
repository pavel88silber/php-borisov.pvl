<?
    echo '<h2>Использование аргументов переменной длины</h2>';

    echo 'func_num_args()<br>';

    echo '<br>' .'PHP5.6<br>';
    echo 'function foo(...$nums)';

    echo '<hr>';
        
    function foo()
    {
        $numargs = func_num_args();
        echo "Количество аргументов: $numargs\n";
    }

    foo(1, 2, 3);

?>