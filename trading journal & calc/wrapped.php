<?php

include('connect.php');
include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wrapped.css">
    <title>wrapped</title>
</head>
<body>
    
    <header class="header" id="1">
        <div class="container">
               
            <div class="row">
    
                <div class="col-2">
                <?php
                
                $profitsum = "SELECT SUM(profit) FROM tj";
                $result = mysqli_query($con, $profitsum);

                while($row = mysqli_fetch_assoc($result)){
                    $p = $row['SUM(profit)'];
                }

                $losssum = "SELECT SUM(loss) FROM tj";
                $result = mysqli_query($con, $losssum);

                while($row = mysqli_fetch_assoc($result)){
                    $l = $row['SUM(loss)'];
                }
                $pnl = $p+$l;
                ?>

                
                    <h1>Original pnl (profit - loss)</h1>
                <?php
                    if($p>$l){
                        echo "<h1 class='positive'>
                    
                        +$pnl
                    
                        </h1>";
                }
                if($p<$l){
                    echo "<h1 class='negative'>
                
                    $pnl
                
                    </h1>";
                }
                ?>    
                    
                    <p>Check out summary of your past trades<br>Click the button below to continue
                    </p>
                    <a href="#2" class="btn">Next</a>
                </div>
 
            </div>
    
        </div>
    </header>


    <div class="offer" id="2">
        <div class="small-container">
            <div class="row">
            <?php
            $lossn = "SELECT SUM(loss) FROM tj WHERE setup='n'";
            $result = mysqli_query($con, $lossn);

                while($row = mysqli_fetch_assoc($result)){
                    $ln = $row['SUM(loss)'];
                }

            ?>
                
                <div class="col-2">
                    <p>By sticking to your setup, and trading strategy</p>

                    <?php
                        if($ln<0){
                            echo "
                        <h1>
                        Being Desciplined<br>
                        You could have saved loss of                        
                        <h1 class='negative'>$ln</h1>";
                        }
                        else{
                            echo "
                        <h1>
                        By being Desciplined<br>
                        You saved yourself from loss                        
                        ";
                        }
                        
                    ?>
                        
                    </h1>
                    
                    <br>
                    <a href="#3" class="btn">Next</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="testimonial" id="3">
        <h2 class="title">Factors Affecting Trade</h2>
        

        <div class="small-container">
            <div class="row">

            <?php
            $estpr = "SELECT SUM(estp) FROM tj WHERE elee='y'";
            $result = mysqli_query($con, $estpr);

                while($row = mysqli_fetch_assoc($result)){
                    $ep = $row['SUM(estp)'];
                }
            $up=$pnl + $ep;    
            ?>
            <?php
            
            echo "
            <div class='col-3'>
                    <p>if you stayed in trade, (avoiding early entry | late exit) you could have saved another </p>
                    <p> you could have saved another </p>
                    <h2 class='positive'> $ep </h2>
                    <img src='' alt=''>
                    <p>your pnl could be </p>
                    <h2 class='positive'>+$up</h2>
                </div>
            
            ";
            ?>
            
                    <a href="#4" class="btn"><br><br> Next</a>
            
            <?php
                $estlo = "SELECT SUM(estl) FROM tj";
                $result = mysqli_query($con, $estlo);

                while($row = mysqli_fetch_assoc($result)){
                    $el = $row['SUM(estl)'];
                }
                $op = $p+$ep;
                $os = $l+$el;
                
            ?>   
            
            <?php

            if($op>$os){
                echo "
                <div class='col-3'>
                    <p>According to formula:<br>your setup is profitable and is working, keep going</p>
                    <img src='' alt=''>
                    <p>your trades has generated profit of</p>
                    <h2 class='positive'> $op </h2>
                    <p>over loss of</p>
                    <h2 class='negative'> $os </h2>
                </div>
                ";
            }
            if($op<$os){
                echo "
                <div class='col-3'>
                    <p>According to formula:<br>your setup isn't profitable and may not be working</p>
                    <img src='' alt=''>
                    <p>your trades has generated profit of</p>
                    <h2 class='negative'> $op </h2>
                    <p>over loss of</p>
                    <h2 class='positive'> $os </h2>
                </div>
                ";
            }
                
            ?>                
            </div>    
            
            
        </div>
    </div>

    <header class="header" id="4">
        <h2 class="title">Consider over 100+ trades</h2>
        <div class="container">
              
            <div class="row">
    
                <div class="col-2">
                    <?php
                        if($op>$os && $pnl<0){
                            echo "
                            <h1>setup is profitable</h1>
                            <h1> but you need descipline</h1>
                            <p>you can make it better</p>
                            ";
                        }
                        if($op>$os && $pnl>0){
                            echo "
                            <h1>your setup is profitable</h1>
                            <h1>so you are</h1>
                            <p>Keep going</p>
                            ";
                        }
                        elseif($op<$os && $p<0){
                            echo "
                            <h1>your setup isn't profitable,</h1>
                            <h1>You need new strategy</h1>
                            ";   
                        }
                    ?>                    
                                       
                    <a href="journalentry.php" class="btn">Exit</a>
                </div>
 
            </div>
    
        </div>
    </header>

</body>
</html>