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
    <section id="content">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row wrapper border-bottom white-bg">
                <div class="inside">
                    <h2>{{ ucfirst(trans($page_name)) }}
                        @if($page_name !== 'dashboard')
                        <span class="mt-3 small pull-right">Total {{$page_name}}: {{count($all_)}}</span>
                        @endif 
                    </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('index')}}"> Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fas fa-pencil-alt"></i> {{ ucfirst(trans($page_name)) }}
                        </li>
                        @if($page_name !== 'trashed' || $page_name !== 'dashboard')
                        <span class="pull-right"><i class="fas fa-pencil-alt"></i>
                                <i class="fa fa-plus"></i> <a href="{{route($page_name . '.create')}}">Create {{ ucfirst(trans($page_name)) }}</a>
                                <i class="fa fa-trash"></i> <a href="{{route($page_name . '.trashed')}}">Trashed {{ ucfirst(trans($page_name)) }}</a>
                        </span>
                        @endif
                    </ol>
                </div>             
            </div>
        </div>                                 
            @yield('content')
    </section>
</div>