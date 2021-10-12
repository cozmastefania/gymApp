<?php

session_start();
$_SESSION['sala'] = 'ENERGY Bodybuilding & Fitness Manastur';

$conectare = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conectare, 'db_licenta');
$s = "SELECT * FROM centre_fitness";
$s2 = "SELECT * FROM recenzii";
$result = mysqli_query($conectare, $s);
$result2 = mysqli_query($conectare, $s2);
$salafitness = $_SESSION['sala'];

?>
<!DOCTYPE html>
<html>
<head>
    <title> ENERGY Bodybuilding & Fitness Manastur </title>
    <link rel="stylesheet" type="text/css" href="newstylepage.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<body>	
<a href="Primapag.php"> <button class="btn"><i class="fa fa-home"> </i></button> </a>

<a href="logout.php" class="btn3"> LOGIN/LOGOUT </a>

    <h1 class="h1"> ENERGY Bodybuilding & Fitness Manastur </h1>

    <table class="table2">

    <?php

while($rows = mysqli_fetch_assoc($result))
{   
    if($rows['nume'] == $_SESSION['sala'])
    {
        if($rows['facilitati'] != null)
        {   ?>
    <tr>            

        <td class="td1">

            <div> <img class="image2" src="bd/<?php echo $rows['poza1']?>"></div>

        </td>

        <td class="td2">
           
            
                        <div style="font-size: 22px; font-weight:bold; ">Facilitati:</div>
                        <div> <?php echo $rows['facilitati'] ?> </div>
                   <?php } ?>
        </td>

    </tr>
    <tr>

        <td class="td2">
                    <div style="font-size: 22px; font-weight:bold; "> Preturi: </div>
                    <div> <?php echo $rows['preturi'] ?> </div> <br>
                    
                    <?php
                    if($rows['promotii'] != null)
                    { ?> 
                    <div style="font-size: 22px; font-weight:bold; "> Promotii: </div>
                    <div> <?php echo $rows['promotii'] ?> </div> <br>
                    <?php } ?>  
        </td>

        <td class="td1" style="text-align: right;">
            <div> <img class="image2" src="bd/<?php echo $rows['poza2']?>"></div> 
        </td>
    </tr>
    <tr>

        <td class="td1">
            <div> <img class="image2" src="bd/<?php echo $rows['poza3']?>"></div>
        </td>

            <td class="td2">
                        <div style="font-size: 22px; font-weight:bold; "> Autobuze: </div>
                        <div> <?php echo $rows['autobuze'] ?> </div> <br>

                        <div style="font-size: 22px; font-weight:bold; "> Orar: </div>
                        <div> <?php echo $rows['orar'] ?> </div>
            </td>

        </tr>
        <tr>

            <td class="td2">
                        <div style="font-size: 22px; font-weight:bold; "> Adresa: </div> <p>
                        <div> <?php echo $rows['adresa'] ?> </div> <br>

                        <div style="font-size: 22px; font-weight:bold; "> Mail: </div>
                        <div> <?php echo $rows['mail'] ?> </div> <br>

                        <div style="font-size: 22px; font-weight:bold; "> Numar de telefon: </div>
                        <div> <?php echo $rows['nr telefon'] ?> </div> <br>
                        
                        <?php
                        if($rows['site_web'] != null)
                        { ?>
                        <div style="font-size: 22px; font-weight:bold; "> Site web: </div>
                        <div> <?php echo $rows['site_web'] ?> </div>
                        <?php } ?>
            </td>
            <?php
              }
        }
        ?>              
            <td class="td2" style="margin-bottom: 15px;">
                <h3>
                    Recenzii clienti
                </h3>
                <?php
                while($rows = mysqli_fetch_assoc($result2))
                {
                    if($rows['sala'] == $salafitness)
                    {
                        ?>
                        <div> <?php echo $rows['recenzie'] ?> </div> <br>
                        <?php
                    }
                    
                }
                ?>
                
                <div>
                    <h3 style="margin-top: 50px;"> Scrie o recenzie </h3>
                    <form action="rec.php" method="post">
                        <input type="text" name="recenzie" class='lbl' required>
                        <button type="submit" class="btn2"> Trimite </button>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    
</body>
</html>