<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="/">Lucky Ball </a>
			
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">
                            
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><p>Admin Balance: <b><?php echo $adminbal->balance; ?></b></p></li>
                                    <li><a href="/Admin/security">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/Admin/logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
