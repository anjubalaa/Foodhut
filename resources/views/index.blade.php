<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel|</title>
</head>
<body>
    <!-- Image and text -->

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            
                <a class="navbar-brand" href="#">
                  <img height="55px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwUyw78mskpLkXtntRdRMfP2enIc0dMI4H2CsqP7ujENxtTYE_koZcemCl3C-dos5jdaM&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-top">
                  <br>
                  Aamie Hut
                </a>
              
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/gallery">OUR RECIPIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">NEW CUSTOMER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT US</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        
     
  </nav>

  @yield('index')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 </body>
 </html>