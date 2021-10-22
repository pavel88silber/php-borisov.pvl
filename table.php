  
  <?php
    $output ='';
  ?>
  
  <!-- Область основного контента -->
  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->

    if($output) 
      echo "<h3>Result is: $output .</h3>";
    <form action='' method='post'>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>

  </div>
    <!-- Таблица -->
        
    <?php

      echo 'test';

      $color = 'yellow';
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


    <!-- Таблица -->
    <!-- Область основного контента -->
