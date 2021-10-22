<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>Loops and Foreach</h1>
    

    <?
        $var = 'Hello';
        $len = strlen($var);
        for($i=0; $i<$len; $i++) {
            echo $var{$i} . '<br>';
        }
        
        echo '<br>';

        // $i = (int) strlen($var);  // 5
        // echo $i;          
        $i = 0;      
        do {
            echo $var{$i} . '<br>';
            $i++;
        }
        while ($i < (int)$len);


        echo '<br>';

        $cols = 11;
        $rows = 11;
        $color = 'orange';
        
        //  Table 
        
        echo "<table border='1'>";
            for($tr=1; $tr<$rows; $tr++){
                echo "<tr>";
                for($td=1; $td<$cols; $td++){
                    if($td == 1 or $tr == 1){
                        echo "<th style='background:".$color."'>".$tr*$td."</th>";
                    } else
                    echo "<td>".$tr*$td."</td>";
                }
                echo "</tr>";
                
            }
            echo "</table>";
            
    ?>



</body>
</html>