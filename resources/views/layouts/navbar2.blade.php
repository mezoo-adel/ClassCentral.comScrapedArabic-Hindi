@include('layouts.bootstrapcss')

<style>
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f5f3f3;
        width: 8rem;
        right: 0;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    a:hover {
        cursor: pointer;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover>.dropdown-menu,
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .bluring {
        filter: blur(6px);
        -webkit-filter: blur(6px);
        -moz-filter: blur(6px);
        -o-filter: blur(6px);
        -ms-filter: blur(6px);
    }
</style>

<style>
    @media all and (min-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -0.7rem;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }
    }
</style>
<nav class="navbar navbar-expand-lg py-3 bg-white  border-bottom border-gray-light">
    <a class="block medium-up-margin-right-large cmpt-nav-logo" href="/">
        <i class="symbol-classcentral-navy symbol-medium hidden large-up-block"></i>
        <i class="relative symbol-classcentral-navy symbol-small block large-up-hidden"></i>
        <span class="off-page">Class Central</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon-medium icon-menu-charcoal"></i>
    </button>

    <div class="collapse navbar-collapse w-50" id="mainNavbar">
        <ul class="navbar-nav mr-auto mt-lg-0">
            <section class="dropdown nav-link" data-bs-toggle=" collapse">
                <a class="weight-semi large-up-block text-1 color-charcoal">
                    {{ __('home/navbar/navbar.Courses') }}
                </a>
                <div class="dropdown-menu collapse" id="dropdown-menu" style="width: 17rem;">
                    <li class="nav-item" data-bs-toggle="dropdown" data-bs-target="#rankMenu">
                        <a class="main-nav-dropdown__item-control color-charcoal">
                            <span>{{ __('home/navbar/navbar.Rankings') }}</span>
                            <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                        </a>
                        <ul class="submenu dropdown-menu" id="rankMenu" style="width: 18rem;">
                            <a class="main-nav-dropdown__item-control--with-image"
                                href="https://www.classcentral.com/collection/top-free-online-courses">
                                <img class="width-100 radius-small"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=11c7448eb8908a8cc785e26ec27de650"
                                    alt="Best of All Time">
                            </a>
                            <a class="main-nav-dropdown__item-control--with-image"
                                href="https://www.classcentral.com/collection/top-free-online-courses">
                                <img class="width-100 radius-small"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-most-popular-of-all-time.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=8ddc221d6528da20924c85c064e17572"
                                    alt="Most Popular of All Time">
                            </a>
                            <li>
                                <hr class="dropdown-divider w-75 m-auto">
                            </li>
                            <section class="main-nav-dropdown__section--with-header">
                                <div class="main-nav-dropdown__section-header">
                                    <h3 class="main-nav-dropdown__section-heading">Best Courses</h3>
                                </div>

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/collection/top-free-online-courses">
                                            <span>Best of All Time</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/best-free-online-courses-2022/">
                                            <span>Best of the Year 2022</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/best-free-online-courses-2021/">
                                            <span>Best of the Year 2021</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="main-nav-dropdown__section--with-header">
                                <div class="main-nav-dropdown__section-header">
                                    <h3 class="main-nav-dropdown__section-heading">Most Popular Courses</h3>
                                </div>

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/most-popular-online-courses/">
                                            <span>Most Popular of All Time</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/most-popular-courses-2022/">
                                            <span>Most Popular of the Year 2022</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/100-most-popular-online-courses-2021/">
                                            <span>Most Popular of the Year 2021</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </ul>
                    </li>
                    <li class="nav-item" data-bs-toggle="collapse" data-bs-target="#collMenu">
                        <a class="main-nav-dropdown__item-control color-charcoal">
                            <span>{{ __('home/navbar/navbar.Collections') }}</span>
                            <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                        </a>
                        <ul class="dropdown-menu collapse submenu" id="collMenu" style="width: 18rem; top: -2.7rem;">
                            <a class="main-nav-dropdown__item-control--with-image"
                                href="https://www.classcentral.com/collection/ivy-league-moocs">
                                <img class="width-100 radius-small"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&h=420&ixlib=php-3.3.1&s=c49b305f32e1e971696b9852e3971c6b"
                                    alt="Best of All Time">
                            </a>
                            <a class="main-nav-dropdown__item-control--with-image"
                                href="https://www.classcentral.com/report/coursera-free-online-courses/">
                                <img class="width-100 radius-small"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-coursera-free-courses.png?auto=format&h=420&ixlib=php-3.3.1&s=9044610de77ddba19697f770dd2531c7"
                                    alt="Most Popular of All Time">
                            </a>
                            <a class="main-nav-dropdown__item-control--with-image"
                                href="https://www.classcentral.com/report/free-certificates/">
                                <img class="width-100 radius-small"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-free-certificates.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=bc50a602c38dbf30802649312c6a4474"
                                    alt="Free Certificates">
                            </a>
                            <a class="main-nav-dropdown__item-control--with-image"
                                href="https://www.classcentral.com/report/free-google-certifications/">
                                <img class="width-100 radius-small"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-google-certs.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=ac4c48d612e7961d7335e87451e52ac4"
                                    alt="Free Google Certifications">
                            </a>
                            <li>
                                <hr class="dropdown-divider w-75 m-auto">
                            </li>
                            <section class="main-nav-dropdown__section--with-header">
                                <div class="main-nav-dropdown__section-header">
                                    <h3 class="main-nav-dropdown__section-heading">Monthly Course Reports</h3>
                                </div>

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/starting-this-month" data-track-click="nav_click">
                                            <span>Starting this Month</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/new-online-courses" data-track-click="nav_click">
                                            <span>New Online Courses</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/most-popular-courses" data-track-click="nav_click">
                                            <span>Most Popular</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </ul>
                    </li>
                    <div class="main-nav-dropdown__section-header">
                        <hr class="dropdown-divider my-2">
                        <h3 class="main-nav-dropdown__section-heading">Subjects</h3>
                    </div>
                    <li class="nav-item" data-bs-toggle="collapse" data-bs-target="#csMenu">
                        <a class="main-nav-dropdown__item-control color-charcoal">
                            <span>{{ __('home/navbar/navbar.Computer Science') }}</span>
                            <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                        </a>
                        <ul class="dropdown-menu collapse submenu" id="csMenu" style="width: 18rem;  top: -8rem;">
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/ai">
                                    <span>Artificial Intelligence</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/algorithms-and-data-structures">
                                    <span>Algorithms and Data
                                        Structures</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/internet-of-things">
                                    <span>Internet of Things</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/information-technology"><span>Information
                                        Technology</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/computer-networking"> <span>Computer
                                        Networking</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/machine-learning"> <span>Machine
                                        Learning</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/devops"><span>DevOps</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/deep-learning"> <span>Deep
                                        Learning</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/cryptography"> <span>Cryptography</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/quantum-computing"><span>Quantum
                                        Computing</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/hci"><span>Human-Computer Interaction
                                        (HCI)</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/distributed-systems"><span>Distributed
                                        Systems</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/blockchain"><span>Blockchain
                                        Development</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/operating-systems"> <span>Operating
                                        Systems</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="https://www.classcentral.com/subject/computer-graphics"> <span>Computer
                                        Graphics</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item mb-3">
                                <a class="main-nav-dropdown__item-control--highlighted"
                                    href="https://www.classcentral.com/subject/cs"><span>View all Computer
                                        Science</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item" data-bs-toggle="collapse" data-bs-target="#healthMenu">
                        <a class="main-nav-dropdown__item-control color-charcoal">
                            <span>{{ __('home/navbar/navbar.Health and Medicine') }}</span>
                            <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                        </a>
                        <ul class="dropdown-menu collapse submenu" id="healthMenu"
                            style="width: 18rem;  top: -10rem;">
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/nutrition-and-wellness"><span>Nutrition &amp; Wellness</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/disease-and-disorders"><span>Disease &amp; Disorders</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/public-health"><span>Public Health</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/health-care"><span>Health Care</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/nursing"><span>Nursing</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/anatomy"><span>Anatomy</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/veterinary-science"><span>Veterinary Science</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/cme"><span>Continuing Medical Education (CME)</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item mb-3">
                                <a class="main-nav-dropdown__item-control--highlighted"
                                    href="https://www.classcentral.com/subject/health"><span>View all Health &amp;
                                        Medicine</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item" data-bs-toggle="collapse" data-bs-target="#mathMenu">
                        <a class="main-nav-dropdown__item-control color-charcoal">
                            <span>{{ __('home/navbar/navbar.Mathimatics') }}</span>
                            <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                        </a>
                        <ul class="dropdown-menu collapse submenu" id="mathMenu"
                            style="width: 18rem;  top: -12rem;">
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/statistics">
                                    <span>Statistics &amp; Probability</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/foundations-of-mathematics"><span>Foundations of Mathematics</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/calculus"><span>Calculus</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/discrete-mathematics"><span>Discrete Mathematics</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/trigonometry"><span>Trigonometry</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/geometry"><span>Geometry</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/algebra"><span>Algebra</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/precalculus"></a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/number-theory"><span>Number Theory</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/combinatorics"><span>Combinatorics</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/mathematical-logic"><span>Mathematical logic</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/linear-programming"><span>Linear Programming</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item mb-3">
                                <a class="main-nav-dropdown__item-control--highlighted"
                                    href="/subject/maths"><span>View all Mathematics</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- WEeeeeeeeee PASTEeeeeee BEFORE HEREEEEEEEEEEEEEEEEEEEE --}}
                    <li class="nav-item" id="myDropdown">
                        <a class="main-nav-dropdown__item-control color-charcoal" href="#"
                            data-bs-toggle="dropdown">
                            <span> Treeview menu </span>
                            <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                        </a>
                        <ul class="dropdown-menu submenu">
                            <li> <a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                            <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                                    <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                                    <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                            <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                                    <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                            <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                        </ul>
                    </li>
                    <a class="dropdown-item" href="#">Something else here</a>

                </div>
            </section>

            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
    {{-- language --}}
    <div class="dropdown">
        <button class="btn-circle btn-medium btn-white text-center"><svg width="24" height="24"
                viewBox="0 0 24 24" focusable="false" class="ep0rzf NMm5M">
                <path
                    d="M12.87 15.07l-2.54-2.51.03-.03A17.52 17.52 0 0 0 14.07 6H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z">
                </path>
            </svg></button>
        <ul class="dropdown-content">
            @foreach (Locales::get() as $locale)
                <a href="{{ url('locale/' . $locale->code) }}">
                    <img src="{{ $locale->flag }}" alt="flag"> {{ $locale->name }}
                </a>
            @endforeach
        </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-md-end " id="mainNavbar" style="text-align: center;">
        <a href="/login" class="text-1 weight-semi color-charcoal">{{ __('home/navbar/navbar.Log In') }}</a>
        <span class="inline-block padding-horz-xxsmall color-charcoal">or</span>
        <a href="/signup" class="text-1 weight-semi color-charcoal">
            {{ __('home/navbar/navbar.Sign Up') }}
        </a>
    </div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script>
    window.onload = function() {

        dd = document.querySelector('.dropdown');
        body = document.querySelector('.contain-pages');
        dd.addEventListener('mouseover', function() {
            console.log(body);
            body.classList.add('bluring');
        });
        dd.addEventListener('mouseout', function() {

            body.classList.remove('bluring');
        });
    }
</script>
