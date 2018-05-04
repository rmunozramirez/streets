<nav class="navbar-default navbar-static-side" role="navigation">

    <aside>
        <!-- mega menu -->
        <ul class="sky-mega-menu sky-mega-menu-pos-left sky-mega-menu-anim-scale sky-mega-menu-response-to-switcher">
            <li>
                <a href="#" class="text-center py-5">
                    <img height="80" class="img-circle thumbnail-admin"  src="{{URL::to('/images/' . Auth::user()->profile->image) }}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" />
                    <br />
                    {{Auth::user()->name}}
                </a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('profiles.show', Auth::user()->profile->slug)}}">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>  
            <!-- frontend -->
            <li>
                <a href="{{route('landing')}}"><i class="fa fa-home"></i>Home page</a>
            </li>
            <!--/ dashboard -->
              
            <!-- dashboard -->
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <!--/ dashboard -->
            
            <!-- users -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-user"></i>Users</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('users.index')}}"><i class="fa fa-list"></i>All users</a></li>
                    </ul>
                </div>
            </li>
            <!--/ users -->

            <!-- profiles -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-group"></i>Profiles</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('profiles.index')}}"><i class="fa fa-list"></i>All profiles</a></li>
                        <li><a href="{{route('profiles.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ profiles -->

            <!-- switcher -->
            <li class="switcher">
                <a href="#"><i class="fa fa-bars"></i>Menu</a>
            </li>
            <!--/ switcher -->
            
            <!-- posts -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-comment"></i> News</a>
                <div class="grid-container3">
                    <ul>
                        <li>
                            <a href="{{route('posts.index')}}"><i class="fa fa-list"></i>All posts</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="#">Published</a></li>
                                    <li><a href="#">Pending review</a></li>
                                    <li><a href="#">Drafts</a></li>
                                    <li><a href="#">Removed</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{route('posts.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                        <li>
                            <a href="{{route('postcategories.index')}}"><i class="fa fa-gear"></i>Subcategories</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="{{route('postcategories.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                                    <li><a href="{{route('posts.trashed')}}">Removed</a></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="{{route('categories.index')}}"><i class="fa fa-gear"></i>Categories</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="{{route('categories.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                                    <li><a href="#">Removed</a></li>
                                </ul>
                            </div>

                        </li>
                        <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i>Tags</a></li>
                    </ul>
                </div>
            </li>
            <!--/ posts -->
            
            <!-- pages -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-file"></i>Pages</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('pages.index')}}"><i class="fa fa-list"></i>All pages</a></li>
                        <li><a href="{{route('pages.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ pages -->
            
            <!-- posts -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-desktop"></i>Channels</a>
                <div class="grid-container3">
                    <ul>
                        <li>
                            <a href="{{route('channels.index')}}"><i class="fa fa-list"></i>All Channels</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="#">Published</a></li>
                                    <li><a href="#">Pending review</a></li>
                                    <li><a href="{{route('channels.trashed')}}">Removed</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{route('channels.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                        <li>
                            <a href="{{route('subcategories.index')}}"><i class="fa fa-gear"></i>Subcategories</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="{{route('subcategories.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                                    <li><a href="#">Removed</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('categories.index')}}"><i class="fa fa-gear"></i>Categories</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="{{route('categories.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                                    <li><a href="#">Removed</a></li>
                                </ul>
                            </div>

                        </li>
                        <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i>Tags</a></li>
                    </ul>
                </div>
            </li>
            <!--/ posts -->

            <!-- forum -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-file"></i>Forum</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('discussions.index')}}"><i class="fa fa-list"></i>All discussions</a></li>
                        <li><a href="{{route('discussions.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ pages -->

            <!-- media -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-sun-o"></i>Media</a>
                <div class="grid-container3">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-th-large"></i>Library</a>
                            <div class="grid-container3">
                                <ul>
                                    <li><a href="{{route('images.index')}}"><i class="fa fa-picture"></i>Images</a></li>
                                    <li><a href="#"><i class="fa fa-film"></i>Video</a></li>
                                    <li><a href="#"><i class="fa fa-music"></i>Audio</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li class="right">
            <!--/ media -->

            
            <!-- comments -->
            <li>
                <a href="{{route('comments.index')}}"><i class="fa fa-comments"></i>Comments</a>
            </li>
            <!--/ comments -->
            
            <!-- appearance -->
            <li aria-haspopup="true">
                <a href="#"><i class="fa fa-desktop"></i>Appearance</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-adjust"></i>Themes</a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i>Menus</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i>Editor</a></li>
                    </ul>
                </div>
            </li>
            <!--/ appearance -->
            
            <!-- status -->
            <li aria-haspopup="true">
                <a href="{{route('status.index')}}"><i class="fa fa-bolt"></i>Status</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-plus"></i>Add new</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i>Editor</a></li>
                    </ul>
                </div>
            </li>
            <!--/ status -->
            
            <!-- tags -->
            <li aria-haspopup="true">
                <a href="{{route('tags.index')}}"><i class="fa fa-bolt"></i>Tags</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-plus"></i>Add new</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i>Editor</a></li>
                    </ul>
                </div>
            </li>
            <!--/ tags -->

            
            <!-- tools -->
            <li aria-haspopup="true" class="bottom">
                <a href="#"><i class="fa fa-wrench"></i>Tools</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-lightbulb-o"></i>Available tools</a></li>
                        <li><a href="#"><i class="fa fa-download"></i>Import</a></li>
                        <li><a href="#"><i class="fa fa-upload"></i>Export</a></li>
                    </ul>
                </div>
            </li>
            <!--/ tools -->
            
            <!-- settings -->
            <li aria-haspopup="true" class="bottom">
                <a href="#"><i class="fa fa-gears"></i>Settings</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-book"></i>General</a></li>
                        <li><a href="#"><i class="fa fa-pencil"></i>Writing</a></li>
                        <li><a href="#"><i class="fa fa-eye"></i>Reading</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i>Discussion</a></li>
                        <li><a href="#"><i class="fa fa-picture-o"></i>Media</a></li>
                        <li><a href="#"><i class="fa fa-link"></i>Permalinks</a></li>
                    </ul>
                </div>
            </li>
            <!--/ settings -->
        </ul>
        <!--/ mega menu -->
    </aside>

</nav>