<?php
if(isset($_POST['submit'])){
    $to = "info@shahindustry.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $contact = $_POST['contact'];
    $subject = $_POST['subject'];
    //$subject2 = $_POST['subject'];
    $message = $first_name . "\n\n " . $from  ."\n\n".$contact."\n\n".$subject."\n\n". $_POST['message'];
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2);
    }
?>
<html>
  <head>
    <title></title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="color/default.css" rel="stylesheet" media="screen">
    <style>
      body{
        background-color:white;
      }
      h2{
        color:#B7D83D;
      }
      .tab{
        margin-left:2%;
        width:100%;
        border:0px solid black;
        border-collapse:collapse;
      }
      td,th{
        padding:15px;
        text-align:left;
      }
      .tab th{
        background-color:black;
        color:white;
      }
      .tab tr:nth-child(even){
        background-color:#eee;
      }

      .tab tr:nth-child(odd){
        background-color:#fff;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div style="height:100%;" class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

        <div class="row">
          <div style="height:20%;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Your Response has been recorded Successfully!!</h2>
          </div>
        </div>
        <div class="row">
          <div style="height:50%;" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <table class="tab">
              <tr>
              <th>Category</th>
              <th>Response</th>
              </tr>
              <tr>
                <td>Your Name:</td>
                <td><?php echo $first_name." ".$last_name ?></td>
              </tr>

              <tr>
                <td>Email:</td>
                <td><?php echo $from ?></td>
              </tr>

              <tr>
                <td>Subject:</td>
                <td><?php echo $subject ?></td>
              </tr>

              <tr>
                <td>Message</td>
                <td><?php echo $_POST['message'] ?></td>
              </tr>
            </table>
          </div>
          <div style="height:50%;" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <img style="width:100%;height:100%" src="img/Logo_gold.png" class="logoGold"/>
          </div>
        </div>


      </div>
      </div>
  </body>
</html>



