<!doctype html>
<html lang="en">
    <head>
        <title>Sparks Foundation</title>
        <link rel="shortcut icon" type="image" href="logo.png">
        <link rel="stylesheet" type="text/css" href="sparks.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <?php
        include 'nav.php';
      ?>
      <div id="main">  
      <div class="heading">
            <center>
                <h1> Welcome to Basic Banking System </h1>
            </center>
      </div>
        
      <div class="main">
         <center>
        <div class="thumbnail">
            <img src="users.png" alt="Users" height="350" width="300">
            <div class="button_class">
                <a href="transfer_money.php"> 
                 <button>  VIEW ALL USERS </button>
                </a>
            </div>
        </div>
        <div class="thumbnail">
            <img src="https://lh3.googleusercontent.com/-KNjR36qmpCs/VvOXF6UppNI/AAAAAAAACkU/gjMo05AXIPkF5gQoIyUS4WiKZ92l3khCwCCo/s200-Ic42/rupee%2Blogo.png" alt="Money Transfer" height="350" width="300">
            <div class="button_class">
                <a href="transfer_money.php"> 
                 <button> TRANSFER MONEY </button>
                </a>
            </div>
        </div>
         <div class="thumbnail">
            <img src="https://findicons.com/files/icons/977/rrze/720/data_transfer.png" alt="Transaction History" height="280" width="300">
            <div class="button_class">
                <a href="transactionhistory.php"> 
                 <button> VIEW TRANSFER HISTORY </button>
                </a>
            </div>
        </div>
          </center>
      </div>
        
        <div class="footer">
            <center> Designed and Developed by <b>Samiksha Nand </b>for the project of <b>The Sparks Foundation</b> </center>
        </div>
</div>    
    </body>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
