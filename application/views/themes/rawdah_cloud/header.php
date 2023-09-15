
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
                            <?php
                            foreach ($main_menus as $menu_key => $menu_value) {
                            
                                $submenus = false;
                                $cls_menu_dropdown = "";
                                $menu_selected = "";             
                                
                                if ($menu_value['page_slug'] == $active_menu) {
                                    $menu_selected = "active";
                                }
                                if (!empty($menu_value['submenus'])) {
                                    $submenus = true;
                                    $cls_menu_dropdown = "dropdown";
                                }
                                ?>

                                <li class="nav-item <?php echo $menu_selected . " " . $cls_menu_dropdown; ?>" >
                                    <?php
                                    if (!$submenus) {
                                        $top_new_tab = '';
                                        $url = '#';
                                        if ($menu_value['open_new_tab']) {
                                            $top_new_tab = "target='_blank'";
                                        }
                                        if ($menu_value['ext_url']) {
                                            $url = $menu_value['ext_url_link'];
                                        } else {
                                            $url = site_url($menu_value['page_url']);
                                        }
                                        ?>

                                        <a class="nav-link" href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $menu_value['menu']; ?></a>

                                        <?php
                                    } else {
                                        $child_new_tab = '';
                                        $url = '#';
                                        ?>
                                        <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu_value['menu']; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu"id="dropdownContent">
                                            <?php
                                            foreach ($menu_value['submenus'] as $submenu_key => $submenu_value) {
                                                if ($submenu_value['open_new_tab']) {
                                                    $child_new_tab = "target='_blank'";
                                                }
                                                if ($submenu_value['ext_url']) {
                                                    $url = $submenu_value['ext_url_link'];
                                                } else {
                                                    $url = site_url($submenu_value['page_url']);
                                                }
                                                ?>
                                                <li><a class="dropdown-item" href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a></li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                        
         
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