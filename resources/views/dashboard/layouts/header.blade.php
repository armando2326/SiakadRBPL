<style>
    #header {
        height: 70px;
        transition: all 0.5s;
        z-index: 997;
        transition: all 0.5s;
        background: #fff;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        margin-top: -25px;
      }
      #header .logo h1 {
        font-size: 28px;
        margin: 0;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #384046;
      }
      #header .logo h1 a, #header .logo h1 a:hover {
        color: #384046;
        text-decoration: none;
      }
      #header .logo img {
        max-height: 40px;
      }

      /*--------------------------------------------------------------
      # Header Social Links
      --------------------------------------------------------------*/
      .header-social-links {
        margin: 0 0 0 30px;
      }
      .header-social-links a {
        color: #9ba6af;
        padding-left: 8px;
        display: inline-block;
        line-height: 0px;
        transition: 0.3s;
      }
      .header-social-links a i {
        line-height: 0;
      }
      .header-social-links a:hover {
        color: #3498db;
      }
      @media (max-width: 768px) {
        .header-social-links {
          margin: 0 15px 0 0;
        }
      }

      /*--------------------------------------------------------------
      # Navigation Menu
      --------------------------------------------------------------*/
      /**
      * Desktop Navigation
      */
      .navbar {
        padding: 0;
      }
      .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
      }
      .navbar li {
        position: relative;
      }
      .navbar a, .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-family: "Poppins", sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #4f5a62;
        white-space: nowrap;
        transition: 0.3s;
      }
      .navbar a i, .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
      }
      .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
        color: #3498db;
      }
      .navbar .dropdown ul {
        display: block;
        position: absolute;
        left: 14px;
        top: calc(100% + 30px);
        margin: 0;
        padding: 10px 0;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
      }
      .navbar .dropdown ul li {
        min-width: 200px;
      }
      .navbar .dropdown ul a {
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 400;
        color: #21262a;
      }
      .navbar .dropdown ul a i {
        font-size: 12px;
      }
      .navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
        color: #3498db;
      }
      .navbar .dropdown:hover > ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
      }
      .navbar .dropdown .dropdown ul {
        top: 0;
        left: calc(100% - 30px);
        visibility: hidden;
      }
      .navbar .dropdown .dropdown:hover > ul {
        opacity: 1;
        top: 0;
        left: 100%;
        visibility: visible;
      }
      @media (max-width: 1366px) {
        .navbar .dropdown .dropdown ul {
          left: -90%;
        }
        .navbar .dropdown .dropdown:hover > ul {
          left: -100%;
        }
      }

      /**
      * Mobile Navigation
      */
      .mobile-nav-toggle {
        color: #384046;
        font-size: 28px;
        cursor: pointer;
        display: none;
        line-height: 0;
        transition: 0.5s;
      }
      .mobile-nav-toggle.bi-x {
        color: #fff;
      }

      @media (max-width: 991px) {
        .mobile-nav-toggle {
          display: block;
        }

        .navbar ul {
          display: none;
        }
      }
      .navbar-mobile {
        position: fixed;
        overflow: hidden;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: rgba(33, 38, 42, 0.9);
        transition: 0.3s;
        z-index: 999;
      }
      .navbar-mobile .mobile-nav-toggle {
        position: absolute;
        top: 15px;
        right: 15px;
      }
      .navbar-mobile ul {
        display: block;
        position: absolute;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        padding: 10px 0;
        background-color: #fff;
        overflow-y: auto;
        transition: 0.3s;
      }
      .navbar-mobile a, .navbar-mobile a:focus {
        padding: 10px 20px;
        font-size: 15px;
        color: #384046;
      }
      .navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
        color: #3498db;
      }
      .navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
        margin: 15px;
      }
      .navbar-mobile .dropdown ul {
        position: static;
        display: none;
        margin: 10px 20px;
        padding: 10px 0;
        z-index: 99;
        opacity: 1;
        visibility: visible;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      }
      .navbar-mobile .dropdown ul li {
        min-width: 200px;
      }
      .navbar-mobile .dropdown ul a {
        padding: 10px 20px;
      }
      .navbar-mobile .dropdown ul a i {
        font-size: 12px;
      }
      .navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
        color: #3498db;
      }
      .navbar-mobile .dropdown > .dropdown-active {
        display: block;
      }

    </style>

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

          <div class="logo me-auto">
            <h1><a href='/'>SIAKAD</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/biodata">{{auth()->user()->name}}</a></li>
              <li><form action="/logout" method="post">
                @csrf<button style="
                background:none;
                border:none;
                margin:0;
                padding: 10px 0 10px 30px;;
                cursor: pointer;
                font-family: 'Poppins', sans-serif;"
                class="nav-link scrollto" action="/logout">Sign Out</button></form></li>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </header>
