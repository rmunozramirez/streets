<div id="page-wrapper" class="gray-bg" style="min-height: 750px;">
    <!-- Page wrapper -->
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input placeholder="Search for something..." class="form-control" name="top-search" id="top-search" type="text">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="nav-item dropdown">
                    <a class="dropdown-item" href="http://street-box.test/logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
        @yield('content')

</div>