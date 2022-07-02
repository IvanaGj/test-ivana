
<!-- NAVBAR -->
<div class="container position-relative">


    <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

        <div class="align-items-start">

            <!-- mobile menu button : show -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainNav"
                    aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="25" viewBox="0 0 20 20">
                    <path
                        d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
                    <path
                        d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
                    <path
                        d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
                    <path
                        d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
                </svg>
            </button>

            <!--
                Logo : height: 70px max
            -->
            <a class="navbar-brand m-0" href="index.html">
                <img src="/fe/images/logo/logo_dark.svg" width="110" height="70" alt="...">
            </a>

        </div>




    </nav>

</div>
<!-- /NAVBAR -->


<div class="clearfix">
    <!-- line -->
    <hr class="m-0 opacity-5">

    <div class="container">

        <nav
            class="navbar h-auto navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

                <!-- MOBILE MENU NAVBAR -->
                <div class="navbar-xs d-none"><!-- .sticky-top -->

                    <!-- mobile menu button : close -->
                    <button class="navbar-toggler pt-0" type="button" data-toggle="collapse"
                            data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <svg width="20" viewBox="0 0 20 20">
                            <path
                                d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
                        </svg>
                    </button>

                    <!--
                        Mobile Menu Logo
                        Logo : height: 70px max
                    -->
                    <a class="navbar-brand" href="index.html">
                        <img src="/fe/images/logo/logo_dark.svg" width="110" height="70" alt="...">
                    </a>

                </div>
                <!-- /MOBILE MENU NAVBAR -->


                <!-- NAVIGATION -->
                <ul class="navbar-nav navbar-sm">
                    <!-- Menu -->
                    <!--

                        Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
                            .dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
                            .dropdown-menu-hover 		- open on hover
                            .dropdown-menu-clean 		- no background color on hover
                            .dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
                            .dropdown-menu-uppercase 	- uppercase text (font-size is scalled down to 13px)
                            .dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

                            Repositioning long dropdown childs (Example: Pages->Account)
                                .dropdown-menu-up-n100 		- open up with top: -100px
                                .dropdown-menu-up-n100 		- open up with top: -150px
                                .dropdown-menu-up-n180 		- open up with top: -180px
                                .dropdown-menu-up-n220 		- open up with top: -220px
                                .dropdown-menu-up-n250 		- open up with top: -250px
                                .dropdown-menu-up 			- open up without negative class


                            Dropdown prefix icon (optional, if enabled in variables.scss)
                                .prefix-link-icon .prefix-icon-dot 		- link prefix
                                .prefix-link-icon .prefix-icon-line 	- link prefix
                                .prefix-link-icon .prefix-icon-ico 		- link prefix
                                .prefix-link-icon .prefix-icon-arrow 	- link prefix

                            .nav-link.nav-link-caret-hide 	- no dropdown icon indicator on main link
                            .nav-item.dropdown-mega 		- required ONLY on fullwidth mega menu

                    -->
                    <!-- home -->


                    <li class="nav-item  active">

                        <a href="/" id="mainNavHome" class="nav-link"
                           aria-haspopup="true"
                           aria-expanded="false">
                            Home
                        </a>
                    </li>

                    <!-- social : mobile only (d-block d-sm-none)-->
                    <li class="nav-item d-block d-sm-none text-center mb-4">

                        <h3 class="h6 text-muted">Follow Us</h3>

                        <a href="#!"
                           class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white"
                           rel="noopener">
                            <i class="fi fi-social-facebook"></i>
                        </a>

                        <a href="#!"
                           class="btn btn-sm btn-twitter transition-hover-top mb-2 rounded-circle text-white"
                           rel="noopener">
                            <i class="fi fi-social-twitter"></i>
                        </a>

                        <a href="#!"
                           class="btn btn-sm btn-linkedin transition-hover-top mb-2 rounded-circle text-white"
                           rel="noopener">
                            <i class="fi fi-social-linkedin"></i>
                        </a>

                        <a href="#!"
                           class="btn btn-sm btn-youtube transition-hover-top mb-2 rounded-circle text-white"
                           rel="noopener">
                            <i class="fi fi-social-youtube"></i>
                        </a>

                    </li>


                    <!-- buy now : mobile only (d-block d-sm-none)-->
                    <li class="nav-item d-block d-sm-none">
                        <a target="_blank" href="#buy_now"
                           class="btn btn-block btn-primary shadow-none text-white m-0">
                            Buy Now
                        </a>
                    </li>

                </ul>
                <!-- /NAVIGATION -->


            </div>

        </nav>

    </div>
</div>

</header>
<!-- /HEADER -->


