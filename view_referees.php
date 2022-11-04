<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet"/>
    <title></title>
    <style>
      
        .filter
        {
            
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
         
        }
        table
        {
            
            z-index: 2;
            border-collapse: collapse;
            border-spacing: 0;
            overflow: hidden;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            width: 50%;
            outline: 0;
            text-align: center;
            border-radius:12px 12px 0 0;
            box-shadow: 0 12px 15x rgba(32,32,32,.3);
            background-color: #fefefefe;
            position: absolute;
        }
        th,td{
            padding: 15px 18px;
           
        }
        th{
            background-color: blueviolet;
            color: #fefefefe;
            text-transform: uppercase;
        }
        h1{
            padding: 10px;

            color: #fefefefe;
            font-size: 30px;
            text-decoration: dashed;
            text-transform: uppercase;
        }
        button{
            padding: 8px 20px;
            border: none;
            border-radius: 10px;
            color: #fefefefe;
            cursor: pointer;
        }
       .edit{
           background-color: blue;
       }
       .del{
           background-color: red;
       }
       .edit:hover{
           background-color: rgb(71, 3, 3);
       }
       .del:hover{
           background-color: rgb(187, 121, 121);
       }
        tr:nth-child(odd)
        {
            background-color: #eeeeee;
        }


    </style>
  </head>
  <body>
    <div id="layout">
        <div id="banner"></div>
        <div id="manu"><?php include "includes/navbar.php" ?></div>
        <div id="content">
            <div class="filter">
              
            </div>
            <center> <h1>Manage Advasaries</h1> </center>

            <table>
                <tr>
                    <th>#</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Age</th>
                    <th>SEx</th>
                    <th>Phone</th>
                    <th>Action</th>
                    <th>delete</th>
                </tr>
                <?php
                 include('config.php');
                 $query=mysqli_query($con,"SELECT * FROM Referees ORDER BY ref_id ASC");
                 foreach($query as $row)
                 {
                     $id = $row['ref_id'];
                     $fname = $row['f_name'];
                     $lname = $row['l_name'];
                     $age = $row['age'];
                     $sex = $row['sex'];
                     $phone = $row['telephone'];
                    


                     ?>

                
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $fname ?></td>
                    <td><?php echo $lname ?></td>
                    <td><?php echo $age ?></td>
                    <td><?php echo $sex ?></td>
                    <td><?php echo $phone ?></td>
                    <td>
                        <form action="update_referees.php" method="POST">
                        <input type="hidden" name="edit" value="<?php echo $id; ?>">
                        <button type="submit" name="editbtn" class="edit">EDIT</button>
                        </form> 
                    </td>
                    <td>
                        <form action="code.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="delref" class="del">DELETE</button>
                        </form>
                    </td>
                     
                </tr>
                <?php
                 }
                ?>
                
                
            </table>
        </div>
        <div id="footer"></div>

    </div>
  </body>
</html>