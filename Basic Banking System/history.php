<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>T$F Bank - Transaction History</title>
     <style>
          @import url('https://fonts.googleapis.com/css2?family=BioRhyme:wght@700;800&family=Grandstander:wght@800&display=swap');
          .navigation .navbar-brand{
            font-size: 2.5rem;
            font-weight: bolder;
            padding-left: 16px;
            font-family: 'Grandstander', cursive; /*'Verdana', fantasy;*/
            letter-spacing: 0.5px;
            word-spacing: 1px;
            padding-top: 0px;
            padding-bottom: 0px; 

          }
        .nav-link{
            font-weight: bold;
             font-size: 20px;  
          }
     </style>
</head>

<body>
    
     
    <!-- navigation bar -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning py-3 navigation ">
        <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/" target="_blank">
    
          <img src="tsf_logo.png" alt="logo" height="64px" width="64px" style="background-color:rgb(255, 136, 0); border-radius: 17%; box-shadow:rgb(0, 0, 0); border-style: solid; border-color:rgb(146, 12, 12);"> 
          <a class="navbar-brand" href="#" style="margin-bottom: -5px; text-indent: -18px;">T$F Bank</a>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-4">
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item ml-4">
                  <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item ml-4">
                  <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
              </ul>
            </div>
          </nav>
     </header>

     <div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sl No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                
            </tr>
        </thead>
        <tbody>

        <?php

            include 'connectdb.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color:black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
           
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>