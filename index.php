<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet"/>
    <title></title>
    <style>
      .box{
         
          color: white;
          padding: 30px;
      }
      table{
         display: inline-block;
         padding: 60px 60px 50px;
         background-color: blueviolet;
         border-spacing: 0px;
         margin: 20px;
         top: 20%;
         right: 50%;
         border-radius: 30px;
         box-shadow: 0 13px 14px rgba(32,32,32);
      }
      th{
        text-decoration: dotted;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 20px;
        color:black;
      }
      </style>
  </head>
  <body>
    <div id="layout">
        <div id="banner"><?php include "includes/header.php" ?></div>
        <div id="manu"><?php include "includes/navbar.php" ?></div>
        <div id="content">
          <div class="box">
            <table>
              <tr>
                <th>TOTAL USER</th>
              </tr>
              <tr>
                <?php 
                
                include "config.php";
                $query = mysqli_query($con,"SELECT mt_id FROM Matches ORDER BY mt_id");
                $row=mysqli_num_rows($query);
                 echo "<td> <h3>".$row."</h3></td>";
                ?>
                
              </tr>
            </table>
            <table>
              <tr>
                <th>Total Matches</th>
              </tr>
              <tr>
                <td>20</td>
              </tr>
            </table>
            <table>
              <tr>
                <th>TOTAL Adversaries</th>
              </tr>
              <tr>
                <td>20</td>
              </tr>
            </table>
            <table>
              <tr>
                <th>Number of Referees</th>
              </tr>
              <tr>
                <td>20</td>
              </tr>
            </table>
          </div>
        </div>
        <div id="footer"></div>

    </div>
  </body>
</html>