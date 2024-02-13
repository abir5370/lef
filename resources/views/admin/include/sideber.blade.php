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
        {{-- start home section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Home
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Slider
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('sliders.create')}}">
                                Add Slider
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('sliders.index')}}">
                                Manage Slider
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        We Do
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('activities.create')}}">
                                Add We Do
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('activities.index')}}">
                                Manage We Do
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('ceos.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        CeoInfo
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Supporter
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('supporters.create')}}">
                                Add supporter
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('supporters.index')}}">
                                Manage supporter
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- end home section --}}

        {{-- start-about-section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    About US
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Basic Info
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('aboutbasics.basic')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Basic Content
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('aboutbasics.image')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Image
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Facilities
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('facilities.create')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add Facilitie
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('facilities.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Facilitie List
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Board Member
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('boardmembers.create')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add Member
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('boardmembers.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Member List
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Staff & Teacher
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('staffs.create')}}">
                                Add Staff
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('staffs.index')}}">
                                Manage Staff
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>

                        Donar
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('donars.create')}}">
                                Add Donar
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('donars.index')}}">
                                Manage Donar
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>

                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('bank.info')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Banking Info
                    </a>
                </li>
            </ul>
        </li>
        {{-- end-about-section --}}

        {{-- start-activitie-section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    Activities
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activitiebasics.basic')}}">
                       Basic Info
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('activitiegallerys.index')}}">
                        Gallery Image
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activitieprograms.index')}}">
                        Activite & Program
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activitieothers.index')}}">
                        Activite & Other
                    </a>
                </li>
            </ul>
        </li>
        {{-- end activitie section --}}

        {{--start-our-success-section--}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    Our Success
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('success.basic')}}">
                        Basic Info
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('oursuccess.index')}}">
                        Success Story
                    </a>
                </li>
            </ul>
        </li>
        {{--end-our-success-section--}}

          {{-- start-latest-section --}}
          <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    The Latest
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Photos
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('year.photo')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Year
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('latesphotos.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Photo Gallery
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Newsletter
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{route('year.newletter')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Year
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('newsletters.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Newsletter
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>   
        </li>
        {{-- end-latest-section --}}

      

        {{-- slider-section --}}
        {{-- <li class="">
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
        </li> --}}


        {{-- we do --}}
        {{-- <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cogs"></i>
                <span class="menu-text">
                    We Do
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('activities.create')}}">
                        Add We Do
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activities.index')}}">
                        Manage We Do
                    </a>
                </li>
            </ul>
        </li> --}}

         {{-- ceo information --}}
         {{-- <li class="">
            <a href="{{route('ceos.index')}}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> CeoInfo </span>
            </a>
            <b class="arrow"></b>
        </li> --}}

        {{-- supporter section --}}
        {{-- <li class="">
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
        </li> --}}

         {{-- Staff section --}}
         {{-- <li class="">
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
        </li> --}}

        {{-- Donar section --}}
        {{-- <li class="">
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
        </li> --}}

        {{-- product section --}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    Product Area
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('categories.index')}}">
                        Category
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('products.index')}}">
                        Product Info
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

        
         
         {{-- activitie section --}}
         <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    GuestHouse
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('gursthouesegallerys.basic')}}">
                       Basic Info
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('gursthouesegallerys.index')}}">
                       Guest Gallery Image
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activitieprograms.index')}}">
                        Activite & Program
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('activitieothers.index')}}">
                        Activite & Other
                    </a>
                </li>
            </ul>
        </li>

         {{-- activitie section --}}
         <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">
                    Company Setting 
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="{{route('widgets.index')}}">
                       Basic Info
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('widgets.logo')}}">
                       Logo
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    User
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


        {{-- <li class="">
            <a href="{{route('widgets.index')}}">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text"> Company Setting </span>
            </a>
            <b class="arrow"></b>
        </li> --}}

       





       












       

       
        {{-- <li class="">
            <a href="{{route('widgets.index')}}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> Widgets </span>
            </a>

            <b class="arrow"></b>
        </li> --}}

      

        <li class="">
            <a href="gallery.html">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Gallery </span>
            </a>

            <b class="arrow"></b>
        </li>

        
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>


