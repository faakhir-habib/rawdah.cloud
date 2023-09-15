
<nav class="navbar navbar-expand-lg py-3">
    <div class="container">
      <a class="navbar-brand" href="<?=base_url('/')?>"><img src="<?php echo $base_assets_url; ?>img/main-logo.svg" alt=""></a>

      <label class="hamburger navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <input type="checkbox">
        <svg viewBox="0 0 32 32">
          <path class="line line-top-bottom"
            d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
          </path>
          <path class="line" d="M7 16 27 16"></path>
        </svg>
      </label>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav gap-3 mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=base_url('/')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('teachers')?>">Teachers</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Curriculum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Classes & Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Parents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support Us</a>
          </li>
         
          <li class="nav-item dropdown" id="dropdownBtn">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Other
            </a>
            <ul class="dropdown-menu" id="dropdownContent">
              <li><a class="dropdown-item" href="#">Registration</a></li>
              <li><a class="dropdown-item" href="#">FAQs</a></li>
              <li><a class="dropdown-item" href="#">Contact Us</a></li>
            </ul>
          </li>


        </ul>
        <div class="d-flex align-items-center gap-2">
          <a class="btn btn-outline-primary" type="submit" href="<?php echo base_url(); ?>site/userlogin">
            <img class="btn-inner-img"
              src="<?php echo $base_assets_url; ?>img/nav-btn-logo.svg" alt=""></a>
              <a href="<?php echo base_url(); ?>site/userlogin" class="btn btn-outline-primary" type="submit">Login</a>

        </div>

      </div>
    </div>
  </nav>