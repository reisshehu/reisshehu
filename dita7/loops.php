

      <?php
        for($x=1;$x<=5;$x++){
            for($y=1;$y<=5;$y++){
                echo $y." ";
            }
            each "<br> ";
        }
    ?>
    <br>
     <?php
        for($x=1;$x<=5;$x++){
            for($y=1;$y<=5;$y++){
                echo $x. " ";

            }
            echo "<br> ";
        }
    ?>
    <?php 
        for($x= 1; $x<= 5; $x++){
            for($y = 1; $y<= $x;$y++){
                echo "*"." ";
            }
            echo "<br>";
        }
        ?>
         <?php 
        for($x= 5; $x>= 1; $x--){
            for($y = 1; $y<= $x;$y++){
                echo "*"." ";
            }
            echo "<br>";
        }
        ?>


