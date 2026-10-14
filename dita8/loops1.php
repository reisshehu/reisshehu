 <?php 
        for($x= 5; $x>= 1; $x--){
            for($y = 1; $y<= $x;$y++){
                echo "*"." ";
            }
            echo "<br>";
        }
        ?>
<br><br>
<?php 
        for($x= 1; $x<= 5; $x++){
            for($y = 1; $y<= $x;$y++){
                echo "*"." ";
            }
            echo "<br>";
        }
        ?>
        <br><br>
    
    <?php
        for($x=1; $x<=5; $x++){
            for($y=1; $y<=5;$y++){
                if($x == $y){
                    echo "X". " ";
                }
                else{
                    echo "0"." ";
                }
            }
            echo "<br>";
        }
    ?>
<br><br>
    <?php
        for($x=1; $x<=5; $x++){
            for($y=1; $y<=5;$y++){
                if($x+$y==6){
                    echo "X". " ";
                }
                else{
                    echo "0"." ";
                }
            }
            echo "<br>";
        }
    ?>
<br><br>
    <?php
        for($x=1; $x<=5; $x++){
            for($y=1; $y<=5;$y++){
                if($x == $y || $x+$y==6){
                    echo "X". " ";
                }
                else{
                    echo "0"." ";
                }
            }
            echo "<br>";
        }

    ?>
    <br><br>
    <?php
        for($x=1; $x<=5; $x++){
            for($y=1; $y<=5;$y++){
                if($x == $y || $x+$y==6||$x ==1||$x ==5 || $y==1 || $x==2 || $y==3) {
                    echo "X". " ";
                }
                else{
                    echo "0"." ";
                }
            }
            echo "<br>";
        }

    ?>
     <br><br>
    <?php
        for($x=1; $x<=5; $x++){
            for($y=1; $y<=5;$y++){
                if($x+$y==6||$x ==1||$x ==5|| $y==3) {
                    echo $y. " ";
                }
                else{
                    echo "0"." ";
                }
            }
            echo "<br>";
        }

    ?>