

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i></li>
          <li class=" nav-item"><a href="<?php echo base_url('index.php/dash/');?>"><i class="fa fa-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="fa fa-signal"></i><span class="menu-title" data-i18n="Icons">M-Pesa Agents</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url('index.php/agents/');?>" data-i18n="Feather">Agents</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url('index.php/agents/buycreate/');?>" data-i18n="Font Awesome">Buy Float</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url('agents/moneyback.php/');?>" data-i18n="Simple Line Icons">Money Back</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url('index.php/bank/');?>"><i class="fa fa-university"></i><span class="menu-title" data-i18n="contacts">Bank</span></a></li>
          <li class=" nav-item"><a href="<?php echo base_url('index.php/contacts/');?>"><i class="fa fa-phone-square"></i><span class="menu-title" data-i18n="contacts">Contacts</span></a></li>
          <li class=" nav-item"><a href="<?php echo base_url('index.php/users/');?>"><i class="fa fa-users"></i><span class="menu-title" data-i18n="contacts">Users</span></a></li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
