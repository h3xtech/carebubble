<nav class="navbar navbar-static-top ">
    <a href="index.html#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-tasks"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Orders -->
            <!-- Messages -->
            <li class="dropdown messages-menu">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="pe-7s-mail"></i>
                    <span class="label label-success">4</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="header"><i class="fa fa-envelope-o"></i>
                    4 Messages</li>
                    <li>
                        <ul class="menu">
                            <li><!-- start message -->
                               <a href="index.html#" class="border-gray">
                                    <div class="pull-left">
                                    <img src="/assets/dist/img/avatar2.png" class="img-thumbnail" alt="User Image"></div>
                                    <h4>Alrazy</h4>
                                    <p>Lorem Ipsum is simply dummy text of...
                                    </p>
                                    <span class="label label-success pull-right">11.00am</span>
                                </a>

                            </li>
                            <li>
                                <a href="index.html#" class="border-gray">
                                    <div class="pull-left">
                                    <img src="/assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                    <h4>Tanjil</h4>
                                    <p>Lorem Ipsum is simply dummy text of...
                                    </p>
                                    <span class="label label-success pull-right"> 12.00am</span>
                                </a>

                            </li>
                            <li>
                                <a href="index.html#" class="border-gray">
                                    <div class="pull-left">
                                    <img src="/assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                    <h4>Jahir</h4>
                                    <p>Lorem Ipsum is simply dummy text of...
                                    </p>
                                    <span class="label label-success pull-right"> 10.00am</span>
                                </a>

                            </li>
                            <li>
                               <a href="index.html#" class="border-gray">
                                    <div class="pull-left">
                                    <img src="/assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                    <h4>Shawon</h4>
                                    <p>Lorem Ipsum is simply dummy text of...
                                    </p>
                                    <span class="label label-success pull-right"> 09.00am</span>
                                </a>

                            </li>
                            <li>
                                <a href="index.html#" class="border-gray">
                                    <div class="pull-left">
                                    <img src="/assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                    <h4>Shipon</h4>
                                    <p>Lorem Ipsum is simply dummy text of...
                                    </p>
                                    <span class="label label-success pull-right"> 03.00pm</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="index.html#">See all messages <i class=" fa fa-arrow-right"></i></a>
                    </li>
                </ul>
            </li>
            <!-- Notifications -->
            <li class="dropdown notifications-menu">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="pe-7s-bell"></i>
                    <span class="label label-warning">8</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header"><i class="fa fa-bell"></i> 8 Notifications</li>
                    <li>
                        <ul class="menu">
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-inbox"></i> Inbox  <span class=" label-success label label-default pull-right">9</span></a>
                            </li>
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> New Order <span class=" label-success label label-default pull-right">3</span> </a>
                            </li>
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-money"></i> Payment Failed  <span class="label-success label label-default pull-right">6</span> </a>
                            </li>
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> Order Confirmation <span class="label-success label label-default pull-right">7</span> </a>
                            </li>
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> Update system status <span class=" label-success label label-default pull-right">11</span> </a>
                            </li>
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> client update <span class="label-success label label-default pull-right">12</span> </a>
                            </li>
                            <li>
                            <a href="index.html#" class="border-gray"><i class="fa fa-cart-plus"></i> shipment cancel
                            <span class="label-success label label-default pull-right">2</span> </a>
                            </li>
                        </ul>
                    </li>
                   <li class="footer">
                   <a href="index.html#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                    </li>
                </ul>
            </li>
            <!-- user -->
            <li class="dropdown dropdown-user admin-user">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                <div class="user-image">
                @guest

                @else
                  <img src="{{Auth::user()->avatar}}" class="img-circle" height="40" width="40" alt="User Image">
                @endguest
                </div>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="profile.html"><i class="fa fa-users"></i> User Profile</a></li>
                    <li><a href="/web/user/settings"><i class="fa fa-gear"></i> Settings</a></li>
                    <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
