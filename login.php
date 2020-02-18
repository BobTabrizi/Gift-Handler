<html>
<head>
    

    <style>


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 260px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin-top: 200px;
  margin-left: auto;
margin-right: auto;
  border: 5px solid #888;
  width: 80%;
}


    </style>

        <title>Gift Handler</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel ="stylesheet" type = "text/css"
      href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
              
              
</head>
<body>
    
    <div class="container">
    <div class="login-box"></div>
    <div class = "row">
    <div class = "col-md-6 login-main">
        <h2>Gift Organizer</h2>
        <form action = "validation.php" method ="post">
            <div class = "form-group">
                <label>Username</label>
                <input type = "text" name = "user" class = "form-control" required>
                
        </div>
            
            <div class = "form-group">
                <label>Password</label>
                <input type = "password" name = "password" class = "form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login</button>
        </form>
            

           <button onclick="document.getElementById('id01').style.display='block'"  class="btn btn-primary">Register</button>
            <div id="id01" class="modal">
            <form action = "registration.php" method = "post">
             <form class="modal-content animate" action="/action_page.php" method="post">

            <div class = "imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
      <div class="container" style = "background-color:#f1f1f1">


      <div class ="form-group">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" class = "form-control" required>
</div>
      <div class ="form-group">
      <label for="psw"><b>Password</b></label>

      <input type="password" placeholder="Enter Password" name="password" class = "form-control" required>
          </div>

      <button type="submit" class="btn btn-primary">Sign Up</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
                 </div>
        </form>
            </form>
        </div>

    </div>
        </div>
    </div>

    </body>
</html>
