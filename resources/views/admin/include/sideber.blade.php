<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li class="active">
            <a href="index.html">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- slider-section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    MenuBar
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('menubars.create')}}">
                        Add Menu
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('menubars.index')}}">
                        Manage Menu
                    </a>
                </li>
            </ul>
        </li>

        {{-- slider-section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Slider
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('sliders.create')}}">
                        Add Slider
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('sliders.index')}}">
                        Manage Slider
                    </a>
                </li>
            </ul>
        </li>


        {{-- Activities --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cogs"></i>
                <span class="menu-text">
                    Activities
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('activities.create')}}">
                        Add Activitie
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activities.index')}}">
                        Manage Activitie
                    </a>
                </li>
            </ul>
        </li>

         {{-- ceo information --}}
         <li class="">
            <a href="{{route('ceos.index')}}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> CeoInfo </span>
            </a>
            <b class="arrow"></b>
        </li>

         {{-- Staff section --}}
         <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-graduation-cap"></i>
                <span class="menu-text">
                    Staff & Teacher
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('staffs.create')}}">
                        Add Staff
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('staffs.index')}}">
                        Manage Staff
                    </a>
                </li>
            </ul>
        </li>

        {{-- Donar section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    Donar
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('donars.create')}}">
                        Add Donar
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('donars.index')}}">
                        Manage Donar
                    </a>
                </li>
            </ul>
        </li>


        {{-- contact section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-support"></i> 

                <span class="menu-text">
                    Supporter
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('supporters.create')}}">
                        Add supporter
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('supporters.index')}}">
                        Manage supporter
                    </a>
                </li>
            </ul>
        </li>

        {{-- inbox-section --}}
        {{-- <li class="">
            <a href="{{route('inbox')}}" class="">
                <i class="menu-icon fa fa-comment"></i>
                <span class="menu-text">
                    Inbox
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li> --}}

        <li class="">
            <a href="{{route('widgets.index')}}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> Widgets </span>
            </a>
            <b class="arrow"></b>
        </li>







        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    UI &amp; Elements
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>

                        Layouts
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="top-menu.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Top Menu
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="two-menu-1.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Two Menus 1
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="two-menu-2.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Two Menus 2
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="mobile-menu-1.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Default Mobile Menu
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="mobile-menu-2.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mobile Menu 2
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="mobile-menu-3.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mobile Menu 3
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="typography.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Typography
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Elements
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="buttons.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Buttons &amp; Icons
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="content-slider.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Content Sliders
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="treeview.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Treeview
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="jquery-ui.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        jQuery UI
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="nestable-list.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nestable Lists
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>

                        Three Level Menu
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-leaf green"></i>
                                Item #1
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-pencil orange"></i>

                                4th level
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="">
                                    <a href="#">
                                        <i class="menu-icon fa fa-plus purple"></i>
                                        Add Product
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#">
                                        <i class="menu-icon fa fa-eye pink"></i>
                                        View Products
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Tables </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="tables.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Simple &amp; Dynamic
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="jqgrid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        jqGrid plugin
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Forms </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Form Elements
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="form-elements-2.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Form Elements 2
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="form-wizard.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Wizard &amp; Validation
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="wysiwyg.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Wysiwyg &amp; Markdown
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="dropzone.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Dropzone File Upload
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        {{-- <li class="">
            <a href="{{route('widgets.index')}}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> Widgets </span>
            </a>

            <b class="arrow"></b>
        </li> --}}

        <li class="">
            <a href="calendar.html">
                <i class="menu-icon fa fa-calendar"></i>

                <span class="menu-text">
                    Calendar

                    <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                        <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                    </span>
                </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="gallery.html">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Gallery </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> More Pages </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="profile.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        User Profile
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="inbox.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Inbox
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="pricing.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Pricing Tables
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="invoice.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Invoice
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="timeline.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Timeline
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="search.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Search Results
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="email.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Email Templates
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="login.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Login &amp; Register
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-o"></i>

                <span class="menu-text">
                    Other Pages

                    <span class="badge badge-primary">5</span>
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="faq.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        FAQ
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="error-404.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 404
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="error-500.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 500
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="grid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Grid
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="blank.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Blank Page
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>


