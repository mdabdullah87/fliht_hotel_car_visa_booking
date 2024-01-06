    <!-- side bar start here  -->
    <div id="layoutSidenav" class="border rounded m-1">
        <div id="layoutSidenav_nav" class="border rounded">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link bg-nav bg bg" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link bg-nav bg bg collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Booking Info
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link bg-nav bg bg" href="{{ route('fliht.add') }}">Add Fliht</a>
                                <a class="nav-link bg-nav bg bg" href="{{ route('fliht.all') }}">All Flihts</a>
                               
                                <a class="nav-link bg-nav bg bg" href="{{ route('hotel.add') }}">Add Hotel</a>
                                <a class="nav-link bg-nav bg bg" href="{{ route('hotel.all') }}">All Hotels</a>
                               
                                <a class="nav-link bg-nav bg bg" href="{{ route('car.add') }}">Add Car</a>
                                <a class="nav-link bg-nav bg bg" href="{{ route('car.all') }}">All Cars</a>
                               
                                <a class="nav-link bg-nav bg bg" href="{{ route('visa.add') }}">Add visa</a>
                                <a class="nav-link bg-nav bg bg" href="{{ route('visa.all') }}">All visa</a>

                            </nav>
                        </div>
                        <a class="nav-link bg-nav bg bg collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Patient info
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed bg-nav bg bg" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Patient
                                </a>
                                <a class="nav-link collapsed bg-nav bg bg" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Add patient
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link bg-nav bg bg" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pattient Entry
                        </a>
                        <a class="nav-link bg-nav bg" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Setting
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" class="bg-light border rounded">
            <main>
                <!-- MAIN CINTAIN START HERE  -->



                @yield('content')



                <!-- MAIN CINTAIN END HERE  -->
            </main>
            <footer class="border rounded">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; shojib khan</div>
                        <div>
                            <a class="text-decoration-none text-dark" href="#">Privacy Policy</a>
                            &middot;
                            <a class="text-decoration-none text-dark" href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>