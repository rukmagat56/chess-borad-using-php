
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="chess_board">
    <h1>Chess Board</h2>
    <table border="1">
    <?php
    for($row=0;$row<8;$row++){
        echo '<tr>';
        for($col=0;$col<8;$col++){
            $total=$row+$col;
           
            if($total%2==0){
                echo '<td class="one"></td>';
            }else{
                echo '<td class="two"></td>';
            }

        }
        // echo '<br>';
       echo '</tr>';
    }
    
    ?>
    </table>
    
    </div>
</body>
</html>
