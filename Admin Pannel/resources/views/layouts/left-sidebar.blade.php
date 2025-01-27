<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menuitem-active">
                    <a href="" class="active">
                        <i class="fas fa-home"></i>
                        <span> Home </span>
                    </a>
                </li>
                <!-- Start Configuration -->
                <li>
                    <a href="#sidebarConfig" data-bs-toggle="collapse">
                        <i class="fas fa-tools"></i>
                        <span> Configurations </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarConfig">
                        <ul class="nav-second-level">
                            <li><a href="">Users</a></li>
                            <li><a href="">Employees</a></li>
                            <li><a href="">Item Master</a></li>
                        </ul>
                    </div>
                </li>
                <!-- End Configuration -->

                <!-- Start Finance -->
                <li>
                    <a href="#sidebarFinanc" data-bs-toggle="collapse">
                        <i class="fas fa-book"></i>
                        <span> Finance </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarFinanc">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarFinansConfig" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Configurations <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarFinansConfig" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Chart of Account</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarFinansTransac" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Transactions <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarFinansTransac" style="">
                                    <ul class="nav-second-level">
                                      
                                        <li><a href="">Bill</a></li>
                                        <li><a href="">Banking</a></li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="#sidebarFinansReport" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Reports <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarFinansReport" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                <!-- End Finance -->

                <!-- Start Procurement -->
                <li>
                    <a href="#sidebarPrcumntMgmt" data-bs-toggle="collapse">
                        <i class="fas fa-shipping-fast"></i>
                        <span> Procurement </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPrcumntMgmt">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarPrcumntConfig" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Configurations <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarPrcumntConfig" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Suppliers</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarPrcumntTransac" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Transactions <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarPrcumntTransac" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Procurement Job</a></li>
                                        <li><a href="">Request for Quotation</a></li>
                                        <li><a href="">Purchase Order</a></li>
                                        <li><a href="">Purchase Invoice</a></li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="#sidebarPrcumntReport" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Reports <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarPrcumntReport" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                <!-- End Procurement -->

                <!-- Start Order Menagement -->
                <li>
                    <a href="#sidebarOrderMgmt" data-bs-toggle="collapse">
                        <i class="fas fa-shopping-cart"></i>
                        <span> Order Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarOrderMgmt">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarOrderMgmtConfig" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Configurations <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarOrderMgmtConfig" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Customers</a></li>
                                        <li><a href="">Localities</a></li>
                                        <li><a href="">Payment Terms</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarOrderMgmtTransac" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Transactions <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarOrderMgmtTransac" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Sales Order</a></li>
                                        <li><a href="">Invoice</a></li>
                                       
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="#sidebarOrderMgmtReport" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Reports <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarOrderMgmtReport" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                <!-- End Order Management -->

                <!-- Start Inventory Menagement -->
                <li>
                    <a href="#sidebarInvntryMgmt" data-bs-toggle="collapse">
                        <i class="fas fa-cubes"></i>
                        <span> Inventory Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarInvntryMgmt">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarInvntryMgmtConfig" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Configurations <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarInvntryMgmtConfig" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Stores</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarInvntryMgmtTransac" data-bs-toggle="collapse" class="" aria-expanded="true">
                                    Transactions <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse show" id="sidebarInvntryMgmtTransac" style="">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="#sidebarInvntryMgmtTransacInbound" data-bs-toggle="collapse" class="" aria-expanded="true">
                                                Inbound <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse show" id="sidebarInvntryMgmtTransacInbound" style="">
                                                <ul class="nav-second-level">
                                                    <li><a href="">Order Receipt</a></li>
                                                    <li><a href="">Order Organizing</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#sidebarInvntryMgmtTransacOutbound" data-bs-toggle="collapse" class="" aria-expanded="true">
                                                Outbound <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse show" id="sidebarInvntryMgmtTransacOutbound" style="">
                                                <ul class="nav-second-level">
                                                    <li><a href="">Order Requisition</a></li>
                                                    <li><a href="">Order Planing</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="#sidebarInvntryMgmtReport" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Reports <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarInvntryMgmtReport" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                <!-- End Inventory Management -->

                <!-- Start WMS -->
                <li>
                    <a href="#sidebarwms" data-bs-toggle="collapse">
                        <i class="fas fa-boxes"></i>
                        <span> WMS </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarwms">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarwmsConfig" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Configurations <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarwmsConfig" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">Warehouse</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sidebarwmsTransac" data-bs-toggle="collapse" class="" aria-expanded="true">
                                    Transactions <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse show" id="sidebarwmsTransac" style="">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="#sidebarwmsTransacInbound" data-bs-toggle="collapse" class="" aria-expanded="true">
                                                Inbound <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse show" id="sidebarwmsTransacInbound" style="">
                                                <ul class="nav-second-level">
                                                    <li><a href="">Warehousing Job</a></li>
                                                    <li><a href="">Transport Document</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#sidebarwmsTransacOutbound" data-bs-toggle="collapse" class="" aria-expanded="true">
                                                Outbound <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse show" id="sidebarwmsTransacOutbound" style="">
                                                <ul class="nav-second-level">
                                                    <li><a href="">Order Requisition</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="#sidebarInvntryMgmtReport" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Reports <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarInvntryMgmtReport" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                <!-- End WMS -->

                <!-- Start RMA -->
                <li>
                    <a href="#sidebarRMA" data-bs-toggle="collapse">
                        <i class="fas fa-box-open"></i>
                        <span> RMA </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarRMA">
                        <ul class="nav-second-level">
                            {{-- <li>
                                <a href="#sidebarRMAConfig" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Configurations <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarRMAConfig" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                            <li>
                                <a href="#sidebarRMATransac" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Transactions <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarRMATransac" style="">
                                    <ul class="nav-second-level">
                                        <li><a href="">RMA Job</a></li>
                                        <li><a href="">RMA Job Assesment</a></li>
                                       
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="#sidebarRMAReport" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    Reports <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarRMAReport" style="">
                                    <ul class="nav-second-level">

                                    </ul>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                <!-- End RMA -->

            </ul>
        </div>
    </li>
            </ul>
        </div> <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div> <!-- Sidebar -left -->
</div> <!-- Left Sidebar End -->
