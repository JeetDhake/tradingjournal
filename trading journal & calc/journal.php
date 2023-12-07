
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
    <link rel="stylesheet" href="journal.css">
    <title>Document</title>
</head>
<body>
<section class="main">


<table>
            <thead>
                <tr>
                    <th>Profit:Loss</th>
        
                    <th>acc.Setup</th>
                    <th>EL:EE</th>
                    <th>aft.tp:sl</th>
                    <th>Est.P</th>
                    <th>Est.L</th>
        
                </tr>
            </thead>

    <?php

        $select_query="SELECT * FROM `tj`";
        $result_query=mysqli_query($con,$select_query);


        while($row=mysqli_fetch_assoc($result_query)){

            $profit=$row['profit'];
            $loss=$row['loss'];
            $setup=$row['setup'];
            $elee=$row['elee'];
            $afttpsl=$row['afttpsl'];
            $estp=$row['estp'];
            $estl=$row['estl'];
          
        
            if($loss==0){
                echo "
                <tbody>
                    <tr>
                        <td><p class='p-g'>$profit</p></td>
                        <td>$setup</td>
                        <td>$elee</td>
                        <td>$afttpsl</td>
                        <td>$estp</td>
                        <td>$estl</td>
                    </tr>

                </tbody>
            

        ";
            }
            if($profit==0){
                echo "
                <tbody>
                    <tr>
                        <td><p class='l-r'>$loss</p></td>
                        <td>$setup</td>
                        <td>$elee</td>
                        <td>$afttpsl</td>
                        <td>$estp</td>
                        <td>$estl</td>
                    </tr>

                </tbody>
            

        ";
            }
            
        }
        
    ?>
    </table>
    
    </section>   
</body>
</html>
