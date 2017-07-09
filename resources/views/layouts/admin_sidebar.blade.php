                            <!-- main side nav start -->
                            <nav class="mainmenu_side_wrapper">
                              {{--   <h3 class="main_bg_color2">Dashboard</h3> --}}
                                <ul class="nav menu-side-click">
                                    <li class="active">
                                        <a href="admin_index.html">
                                            <i class="fa fa-th-large"></i>
                                            Dashboard
                                        </a>

                                    </li>
                                </ul>

                                <h3 class="dark_bg_color">Sections</h3>
                                <ul class="nav menu-side-click">
                                   {{--  <li>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Account
                                        </a>
                                        <ul>
                                            <li> <a href="admin_profile.html"> Profile </a> </li>
                                            <li> <a href="admin_profile_edit.html"> Edit Profile </a> </li>
                                        </ul>
                                    </li> --}}

                                    @include('layouts.menu')

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-file-text"></i>
                                            Tasks
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{!! url('tasks') !!}">
                                                    Tasks List
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! url('tasks/create') !!}">
                                                    Create Task
                                                </a>
                                            </li>

                                        </ul>
                                    </li>


                                </ul>

{{--                                 <h3 class="dark_bg_color">Sections</h3> --}}
{{--                                 <ul class="nav menu-side-click"> --}}
{{--                                     <li> <a href="admin_tables.html"> <i class="fa fa-table"></i> Tables </a> </li> --}}
{{--                                     <li> <a href="admin_forms.html"> <i class="fa fa-check-square-o"></i> Forms </a> </li> --}}
{{--                                     <li> <a href="admin_bootstrap.html"> <i class="fa fa-cog"></i> Bootstrap </a> </li> --}}
{{--                                 </ul> --}}
                            </nav>
                            <!-- eof main side nav -->
