<!DOCTYPE html>
<html>
<head>
    <meta charset= "utf-8">
    <title>View Sales Report</title>
    <link href= "../styles/style.css" rel="stylesheet"/>
    <script src="../script/apply.js"></script>
</head>
<body>


    <div class= "main" id= "main">
        <form action="DisplaySaleRecord.php" id="enquireForm" method="post">
        <link href= "styles/style.css" type="text/css" rel="stylesheet" media="screen"/>
          <div class="imgcontainer">
            <img src="../styles/images/Avatar.png" alt="Avatar" class="avatar">
          </div>


          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input id="uname"  type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input id="psw" type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
    </div>
    </body>
</html>