<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
         <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('assets/index.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    
        <script src="https://kit.fontawesome.com/7bdd8c7561.js" crossorigin="anonymous"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
      
        <!-- Styles -->
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;

            }
            .navbar  .nav-item .nav-link{
                color: white;
                font-size: 20px;
                margin-right: 20px;
            }
            .navbar #logo{
              height: 150px;
            }
        </style>
    </head>
    <body class="antialiased">
      <input type="checkbox" id="sidebar-toggle">
      <div class="sidebar">
          <div class="sidebar-header">
              <h3 class="brand">
  
                  <span>JBJRL</span>
              </h3> 
              <label for="sidebar-toggle" class="ti-menu-alt"></label>
          </div>
          
          <div class="sidebar-menu">
              <ul>
         
                <li>
                    <a href="profile">
                        <span class="fa-solid fa-user" style="font-size: 15px;"></span>
                        <span>Profile</span>
                    </a>
                </li>
                  <li>
                      <a href="dashboard">
                          <span class="ti-briefcase" style="font-size: 15px;"></span>
                          <span>Dashboard</span>
                      </a>
                  </li>
                   <li>
                      <a href="sales">
                          
                          <i class="fa-solid fa-cart-shopping"></i>
                          <span>Sales History</span>
                      </a>
                  </li>
                  <li>
                      <a href="stocks">
                          <span class="ti-clipboard" style="font-size: 15px;"></span>
                          <span>Stocks</span>
                      </a>
                  </li>
                  <li>
                      <a href="stockhistory">
                          <span class="ti-clipboard" style="font-size: 15px;"></span>
                          <span>Stocks History</span>
                      </a>
                  </li>
                  <li>
                      <a href="useraccounts">
                          <span class="ti-id-badge" style="font-size: 15px;"></span>
                          <span>User Accounts</span>
                      </a>
  
                  </li>
                  <li>
                    <a href="adminaccounts">
                        <span class="ti-id-badge" style="font-size: 15px;"></span>
                        <span>Admin Accounts</span>
                    </a>

                </li>
                  <li>
                      <a href="../adminlogout">
                          <i class="fa-solid fa-right-from-bracket" style="font-size: 15px;"></i>
                          <span>Log Out</span>
                      </a>
  
                  </li>
              </ul> 
          </div>
      </div>
      
    </body>
</html>
