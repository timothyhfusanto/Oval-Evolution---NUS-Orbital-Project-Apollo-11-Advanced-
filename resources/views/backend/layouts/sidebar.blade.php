<body class="fixed-left" style="font-family: Roboto; color:black">
    <!-- Begin page -->
    <div id="wrapper">



        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu" style="background-color: #EAEFF2">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left" style="background-color: white; height:80px">
                <div class="text-center">
                    <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
                    <a href="/staff/food" class="logo"><img src="{{asset('template/assets/images/ovalevolution.png')}}" height="55" alt="logo" style="margin-left: -10px; margin-top: 9px"></a>
                </div>
            </div>
           
            <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title" style="color:black; font-size:20px; font-weight:bold">Overview</li>
                        <li>
                            <a href="/staff/food" class="waves-effect waves-light {{ Request::is('staff/food', 'staff/drink')
                                ? 'active' : '' }}">
                                <span style="color:black; font-size:17px;">
                                    <i class="mdi mdi-food"></i> Menu
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/staff/order/all-order" class="waves-effect waves-light {{ Request::is('staff/order/on-going', 'staff/order/all-order', 
                                'staff/order/completed') ? 'active' : '' }}">
                                <span style="color:black; font-size:17px;">
                                    <i class="mdi mdi-shopping"></i> Order 
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->