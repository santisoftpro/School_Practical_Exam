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
            width: 400px;
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

    </style>
  </head>
  <body>
    <div id="layout">
        <div id="banner"></div>
        <div id="manu"><?php include "includes/navbar.php" ?></div>
        <div id="content">
            <div class="form">
              
                    
               <center> <form action="code.php" method="POST">
                     <?php
                
                 include('config.php');
                  $no = $_POST['edit'];
                 $query=mysqli_query($con,"SELECT * FROM Referees WHERE ref_id='$no'");
                 foreach ($query as $row) {
                     $id = $row['ref_id'];
                     $fname = $row['f_name'];
                     $lname = $row['l_name'];
                     $age = $row['age'];
                     $sex = $row['sex'];
                     $phone = $row['telephone'];
                     ?>
                     
                   <h1>Update Adversaries</h1>
                    <table>
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <td>FirstName</td>
                        
                        <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
                        </tr>
                         <tr>
                        <td>LastName</td>
                        
                        <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
                        </tr>
                         <tr>
                        <td>Age</td>
                       
                        <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
                        </tr>
                         <tr>
                        <td>Sex</td>
                        
                        <td><input type="text" name="sex" value="<?php echo $sex; ?>"></td>
                        </tr>
                         <tr>
                        <td>phone</td>
                       
                        <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><button type="submit" name="uprefere">UPDATE REFEREES</button></center></td>
                        </tr>
                    </table>
                       <?php
                    }
                ?>
                </form>
             
                <center>
            </div>
        </div>
        <div id="footer"></div>

    </div>
  </body>
</html>