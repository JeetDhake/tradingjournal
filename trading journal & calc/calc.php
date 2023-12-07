

<?php

$buy=0;
$sell=0;
$quantity=0;
$pnl=0;
$netpnl=0;
$prepnl=0;
$gst=0;
$turnover=0;
$charge=0;
$equity='';
$intraday='';
$delivery='';
$option='';
$nul='';

    if(isset($_POST['calculate'])){
        $quantity = $_POST['quantity'];
        $buy = $_POST['buy'];
        $sell = $_POST['sell'];
        $stockexchange = $_POST['stockexchange'];
        $equity = $_POST['equity'];
    }  
        $pnlps = $sell - $buy;
        $pnl = $pnlps * $quantity;
        
        $bp = $quantity * $buy;
        $sp = $quantity * $sell;
        $turnover = $bp + $sp;

        $charge = 0.025 * $quantity; 
        

        switch($equity){
            case 'null' : $charge = 0;
            break;
            case 'intraday' : $charge = $charge;
            break;
            case 'delivery' : $charge = $charge + 13.5;
            break;
            case 'option' : $charge = 40 + $charge;
            break;

        }
        $prepnl = $pnl - $charge;
        $gst = $prepnl * 0.18 ;
        $netpnl = $prepnl - $gst;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calc.css">
    <title>trade calc and journal</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">Trade PnL</div>

        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                <div class="input-field">
                    <label for="">Quantity</label>
                    <input type="number" id="quantity" value="<?php $quantity ?>" name="quantity" class="input" placeholder="no. of stocks">
                </div>
                            
                
                <div class="input-field">
                    <label for="">Buy Price</label>
                    <input type="number" id="buy" value="<?php $buy ?>" name="buy" class="input" placeholder="per share">
                </div>
                <div class="input-field">
                    <label for="">Sell Price</label>
                    <input type="number" id="sell" value="<?php $sell ?>" name="sell" class="input" placeholder="per share">
                </div>

            <div class="input-field">
                <label for="">Stock Exchange</label>
                <div class="custom-select">
                    <select name="stockexchange" id="" value="<?php $stockexchange ?>">
                        <option value="">Select Exchange</option>
                        <option value="nse">NSE</option>
                        <option value="bse">BSE</option>
                    </select>

                </div>
            </div>
            <div class="input-field">
                <label for="">Equity</label>
                <div class="custom-select">
                    <select name="equity" id="" value="<?php $equity ?>">
                        <option name="nul" value="$nul">Select type</option>
                        <option name="intraday" value="intraday">Intraday</option>
                        <option name="delivery" value="delivery">Delivery</option>
                        <option name="option" value="option">F&O</option>
                    </select>

                </div>
            </div>

            <div class="input-field">
                <input type="submit" name="calculate" id="calculate" value="calculate" class="btn">
            </div>
            <?php
            echo "<div class='input-field'>
            <label for=''>Turnover</label>
            <input type='number' value='$turnover' id='turnover' name='turnover' class='input' placeholder='turnover' disabled>
        </div>
        <div class='input-field'>
            <label for=''>PnL</label>
            
            <input type='number' value='$pnl' id='pnl' name='pnl' class='input' placeholder='returns' disabled>
        </div>
        <div class='input-field'>
            <label for=''>Brokrage</label>
            
            <input type='number' value='$charge' id='charge' name='charge' class='input' placeholder='charges and tax included' disabled>
        </div>
        <div class='input-field'>
            <label for=''>Net PnL</label>
            
            <input type='number' value='$netpnl' id='charge' name='netpnl' class='input' placeholder='original profit' disabled>
        </div>"
        
        
        ;
        
            ?>


            <p>including 18% gst, brokerage and additional charges</p> 
        </form>
        </div>

    </div>
</body>
</html>