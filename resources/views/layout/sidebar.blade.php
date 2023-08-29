<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                                <a href="/" class="flex d-flex align-items-center text-underline-0 text-body">
                                    <span class="avatar mr-3">
                                        <img src="assets/images/avatar/demi.png" alt="avatar" class="avatar-img rounded-circle">
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        <strong>Adrian Demian</strong>
                                        <small class="text-muted text-uppercase">Account Manager</small>
                                    </span>
                                </a>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Adrian Demian</strong></div>
                                            <div>@adriandemian</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item active" href="index.html">Dashboard</a>
                                        <a class="dropdown-item" href="profile.html">My profile</a>
                                        <a class="dropdown-item" href="edit-account.html">Edit account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-heading sidebar-m-t">Menu</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item {{ Request::is('/') ? 'active open' : '' }}">
                                    <a class="sidebar-menu-button " data-toggle="collapse" href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboards</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse {{ Request::is('/') ? ' show' : '' }}  " id="dashboards_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/">
                                                <span class="sidebar-menu-text">Quick Overveiw</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item {{ Request::is('qouteManage') || Request::is('qouteSelection') ? 'active open' : '' }}">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#qoute_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Qoutes</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse {{ Request::is('qouteManage') || Request::is('qouteSelection') ? 'show' : '' }}" id="qoute_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/qouteManage">
                                                <span class="sidebar-menu-text">Management</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="qouteSelection">
                                                <span class="sidebar-menu-text">Selection</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item {{ Request::is('contractManage') || Request::is('contractSelection') ? 'active open' : '' }}">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#contract_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Contracts</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse {{ Request::is('qouteManage') || Request::is('qouteSelection') ? 'show' : '' }}" id="contract_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/contractManage">
                                                <span class="sidebar-menu-text">Management</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/contractSelection">
                                                <span class="sidebar-menu-text">Selection</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item {{ Request::is('invoiceManage') || Request::is('invoiceSelection') ? 'active open' : '' }}">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#invoice_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Invoices</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse {{ Request::is('invoiceManage') || Request::is('invoiceSelection') ? 'show' : '' }}" id="invoice_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/invoiceManage">
                                                <span class="sidebar-menu-text">Management</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="invoiceSelection">
                                                <span class="sidebar-menu-text">Selection</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item {{ Request::is('editAccount') || Request::is('addAdmin') || Request::is('addUser') ? 'active open' : '' }}">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Profile</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse {{ Request::is('editAccount') || Request::is('addAdmin') || Request::is('addUser') ? 'show' : '' }}" id="pages_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/editAccount">
                                                <span class="sidebar-menu-text">Edit Account</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item {{  Request::is('addAdmin') || Request::is('addUser') ? 'active open' : '' }}">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#signup_menu">
                                                <span class="sidebar-menu-text">Add Users</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse {{  Request::is('addAdmin') || Request::is('addUser') ? 'show' : '' }}" id="signup_menu">

                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="/addAdmin">
                                                        <span class="sidebar-menu-text">Admin</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="/addUser">
                                                        <span class="sidebar-menu-text">User</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        
                            <div class="sidebar-p-a ">
                                <a  class="btn btn-outline-primary btn-block">Version 1.1</a>
                            </div>

                        </div>
                    </div>
                </div>
