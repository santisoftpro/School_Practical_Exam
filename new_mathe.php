<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet"/>
    <title></title>
    <style>
        .form{
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            padding: 80px;
          
        }
        form{
            padding: 25px 25px 5px 5px;
            z-index: 2;
            background-color: rgb(14, 51, 51);
            width: 500px;
            color: white;
            border-radius: 30px 30px 0 0;
            box-shadow: 0 12px 12px;
            
            
            
        }
        table{
           padding: 5px 5px;
        }
        button{
            background-color: blue;
            text-align: center;
            padding: 10px;
            border: none;
            outline: 0;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            color: white;
            
        }
        td{
            text-align: center;
            padding: 7px; 
            font-size: 20px;
            font-weight: bold;
        }
        input
        {
            padding: 10px;
            border: none;
            outline: 0;
            margin: 9px;
            background-color: white;
            border-radius: 10px;
        }
        h1{
            font-size: 30px;
        }
        button:hover
        
        {
            background-color: rgb(12, 27, 6);
            color: azure;
            cursor: pointer;
        }
        select{
            padding: 10px;
            border: none;
            outline: 0;
            margin: 9px;
            background-color: white;
            border-radius: 10px;
            
        }
        option{
            background-color: rgb(14, 51, 51);
            color: white;
            padding: 10px;
            border-radius: 20px;
        }

    </style>
  </head>
  <body>
    <div id="layout">
        <div id="banner"></div>
        <div id="manu"><?php include "includes/navbar.php" ?></div>
        <div id="content">
            <div class="form">
               <center> <form action="code.php" method="POST">
                   <h1>New Referees</h1>
                    <table>
                        <tr>
                        <td>SELECT REFEREES</td>
                        <td>
                            <select name="refid" required>
                                <option>CHOOSE REFEREES</option>
                                <?php 
                                include "config.php";
                                $query = mysqli_query($con,"SELECT * FROM Referees ORDER BY f_name ASC");
                                while($rw=mysqli_fetch_array($query))
                                {
                                    ?>
                                <option value="<?php echo $rw['ref_id']; ?>"><?php echo $rw['f_name']; ?></option>

                                    <?php
                                }
                                ?>

                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>SELECT ADVERSARIES</td>
                        <td>
                            <select name="adva" required>
                                <option>CHOOSE REFEREES</option>
                                <?php 
                                include "config.php";
                                $query = mysqli_query($con,"SELECT * FROM Adversaries ORDER BY ad_id");
                                while($rw=mysqli_fetch_array($query))
                                {
                                    ?>
                                <option value="<?php echo $rw['ad_id']; ?>"><?php echo $rw['name']; ?></option>

                                    <?php
                                }
                                ?>

                            </select>
                        </td>
                        </tr>
                         <tr>
                        <td>DATE</td>
                        <td><input type="date" name="date" placeholder="AGE" required></td>
                        </tr>
                         <tr>
                        <td>Play Ground</td>
                        <td><input type="text" name="play" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><button type="submit" name="samatc">SAVE MATCHES</button></center></td>
                        </tr>
                    </table>
                </form>
                
                <center>
            </div>
        </div>
        <div id="footer"></div>

    </div>
  </body>
</html>