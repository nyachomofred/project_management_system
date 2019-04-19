
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script  src="bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
       <div class="container">
          <div class="row" style="height:200px;"></div>
          <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                  <div class="panel panel-success">
                      <div class="panel-heading"><center><h3>Login</h3></center></div>
                      <div class="panel-body">
                          <form action="login.php" method="POST">
                              <div class="form-group">
                                  <input type="text" class="form-control" name="username" placeholder="Enter username"><br>
                                  <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
                                  <input type="submit" name="submit" value="Login" class="btn btn-success" style="width:330px;">
                              </div>
                          </form>
                      </div>
                      <div class="panel-footer"></div>
                  </div>
              </div>
              <div class="col-sm-4"></div>
          </div>
       </div>
    </body>
</html>