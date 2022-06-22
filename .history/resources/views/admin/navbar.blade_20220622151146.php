<div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/users')}}">
                            <span class="menu-title">Users</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <span class="menu-title">Online shopping</span>
                            <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="menu-title">Accessoires</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{/}}">
                            <span class="menu-title">reservation</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/products')}}">
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-medical-bag menu-icon"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/products')}}">Women's</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Men's</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Kid's</a></li>

                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>