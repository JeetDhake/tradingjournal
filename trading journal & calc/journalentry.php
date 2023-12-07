
<?php

include('connect.php');

include('nav.php');
if(isset($_POST['submit'])){

    $profit=$_POST['profit'];
    $loss=$_POST['loss'];
    $setup=$_POST['setup'];
    $elee=$_POST['elee'];
    $afttpsl=$_POST['afttpsl'];
    $estp=$_POST['estp'];
    $estl=$_POST['estl'];
    

    

    if($profit=='' or $loss=='' or $setup=='' or $elee=='' or $afttpsl=='' or $estp=='' or $estl==''){
        echo "<script>
                alert('enter all fields')
              </script>";
              exit();
    }

    else{

        

        $insert_value="INSERT INTO `tj` (profit,loss,setup,elee,afttpsl,estp,estl) VALUES ('$profit','$loss','$setup','$elee','$afttpsl','$estp','$estl')";

        $result_query=mysqli_query($con,$insert_value);
        if($result_query){
            echo "<script>
                alert('value added successfully')
              </script>";
              
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="journalentry.css">
    <title>trading journal</title>
</head>

<body>
<section class="main"> 
<div class="tj">
    
    <form action="" method="POST">
    <div class="one">

        <label for="">Profit</label>
        <input type="number" class="input" name="profit" placeholder="enter 0 in case of loss">
    </div>
    <div class="one">
        <label for="">Loss</label>
        <input type="number" class="input" name="loss" placeholder="enter 0 in case of profit">
    </div>
    <div class="one">
        <label for="">Followed Setup n Rules, Planed Entry|Exit</label>
        <select name="setup" class="input">
            <option value=""></option>
            <option value="y">yes</option>
            <option value="n">no</option>
        </select>
    </div>    
    
    <div class="one">
        <label for="">Early/Late Entry/Exit</label>
        
        <select name="elee" class="input">
            <option value=""></option>
            <option  value="y">yes</option>
            <option  value="n">no</option>
        </select>
    </div>
    <div class="one">
        <label for="">Did It Hit tp or sl Afterwards</label>

        <select name="afttpsl"class="input" >
        <option value=""></option>
            <option value="none" >none</option>
            <option value="tp">tp</option>
            <option value="sl">sl</option>
            
        </select>
    </div>
    <div class="one">
        <label for="">Estimated Profit:</label>
        <input type="number" class="input" name="estp" placeholder="if profit or enter 0">
    </div>
    <div class="one">
        <label for="">Estimated Loss</label>
        <input type="number" class="input" name="estl" placeholder="if loss or enter 0">
    </div>
    

        
    <button class="btn" type="submit" name="submit" id="" value="submit">add</button>
    </form>
    
</div>

</section>     
        
</body>
</html>