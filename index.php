<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Weather Finder</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
  </head>

  <body style="background:#34acdf;">

    <div class="container">
      <div class="header clearfix">
        <nav style=" margin-top:20px;padding:5px;">
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php" style="color:black;">Home</a></li>
            <li role="presentation"><a href="about.php" style="color:black;">About</a></li>
            <li role="presentation"><a href="http://openweathermap.org/help/city_list.txt" style="color:black;">Check City List</a></li>
          </ul>
          
        </nav>
      
        <center><h1 class="text-muted" style="font-family:cursive;color:white;">Weather Finder</h1></center><br><br>
         
      </div>
       
      <div class="jumbotron">
        <h3>Search Your City</h3>
        <form class="form-horizontal" method="GET" action="get.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">City Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" autocomplete="off" required="" name="q" placeholder="Type Your City Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"></i>Country Name</label>
    <div class="col-sm-10">
  
      <input type="text" class="form-control" autocomplete="off" required="" name="country" placeholder="Type Your Country Name">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">View Weather</button>
    </div>
  </div>
</form>
      </div>

   

      <footer class="footer" style="color:white;">
        <br><br><center><p>Weather Finder &copy; 2018 Created by Shahzad.</p></center>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
