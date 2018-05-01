<div id="page-wrapper" class="gray-bg" style="min-height: 750px;">
    <!-- Page wrapper -->
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
                            <a href="{{route('dashboard')}}"> Dashboard</a>
                        </li>
                        @if($page_name !== 'dashboard')
                            @if($index === 'yes')
                                <li class="active">
                                    <a href="{{route($page_name . '.index')}}">
                                        {{ ucfirst(trans($page_name)) }}
                                    </a>
                                </li>
                            @elseif ($index === 'trash')
                                <li>
                                    <a href="{{route($page_name . '.index')}}">
                                        {{ ucfirst(trans($page_name)) }}
                                    </a>
                                </li>
                                <li class="active">
                                    {{ ucfirst(trans($index)) }}
                                </li>

                            @elseif ($index === 'create')
                                <li>
                                    <a href="{{route($page_name . '.index')}}">
                                        {{ ucfirst(trans($page_name)) }}
                                    </a>
                                </li>
                                <li class="active">
                                    {{ ucfirst(trans($index)) }}
                                </li>

                            @elseif ($index === 'show')
                                <li>
                                    <a href="{{route($page_name . '.index')}}">
                                        {{ ucfirst(trans($page_name)) }}
                                    </a>
                                </li>
                                <li class="active">
                                    {{ $element->title }}
                                </li>

                            @else ($index === 'edit')
                                <li>
                                    <a href="{{route($page_name . '.index')}}">
                                        {{ ucfirst(trans($page_name)) }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route($page_name . '.show', $element->slug)}}">
                                        {{ $element->title }}
                                    </a>
                                </li>
                                <li class="active">
                                    {{ ucfirst(trans($index)) }}
                                </li>
                            @endif
                            <span class="pull-right">
                                <i class="fas fa-pencil-alt"></i>
                                <i class="fa fa-plus"></i> <a href="{{route($page_name . '.create')}}">Create {{ ucfirst(trans($page_name)) }}</a>
                                <i class="fa fa-trash"></i> <a href="{{route($page_name . '.trashed')}}">Trashed {{ ucfirst(trans($page_name)) }}</a>
                            </span>
                        @endif
                    </ol>    
                </div>             
            </div>
        </div>   
        @if($page_name === 'dashboard')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row wrapper border-bottom white-bg">
                    <div class="inside">                                         
                            @include ('dashboard.partials.resume')
                    </div>             
                </div>
            </div>    
        @endif                 
            @yield('content')
    </section>
</div>