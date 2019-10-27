 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="app-icon" >
                          
                          <p id="clock" style="font-size: 25px;font-weight: bold;color: white;padding-left: 8px;padding-right: 8px;border-radius: 7px"></p >
                        </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About</a>
            </li>
                 <li class="nav-item">
              <a class="nav-link" href="index.php">News</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact us</a>
            </li>
  
  
          </ul>
        </div>
      </div>
    </nav>
    <script type="text/javascript">
      (function () {
            var clockElement = document.getElementById( "clock" );
            function updateClock ( clock ) {
            clock.innerHTML = new Date().toLocaleTimeString();
            }
            setInterval(function () {
             updateClock( clockElement );
            }, 1000);
            }());

    </script>