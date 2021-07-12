<aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
								<li class="nav-active">
                                    <a class="nav-link" href="index.html">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>                                                       
                                
                                <li>
                                    <a class="nav-link" href="menu.html">
                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                        <span>Menus</span>
                                    </a>
                                </li>

                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                        <span>Developer Setup</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="">
                                            <a class="nav-link" href="{{route('module.index')}}">
                                            <i class="fa fa-meetup"></i>Module
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                        <span>Application Setup</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="">
                                            <a class="nav-link" href="{{route('category.index')}}">
                                            <i class="fa fa-meetup"></i>Category
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="nav-link" href="setting.html">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>


                </div>

            </aside>