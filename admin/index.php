
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Welcome Admin</title>
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/user.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="../img/accountlogo.jpg">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="#">
              <span class="nav-item"><span id="nav_icon" class="material-symbols-outlined">account_circle</span>Create User</span>
            </a></li>
            <li><a href="#">
              <span class="nav-item"><span id="nav_icon" class="material-symbols-outlined">chat</span>Message</span>
            </a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="nav-item"><span id="nav_icon" class="material-symbols-outlined">query_stats</span>Login Report</span>
                </a>
                <ul class="dropdown-menu">
                    <li> <a href="daily.html"><span id="l_icon" class="material-symbols-outlined">today</span>Daily Attendance</a></li>
                  <li><a href="#"><span id="l_icon"class="material-symbols-outlined">calendar_month</span>Monthly Attendance</a></li>
                </ul>
              </li>

            <li><a href="#">
              <span class="nav-item"><span id="nav_icon" class="material-symbols-outlined">database</span>Employee Data</span>
            </a></li>
            <li><a href="#">
              <span class="nav-item"><span id="nav_icon" class="material-symbols-outlined">
                settings
                </span>Setting</span>
            </a></li>
    
            <li><a href="#" class="logout">
              <span class="nav-item"><span id="nav_icon" class="material-symbols-outlined">logout</span>Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <div class="page-content">
          <div class="form-v5-content">
            <form class="form-detail" action="#" method="post">
              <h2>Register User Details</h2>
              <div class="form-row">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" id="fname" class="input-text" placeholder="Full Name" required>
                <!-- <i class="fas fa-user"></i> -->
              </div>
      
              <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="u_name" id="username" class="input-text" placeholder="Username" required>
              </div>
      
              <div class="form-row">
                <label for="u_email">User Email</label>
                <input type="text" name="u_email" id="u_email" class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
              </div>
      
              <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="pass" id="pass" class="input-text" placeholder="Password" required>
              </div>
      
              <div class="form-row">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="input-text" placeholder="Phone" required>
              </div>

              <!-- Add radio buttons here -->
              <center><div class="radio-inputs">
                <label class="radio">
                  <input type="radio" name="type" checked="">
                  <span class="name">Employee</span>
                </label>
                <label class="radio">
                  <input type="radio" name="type">
                  <span class="name">Admin</span>
                </label>
                </div></center>
      
              <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Register">
              </div>
            </form>


            
          </div>
        </div>
        
      </div>

      
     
    </body>
    </html>
