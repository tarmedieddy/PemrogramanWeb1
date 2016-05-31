<html>
    <body>
        <?php
        $x = 10;
        $y = 6;
        $jumlah = $x + $y;
        $kurang = $x - $y;
        $kali = $x * $y;
        $bagi = $x / $y ;
        
        echo "<h2>Latihan Operator dan Kondisi pada PHP</h2> <br>";
        echo "X = " . $x ."<br>";
        echo "Y = " . $y ."<br> <br>";
        
        echo "Hasil Penjumlahan :". $jumlah ."<br>";
        
        echo "Hasil Pengurangan :". $kurang ."<br>";
        
        echo "Hasil Perkalian :". $kali ."<br>";
        
        echo "Hasil Pembagian :". $bagi ."<br>";
        echo"<br>";
        $favcolor="Black";
        switch ($favcolor) {
            case "Red":
                echo"Your Favorite Color is Red! <br>";
                break;
            case "Blue":
                echo"Your Favorite Color is Blue! <br>";
                break;
            case "Black":
                echo"Your Favorite Color is Black! <br>";
                break;
            case "Green":
                echo"Your Favorite Color is Green! <br>";
                break;
            default:
                echo"You Favorite Color is Red,Blue,Black,and Green! <br>";
        }
        
        for ($a = 0; $a <=10; $a++){
            echo"The Number is: $a <br>";
        }
        $b=1;
        while ($b <=5){
            echo"The Number is: $b <br>";
            $b++;
        }
        echo "<br>"
        ?>
        
        <table border=1>
            <tr>
                <td>
                    <?php                    
                    $x = 10;
                    $y = 6;
                    echo "<b> X == Y </b><br>";       
                    if ($x == $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
                <td>
                    <?php                    
                    echo "<b> X === Y </b><br>";       
                    if ($x === $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo "<b> X != Y </b><br>";
                    if($x != $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo "<b> X <> Y </b><br>";
                    If ($x <> $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo "<b> X !== Y <br></b>";
                    if($x !== $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo "<b> X > Y </b><br>";
                    if($x > $y){
                        echo "True";
                    }else{
                        echo "False";
                    }                    
                    ?>
                </td>
                <td>
                    <?php
                    echo "<b> X < Y </b> <br>";
                    if($x < $y){
                        echo "True";
                    }else{
                        echo "False";
                    }                    
                    ?>
                </td>
                <td>
                    <?php
                    echo "<b> X >= Y </b> <br>";
                    if($x >= $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
                <td>
                    <?php
                     echo "<b> X<=Y </b> <br>";
                    if($x <= $y){
                        echo "True";
                    }else{
                        echo "False";
                    }
                    ?>
                </td>
            </tr>
        </table>

    </body>
</html>