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
            padding: 80px 60px 30px 30px;
            z-index: 2;
            background-color: rgb(14, 51, 51);
            width: 400px;
            color: white;
            border-radius: 30px 30px 0 0;
            box-shadow: 0 12px 12px;
            
            
            
        }
        table{
           padding: 40px 40px;
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
                   <h1>New Adversary</h1>
                    <table>
                        
                        <td>Adversary Name</td>
                        <td><input type="text" name="nadv" placeholder="New Adversariy" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><button type="submit" name="sadv">SAVE ADVERSARY</button></center></td>
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