<style>
    /* Dropdown Button */
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        width: 14rem;
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

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
<style>
    :root {
        --navbar-bg-color: hsl(0, 0%, 100%);
        --navbar-text-color: hsl(0, 0%, 85%);
        --navbar-text-color-focus: white;
        --navbar-bg-contrast: hsl(0, 0%, 25%);
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        height: 100vh;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.6;
    }

    .container {
        max-width: 1000px;
        padding-left: 1.4rem;
        padding-right: 1.4rem;
        margin-left: auto;
        margin-right: auto;
    }

    #navbar {
        --navbar-height: 64px;
        position: fixed;
        height: var(--navbar-height);
        background-color: var(--navbar-bg-color);
        left: 0;
        right: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        height: 100%;
        align-items: center;
    }

    .navbar-item {
        margin: 0.4em;
        width: 100%;
    }

    .home-link,
    .navbar-link {
        color: var(--navbar-text-color);
        text-decoration: none;
        display: flex;
        font-weight: 400;
        align-items: center;
    }

    .home-link:is(:focus, :hover) {
        color: var(--navbar-text-color-focus);
    }

    .navbar-link {
        justify-content: center;
        width: 100%;
        padding: 0.4em 0.8em;
        border-radius: 5px;
    }

    .navbar-link:is(:focus, :hover) {
        color: var(--navbar-text-color-focus);
        background-color: var(--navbar-bg-contrast);
    }

    .navbar-logo {
        background-color: var(--navbar-text-color-focus);
        border-radius: 50%;
        width: 30px;
        height: 30px;
        margin-right: 0.5em;
    }

    #navbar-toggle {
        cursor: pointer;
        border: none;
        background-color: transparent;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .icon-bar {
        display: block;
        width: 25px;
        height: 4px;
        margin: 2px;
        background-color: var(--navbar-text-color);
    }

    #navbar-toggle:is(:focus, :hover) .icon-bar {
        background-color: var(--navbar-text-color-focus);
    }

    #navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
        position: absolute;
        margin: 0;
        width: 30px;
    }

    #navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
        transform: rotate(45deg);
    }

    #navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
        opacity: 0;
    }

    #navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
        transform: rotate(-45deg);
    }

    #navbar-menu {
        position: fixed;
        top: var(--navbar-height);
        bottom: 0;
        opacity: 0;
        visibility: hidden;
        left: 0;
        right: 0;
    }

    #navbar-toggle[aria-expanded="true"]+#navbar-menu {
        background-color: rgba(0, 0, 0, 0.4);
        opacity: 1;
        visibility: visible;
    }

    .navbar-links {
        list-style: none;
        position: absolute;
        background-color: var(--navbar-bg-color);
        display: flex;
        flex-direction: column;
        align-items: center;
        left: 0;
        right: 0;
        margin: 1.4rem;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    #navbar-toggle[aria-expanded="true"]+#navbar-menu .navbar-links {
        padding: 1em;
    }

    @media screen and (min-width: 700px) {

        #navbar-toggle,
        #navbar-toggle[aria-expanded="true"] {
            display: none;
        }

        #navbar-menu,
        #navbar-toggle[aria-expanded="true"] #navbar-menu {
            visibility: visible;
            opacity: 1;
            position: static;
            display: block;
            height: 100%;
        }

        .navbar-links,
        #navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links {
            margin: 0;
            padding: 0;
            box-shadow: none;
            position: static;
            flex-direction: row;
            width: 100%;
            height: 100%;
        }
    }
</style>


<header data-cc-header="nosearch" class="z-top relative">
    <div class="relative bg-white cc-header border-bottom border-gray-light">
        <nav class="cmpt-nav row nowrap vert-align-middle absolute width-100 padding-horz-medium border-box">
            <a class="block medium-up-margin-right-large cmpt-nav-logo" href="/">
                <i class="symbol-classcentral-navy symbol-medium hidden large-up-block"></i>
                <i class="relative symbol-classcentral-navy symbol-small block large-up-hidden"></i>
                <span class="off-page">Class Central</span>
            </a>

            {{-- <header id="navbar">
                <nav class="navbar-container container">
                  <a href="/" class="home-link">
                    <div class="navbar-logo"></div>
                    Website Name
                  </a>
                  <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div id="navbar-menu" aria-labelledby="navbar-toggle">
                    <ul class="navbar-links">
                      <li class="navbar-item"><a class="navbar-link" href="/about">About</a></li>
                      <li class="navbar-item"><a class="navbar-link" href="/blog">Blog</a></li>
                      <li class="navbar-item"><a class="navbar-link" href="/careers">Careers</a></li>
                      <li class="navbar-item"><a class="navbar-link" href="/contact">Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </header> --}}

            <div class="dropdown">
                <button data-name="LARGE_UP_MAIN_NAV_TRIGGER"
                    class="hidden weight-semi large-up-block text-1 color-charcoal padding-right-small" type="button">
                    {{ __('home/navbar/navbar.Courses') }}
                </button>
                <div class="dropdown-content">
                    <div class="main-nav-dropdown__header large-up-hidden">
                        <h2 class="main-nav-dropdown__header-brand icon-lettermark-charcoal">Class Central
                        </h2>

                        <button aria-label="Close Site Menu" data-name="MAIN_NAV_CLOSE"
                            class="main-nav-dropdown__close-button">
                            <i class="icon-x-charcoal main-nav-dropdown__close-button-icon"></i>
                        </button>
                    </div>

                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    <section class="main-nav-dropdown__section">
                        <ul class="list-no-style">
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/rankings" >
                                    <span>Rankings</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/collections"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Notable&quot;,&quot;title&quot;:&quot;Collections&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;notable&quot;,&quot;label&quot;:&quot;Collections&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;collections&quot;}">
                                    <span>Collections</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                        </ul>
                    </section>

                    <section class="main-nav-dropdown__section--with-header">
                        <div class="main-nav-dropdown__section-header">
                            <h3 class="main-nav-dropdown__section-heading">Subjects</h3>
                            <a class="main-nav-dropdown__section-button large-up-hidden" href="/subjects"
                                data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;view all&quot;}">View
                                all</a>
                        </div>
















                        <ul class="list-no-style">
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/cs"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Computer Science&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Computer Science&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-cs&quot;}">
                                    <span>Computer Science</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/health"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Health &amp; Medicine&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Health &amp; Medicine&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-health&quot;}">
                                    <span>Health &amp; Medicine</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/maths"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Mathematics&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Mathematics&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-maths&quot;}">
                                    <span>Mathematics</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/business"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Business&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Business&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-business&quot;}">
                                    <span>Business</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/humanities"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Humanities&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Humanities&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-humanities&quot;}">
                                    <span>Humanities</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/engineering"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Engineering&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Engineering&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-engineering&quot;}">
                                    <span>Engineering</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/science"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Science&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Science&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-science&quot;}">
                                    <span>Science</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/education"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Education &amp; Teaching&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Education &amp; Teaching&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-education&quot;}">
                                    <span>Education &amp; Teaching</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/social-sciences" data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Social Sciences&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Social Sciences&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-social-sciences&quot;}">
                                    <span>Social Sciences</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/art-and-design" data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Art &amp; Design&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Art &amp; Design&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-art-and-design&quot;}">
                                    <span>Art &amp; Design</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/data-science"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Data Science&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Data Science&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-data-science&quot;}">
                                    <span>Data Science</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/programming-and-software-development" data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Programming&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Programming&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-programming-and-software-development&quot;}">
                                    <span>Programming</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal"
                                    href="/subject/personal-development" data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Personal Development&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Personal Development&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-personal-development&quot;}">
                                    <span>Personal Development</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/infosec"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Information Security (InfoSec)&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Information Security (InfoSec)&quot;}"
                                    data-name="NAV_SUBSECTION_PARENT"
                                    data-detail="{&quot;childListId&quot;:&quot;subject-infosec&quot;}">
                                    <span>Information Security (InfoSec)</span>
                                    <span
                                        class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small"></span>
                                </a>
                            </li>
                        </ul>

                        <a data-track-click="nav_click"
                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;View all Subjects&quot;}"
                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;view all subjects&quot;}"
                            href="/subjects"
                            class="text-2 hover-no-underline weight-semi margin-vert-xsmall padding-left-medium padding-right-medium hidden large-up-block">View
                            all Subjects</a>
                    </section>

                    <section class="main-nav-dropdown__section large-up-hidden">

                        <ul class="list-no-style">
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/universities"
                                    data-track-click="nav_click"
                                    data-track-props="{&quot;type&quot;:&quot;University&quot;,&quot;title&quot;:&quot;Universities&quot;}"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;university&quot;,&quot;label&quot;:&quot;Universities&quot;}">
                                    <span class="weight-semi">Universities</span>
                                </a>
                            </li>
                            <li class="main-nav-dropdown__item">
                                <a class="main-nav-dropdown__item-control color-charcoal" href="/report/"
                                    data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;news&quot;,&quot;label&quot;:&quot;mobile&quot;}">
                                    <span class="block symbol-report" style="height: 18px;">The
                                        Report</span>
                                </a>
                            </li>
                        </ul>
                    </section>

                    <p class="small-down-hidden text-2 padding-left-medium padding-right-medium padding-vert-xxsmall">
                        Courses from <a
                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;university&quot;,&quot;label&quot;:&quot;1000+ universities&quot;}"
                            data-track-click="nav_click"
                            data-track-props="{&quot;type&quot;: &quot;University&quot;, &quot;title&quot;: &quot;1000+ universities&quot;}"
                            href="/universities">1000+ universities</a>
                    </p>




                    <div class="main-nav-dropdown__subsections">
                        <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="rankings"
                            hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Rankings</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--with-image"
                                            href="/collection/top-free-online-courses" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Best of All Time&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Best of All Time&quot;}">
                                            <img class="width-100 radius-small"
                                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&amp;blur=200&amp;h=420&amp;ixlib=php-3.3.1&amp;px=16&amp;s=d9866ee3df3a50272132b746506802ee"
                                                data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=11c7448eb8908a8cc785e26ec27de650"
                                                alt="Best of All Time">
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--with-image"
                                            href="https://www.classcentral.com/report/most-popular-online-courses/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Most Popular of All Time&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Most Popular of All Time&quot;}">
                                            <img class="width-100 radius-small"
                                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-most-popular-of-all-time.png?auto=format&amp;blur=200&amp;h=420&amp;ixlib=php-3.3.1&amp;px=16&amp;s=6b9b3ca668420c3d807c332c51ee7f2c"
                                                data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-most-popular-of-all-time.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=8ddc221d6528da20924c85c064e17572"
                                                alt="Most Popular of All Time">
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="main-nav-dropdown__section--with-header">
                                <div class="main-nav-dropdown__section-header">
                                    <h3 class="main-nav-dropdown__section-heading">Best Courses</h3>
                                </div>

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/collection/top-free-online-courses" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Best of All Time&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Best of All Time&quot;}">
                                            <span>Best of All Time</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/best-free-online-courses-2022/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Best of the Year 2022&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Best of the Year 2022&quot;}">
                                            <span>Best of the Year 2022</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/best-free-online-courses-2021/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Best of the Year 2021&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Best of the Year 2021&quot;}">
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
                                            href="https://www.classcentral.com/report/most-popular-online-courses/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Most Popular of All Time&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Most Popular of All Time&quot;}">
                                            <span>Most Popular of All Time</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/most-popular-courses-2022/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Most Popular of the Year 2022&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Most Popular of the Year 2022&quot;}">
                                            <span>Most Popular of the Year 2022</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="https://www.classcentral.com/report/100-most-popular-online-courses-2021/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;rankings&quot;,&quot;title&quot;:&quot;Most Popular of the Year 2021&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;rankings&quot;,&quot;label&quot;:&quot;Most Popular of the Year 2021&quot;}">
                                            <span>Most Popular of the Year 2021</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>






                        <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="collections"
                            hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Collections</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--with-image"
                                            href="/collection/ivy-league-moocs" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;Ivy League Courses&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;Ivy League Courses&quot;}">
                                            <img class="width-100 radius-small"
                                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&amp;blur=200&amp;h=420&amp;ixlib=php-3.3.1&amp;px=16&amp;s=0d3af0d0d31cdbdc684a726b330a759f"
                                                data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=c49b305f32e1e971696b9852e3971c6b"
                                                alt="Ivy League Courses">
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--with-image"
                                            href="https://www.classcentral.com/report/coursera-free-online-courses/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;Free Coursera Courses&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;Free Coursera Courses&quot;}">
                                            <img class="width-100 radius-small"
                                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-coursera-free-courses.png?auto=format&amp;blur=200&amp;h=420&amp;ixlib=php-3.3.1&amp;px=16&amp;s=dbef6e5a11e80f652ab6a5ce5eb593b8"
                                                data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-coursera-free-courses.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=9044610de77ddba19697f770dd2531c7"
                                                alt="Free Coursera Courses">
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--with-image"
                                            href="https://www.classcentral.com/report/free-certificates/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;Free Certificates&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;Free Certificates&quot;}">
                                            <img class="width-100 radius-small"
                                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-free-certificates.png?auto=format&amp;blur=200&amp;h=420&amp;ixlib=php-3.3.1&amp;px=16&amp;s=f880669c2a69683d851d6be4ee71652e"
                                                data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-free-certificates.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=bc50a602c38dbf30802649312c6a4474"
                                                alt="Free Certificates">
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--with-image"
                                            href="https://www.classcentral.com/report/free-google-certifications/"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;Free Google Certifications&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;Free Google Certifications&quot;}">
                                            <img class="width-100 radius-small"
                                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-google-certs.png?auto=format&amp;blur=200&amp;h=420&amp;ixlib=php-3.3.1&amp;px=16&amp;s=0d0859ee6dce9cd586fcc06d2e5d34ec"
                                                data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-google-certs.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=ac4c48d612e7961d7335e87451e52ac4"
                                                alt="Free Google Certifications">
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="main-nav-dropdown__section--with-header">
                                <div class="main-nav-dropdown__section-header">
                                    <h3 class="main-nav-dropdown__section-heading">Monthly Course Reports</h3>
                                </div>

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/starting-this-month" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;Starting this Month&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;Starting this Month&quot;}">
                                            <span>Starting this Month</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/new-online-courses" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;New Online Courses&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;New Online Courses&quot;}">
                                            <span>New Online Courses</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/most-popular-courses" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;collections&quot;,&quot;title&quot;:&quot;Most Popular&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;collections&quot;,&quot;label&quot;:&quot;Most Popular&quot;}">
                                            <span>Most Popular</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>



                        <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-cs"
                            hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Computer Science</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/ai"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Artificial Intelligence&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Artificial Intelligence&quot;}">
                                            <span>Artificial Intelligence</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/algorithms-and-data-structures"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Algorithms and Data Structures&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Algorithms and Data Structures&quot;}">
                                            <span>Algorithms and Data Structures</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/internet-of-things" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Internet of Things&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Internet of Things&quot;}">
                                            <span>Internet of Things</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/information-technology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Information Technology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Information Technology&quot;}">
                                            <span>Information Technology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/computer-networking" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Computer Networking&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Computer Networking&quot;}">
                                            <span>Computer Networking</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/machine-learning" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Machine Learning&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Machine Learning&quot;}">
                                            <span>Machine Learning</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/devops" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;DevOps&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;DevOps&quot;}">
                                            <span>DevOps</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/deep-learning" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Deep Learning&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Deep Learning&quot;}">
                                            <span>Deep Learning</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/cryptography" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Cryptography&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Cryptography&quot;}">
                                            <span>Cryptography</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/quantum-computing" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Quantum Computing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Quantum Computing&quot;}">
                                            <span>Quantum Computing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/hci"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Human-Computer Interaction (HCI)&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Human-Computer Interaction (HCI)&quot;}">
                                            <span>Human-Computer Interaction (HCI)</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/distributed-systems" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Distributed Systems&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Distributed Systems&quot;}">
                                            <span>Distributed Systems</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/blockchain" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Blockchain Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Blockchain Development&quot;}">
                                            <span>Blockchain Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/operating-systems" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Operating Systems&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Operating Systems&quot;}">
                                            <span>Operating Systems</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/computer-graphics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Computer Graphics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Computer Graphics&quot;}">
                                            <span>Computer Graphics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted" href="/subject/cs"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Computer Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Computer Science&quot;}">
                                            <span>View all Computer Science</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-health" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Health &amp; Medicine</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/nutrition-and-wellness" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Nutrition &amp; Wellness&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Nutrition &amp; Wellness&quot;}">
                                            <span>Nutrition &amp; Wellness</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/disease-and-disorders" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Disease &amp; Disorders&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Disease &amp; Disorders&quot;}">
                                            <span>Disease &amp; Disorders</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/public-health" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Public Health&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Public Health&quot;}">
                                            <span>Public Health</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/health-care" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Health Care&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Health Care&quot;}">
                                            <span>Health Care</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/nursing" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Nursing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Nursing&quot;}">
                                            <span>Nursing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/anatomy" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Anatomy&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Anatomy&quot;}">
                                            <span>Anatomy</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/veterinary-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Veterinary Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Veterinary Science&quot;}">
                                            <span>Veterinary Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/cme"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Continuing Medical Education (CME)&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Continuing Medical Education (CME)&quot;}">
                                            <span>Continuing Medical Education (CME)</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted" href="/subject/health"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Health &amp; Medicine&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Health &amp; Medicine&quot;}">
                                            <span>View all Health &amp; Medicine</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-maths"
                            hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Mathematics</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/statistics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Statistics &amp; Probability&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Statistics &amp; Probability&quot;}">
                                            <span>Statistics &amp; Probability</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/foundations-of-mathematics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Foundations of Mathematics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Foundations of Mathematics&quot;}">
                                            <span>Foundations of Mathematics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/calculus" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Calculus&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Calculus&quot;}">
                                            <span>Calculus</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/discrete-mathematics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Discrete Mathematics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Discrete Mathematics&quot;}">
                                            <span>Discrete Mathematics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/trigonometry" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Trigonometry&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Trigonometry&quot;}">
                                            <span>Trigonometry</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/geometry" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Geometry&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Geometry&quot;}">
                                            <span>Geometry</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/algebra" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Algebra&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Algebra&quot;}">
                                            <span>Algebra</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/precalculus" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Precalculus&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Precalculus&quot;}">
                                            <span>Precalculus</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/number-theory" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Number Theory&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Number Theory&quot;}">
                                            <span>Number Theory</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/combinatorics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Combinatorics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Combinatorics&quot;}">
                                            <span>Combinatorics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/mathematical-logic" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Mathematical logic&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Mathematical logic&quot;}">
                                            <span>Mathematical logic</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/linear-programming" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Linear Programming&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Linear Programming&quot;}">
                                            <span>Linear Programming</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted" href="/subject/maths"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Mathematics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Mathematics&quot;}">
                                            <span>View all Mathematics</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-business" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Business</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/management-and-leadership" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Management &amp; Leadership&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Management &amp; Leadership&quot;}">
                                            <span>Management &amp; Leadership</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/finance" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Finance&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Finance&quot;}">
                                            <span>Finance</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/entrepreneurship" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Entrepreneurship&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Entrepreneurship&quot;}">
                                            <span>Entrepreneurship</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/marketing" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Marketing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Marketing&quot;}">
                                            <span>Marketing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/strategic-management" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Strategic Management&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Strategic Management&quot;}">
                                            <span>Strategic Management</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/industry-specific" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Industry Specific&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Industry Specific&quot;}">
                                            <span>Industry Specific</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/business-intelligence" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Business Intelligence&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Business Intelligence&quot;}">
                                            <span>Business Intelligence</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/accounting" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Accounting&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Accounting&quot;}">
                                            <span>Accounting</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/human-resources" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Human Resources&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Human Resources&quot;}">
                                            <span>Human Resources</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/project-management" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Project Management&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Project Management&quot;}">
                                            <span>Project Management</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/sales" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Sales&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Sales&quot;}">
                                            <span>Sales</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/design-thinking" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Design Thinking&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Design Thinking&quot;}">
                                            <span>Design Thinking</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/business-software" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Business Software&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Business Software&quot;}">
                                            <span>Business Software</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/risk-management" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Risk Management&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Risk Management&quot;}">
                                            <span>Risk Management</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/csr"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Corporate Social Responsibility&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Corporate Social Responsibility&quot;}">
                                            <span>Corporate Social Responsibility</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/customer-service" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Customer Service&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Customer Service&quot;}">
                                            <span>Customer Service</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/nonprofit" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Nonprofit Management&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Nonprofit Management&quot;}">
                                            <span>Nonprofit Management</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/innovation" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Innovation&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Innovation&quot;}">
                                            <span>Innovation</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/operations-management" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Operations Management&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Operations Management&quot;}">
                                            <span>Operations Management</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/business" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Business&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Business&quot;}">
                                            <span>View all Business</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-humanities" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Humanities</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/history" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;History&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;History&quot;}">
                                            <span>History</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/literature" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Literature&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Literature&quot;}">
                                            <span>Literature</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/language-learning" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Language Learning&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Language Learning&quot;}">
                                            <span>Language Learning</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/grammar-writing" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Grammar &amp; Writing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Grammar &amp; Writing&quot;}">
                                            <span>Grammar &amp; Writing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/philosophy" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Philosophy&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Philosophy&quot;}">
                                            <span>Philosophy</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/religion" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Religion&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Religion&quot;}">
                                            <span>Religion</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/esl"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;ESL&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;ESL&quot;}">
                                            <span>ESL</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/culture" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Culture&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Culture&quot;}">
                                            <span>Culture</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/sports" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Sports&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Sports&quot;}">
                                            <span>Sports</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/journalism" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Journalism&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Journalism&quot;}">
                                            <span>Journalism</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/ethics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Ethics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Ethics&quot;}">
                                            <span>Ethics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/linguistics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Linguistics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Linguistics&quot;}">
                                            <span>Linguistics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/food"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Food&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Food&quot;}">
                                            <span>Food</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/library-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Library Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Library Science&quot;}">
                                            <span>Library Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/reading" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Reading&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Reading&quot;}">
                                            <span>Reading</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/crisis-management" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Crisis Management&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Crisis Management&quot;}">
                                            <span>Crisis Management</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/humanities" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Humanities&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Humanities&quot;}">
                                            <span>View all Humanities</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-engineering" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Engineering</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/electrical-engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Electrical Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Electrical Engineering&quot;}">
                                            <span>Electrical Engineering</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/mechanical-engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Mechanical Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Mechanical Engineering&quot;}">
                                            <span>Mechanical Engineering</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/civil-engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Civil Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Civil Engineering&quot;}">
                                            <span>Civil Engineering</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/robotics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Robotics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Robotics&quot;}">
                                            <span>Robotics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/nanotechnology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Nanotechnology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Nanotechnology&quot;}">
                                            <span>Nanotechnology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/gis"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;GIS&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;GIS&quot;}">
                                            <span>GIS</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/textiles" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Textiles&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Textiles&quot;}">
                                            <span>Textiles</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/manufacturing" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Manufacturing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Manufacturing&quot;}">
                                            <span>Manufacturing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/bim"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;BIM&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;BIM&quot;}">
                                            <span>BIM</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal" href="/subject/cad"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;CAD&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;CAD&quot;}">
                                            <span>CAD</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/chemical-engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Chemical Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Chemical Engineering&quot;}">
                                            <span>Chemical Engineering</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/energy-systems" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Energy Systems&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Energy Systems&quot;}">
                                            <span>Energy Systems</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/aerospace-engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Aerospace Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Aerospace Engineering&quot;}">
                                            <span>Aerospace Engineering</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Engineering&quot;}">
                                            <span>View all Engineering</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-science" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Science</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/chemistry" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Chemistry&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Chemistry&quot;}">
                                            <span>Chemistry</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/physics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Physics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Physics&quot;}">
                                            <span>Physics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/environmental-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Environmental Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Environmental Science&quot;}">
                                            <span>Environmental Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/astronomy" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Astronomy&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Astronomy&quot;}">
                                            <span>Astronomy</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/biology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Biology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Biology&quot;}">
                                            <span>Biology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/agriculture" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Agriculture&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Agriculture&quot;}">
                                            <span>Agriculture</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/materials-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Materials Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Materials Science&quot;}">
                                            <span>Materials Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/earth-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Earth Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Earth Science&quot;}">
                                            <span>Earth Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/applied-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Applied Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Applied Science&quot;}">
                                            <span>Applied Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/forensic-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Forensic Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Forensic Science&quot;}">
                                            <span>Forensic Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/meteorology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Meteorology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Meteorology&quot;}">
                                            <span>Meteorology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Science&quot;}">
                                            <span>View all Science</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-education" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Education &amp; Teaching</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/k12" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;K12&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;K12&quot;}">
                                            <span>K12</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/higher-education" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Higher Education&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Higher Education&quot;}">
                                            <span>Higher Education</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/stem" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;STEM&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;STEM&quot;}">
                                            <span>STEM</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/teacher-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Teacher Professional Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Teacher Professional Development&quot;}">
                                            <span>Teacher Professional Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/course-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Course Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Course Development&quot;}">
                                            <span>Course Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/online-education" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Online Education&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Online Education&quot;}">
                                            <span>Online Education</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/test-prep" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Test Prep&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Test Prep&quot;}">
                                            <span>Test Prep</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/pedagogy" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Pedagogy&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Pedagogy&quot;}">
                                            <span>Pedagogy</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/education" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Education &amp; Teaching&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Education &amp; Teaching&quot;}">
                                            <span>View all Education &amp; Teaching</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-social-sciences" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Social Sciences</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/sociology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Sociology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Sociology&quot;}">
                                            <span>Sociology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/economics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Economics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Economics&quot;}">
                                            <span>Economics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/psychology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Psychology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Psychology&quot;}">
                                            <span>Psychology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/anthropology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Anthropology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Anthropology&quot;}">
                                            <span>Anthropology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/political-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Political Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Political Science&quot;}">
                                            <span>Political Science</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/law" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Law&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Law&quot;}">
                                            <span>Law</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/urban-planning" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Urban Planning&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Urban Planning&quot;}">
                                            <span>Urban Planning</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/human-rights" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Human Rights&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Human Rights&quot;}">
                                            <span>Human Rights</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/sustainability" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Sustainability&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Sustainability&quot;}">
                                            <span>Sustainability</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/governance" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Governance&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Governance&quot;}">
                                            <span>Governance</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/archaeology" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Archaeology&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Archaeology&quot;}">
                                            <span>Archaeology</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/social-work" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Social Work&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Social Work&quot;}">
                                            <span>Social Work</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/childhood-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Early Childhood Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Early Childhood Development&quot;}">
                                            <span>Early Childhood Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/social-sciences" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Social Sciences&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Social Sciences&quot;}">
                                            <span>View all Social Sciences</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-art-and-design" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Art &amp; Design</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/music" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Music&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Music&quot;}">
                                            <span>Music</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/digital-media" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Digital Media&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Digital Media&quot;}">
                                            <span>Digital Media</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/visual-arts" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Visual Arts&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Visual Arts&quot;}">
                                            <span>Visual Arts</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/design-and-creativity" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Design &amp; Creativity&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Design &amp; Creativity&quot;}">
                                            <span>Design &amp; Creativity</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/art-and-design" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Art &amp; Design&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Art &amp; Design&quot;}">
                                            <span>View all Art &amp; Design</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-data-science" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Data Science</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/bioinformatics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Bioinformatics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Bioinformatics&quot;}">
                                            <span>Bioinformatics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/big-data" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Big Data&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Big Data&quot;}">
                                            <span>Big Data</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/data-mining" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Data Mining&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Data Mining&quot;}">
                                            <span>Data Mining</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/data-analysis" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Data Analysis&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Data Analysis&quot;}">
                                            <span>Data Analysis</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/data-visualization" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Data Visualization&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Data Visualization&quot;}">
                                            <span>Data Visualization</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/jupyter" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Jupyter Notebooks&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Jupyter Notebooks&quot;}">
                                            <span>Jupyter Notebooks</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/data-science" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Data Science&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Data Science&quot;}">
                                            <span>View all Data Science</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-programming-and-software-development" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Programming</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/mobile-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Mobile Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Mobile Development&quot;}">
                                            <span>Mobile Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/web-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Web Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Web Development&quot;}">
                                            <span>Web Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/databases" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Databases&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Databases&quot;}">
                                            <span>Databases</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/game-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Game Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Game Development&quot;}">
                                            <span>Game Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/programming-languages" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Programming Languages&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Programming Languages&quot;}">
                                            <span>Programming Languages</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/software-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Software Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Software Development&quot;}">
                                            <span>Software Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/cloud-computing" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Cloud Computing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Cloud Computing&quot;}">
                                            <span>Cloud Computing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/programming-and-software-development"
                                            data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Programming&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Programming&quot;}">
                                            <span>View all Programming</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-personal-development" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Personal Development</h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/communication-skills" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Communication Skills&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Communication Skills&quot;}">
                                            <span>Communication Skills</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/career-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Career Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Career Development&quot;}">
                                            <span>Career Development</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/self-improvement" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Self Improvement&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Self Improvement&quot;}">
                                            <span>Self Improvement</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/presentation-skills" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Presentation Skills&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Presentation Skills&quot;}">
                                            <span>Presentation Skills</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/resilience" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Resilience&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Resilience&quot;}">
                                            <span>Resilience</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/personal-development" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Personal Development&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Personal Development&quot;}">
                                            <span>View all Personal Development</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>


                        <div class="main-nav-dropdown__subsection js-main-nav-subsection"
                            data-list-id="subject-infosec" hidden="">
                            <div class="main-nav-dropdown__subsection-header large-up-hidden">
                                <button aria-label="Back to main menu" data-name="MAIN_NAV_SUBSECTION_BACK"
                                    class="main-nav-dropdown__subsection-back-button">
                                    <i class="icon-chevron-left-charcoal icon-small"></i>
                                </button>

                                <h3 class="main-nav-dropdown__subsection-title">Information Security (InfoSec)
                                </h3>
                            </div>

                            <section class="main-nav-dropdown__section">

                                <ul class="list-no-style">
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/cybersecurity" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Cybersecurity&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Cybersecurity&quot;}">
                                            <span>Cybersecurity</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/network-security" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Network Security&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Network Security&quot;}">
                                            <span>Network Security</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/ethical-hacking" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Ethical Hacking&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Ethical Hacking&quot;}">
                                            <span>Ethical Hacking</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/digital-forensics" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Digital Forensics&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Digital Forensics&quot;}">
                                            <span>Digital Forensics</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/reverse-engineering" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Reverse Engineering&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Reverse Engineering&quot;}">
                                            <span>Reverse Engineering</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/pentesting" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Penetration Testing&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Penetration Testing&quot;}">
                                            <span>Penetration Testing</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/malware-analysis" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Malware Analysis&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Malware Analysis&quot;}">
                                            <span>Malware Analysis</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/devsecops" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;DevSecOps&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;DevSecOps&quot;}">
                                            <span>DevSecOps</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/osint" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;OSINT (Open Source Intelligence)&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;OSINT (Open Source Intelligence)&quot;}">
                                            <span>OSINT (Open Source Intelligence)</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/threat-intelligence" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Threat Intelligence&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Threat Intelligence&quot;}">
                                            <span>Threat Intelligence</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/infosec-certifications" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Information Security Certifications&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Information Security Certifications&quot;}">
                                            <span>Information Security Certifications</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/red-team" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Red Team&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Red Team&quot;}">
                                            <span>Red Team</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control color-charcoal"
                                            href="/subject/blue-team" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Blue Team&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject-child&quot;,&quot;label&quot;:&quot;Blue Team&quot;}">
                                            <span>Blue Team</span>
                                        </a>
                                    </li>
                                    <li class="main-nav-dropdown__item">
                                        <a class="main-nav-dropdown__item-control--highlighted"
                                            href="/subject/infosec" data-track-click="nav_click"
                                            data-track-props="{&quot;type&quot;:&quot;Subject&quot;,&quot;title&quot;:&quot;Information Security (InfoSec)&quot;}"
                                            data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;subject&quot;,&quot;label&quot;:&quot;Information Security (InfoSec)&quot;}">
                                            <span>View all Information Security (InfoSec)</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div data-name="MAIN_NAV_TRIGGER_CONTAINER" style="display: flex; align-items: center; height: 100%;"
                class="margin-right-small large-up-margin-right-medium">
                <button aria-label="Site Menu" class="block large-up-hidden" data-name="MAIN_NAV_TRIGGER">
                    <i class="icon-medium icon-menu-charcoal"></i>
                </button>
                <button data-name="LARGE_UP_MAIN_NAV_TRIGGER"
                    class="hidden weight-semi large-up-block text-1 color-charcoal padding-right-small"
                    type="button">
                    {{ __('home/navbar/navbar.Courses') }}
                </button>

            </div>



            <div data-menu="report" data-name="NAV_DROPDOWN" data-detail="{&quot;name&quot;: &quot;report&quot;}"
                class="hidden xlarge-up-flex" style="align-items: center; height: 100%;">
                <a style="width: 80px; top: 4px;" href="https://www.classcentral.com/report/"
                    data-detail="{&quot;name&quot;: &quot;report&quot;}"
                    data-track-ga="{&quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;:&quot;top&quot;}"
                    class="relative inline-block symbol-report">
                    {{ __('home/navbar/navbar.The Report') }}
                </a>
                <div class="animate-fade-hidden bg-white z-top absolute width-1-3 border-all border-gray-light shadow-light padding-medium"
                    data-menu-dropdown="report">
                    <div class="row nowrap">
                        <div class="width-1-2 border-box padding-right-small">

                            <a data-track-ga="[
                                { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Featured — Coursera’s New Deal with Google Could Cost the Company Millions&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;featured — Coursera’s New Deal with Google Could Cost the Company Millions&quot;}
                                ]"
                                href="https://www.classcentral.com/report/coursera-google-new-deal/">
                                <img class="width-100 margin-bottom-xsmall shadow-light"
                                    src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2Fcoursera-google-revenue-banner.png?auto=format&amp;ixlib=php-3.3.1&amp;s=68fd3ac08872ec505ab5f4a612b3f9d0"
                                    alt="">
                            </a>
                            <h4 class="head-3 margin-bottom-xsmall">
                                <a data-track-ga="[
                                { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Featured — Coursera’s New Deal with Google Could Cost the Company Millions&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;featured — Coursera’s New Deal with Google Could Cost the Company Millions&quot;}
                            ]"
                                    href="https://www.classcentral.com/report/coursera-google-new-deal/"
                                    class="color-charcoal">
                                    Coursera’s New Deal with Google Could Cost the Company Millions
                                </a>
                            </h4>
                            <p class="text-2 line-tight margin-bottom-xsmall">According to Coursera CFO, the
                                new terms represent a significant “shift”. Let’s dig into the numbers.
                            </p>
                            <div class="row text-2">
                                <a href="https://www.classcentral.com/report/author/dhawal/"
                                    class="color-charcoal weight-semi margin-right-small">
                                    Dhawal Shah
                                </a>
                                <time class="color-gray" datetime="2023-02-27T05:47:43">Feb 27, 2023</time>
                            </div>
                        </div>

                        <div class="width-1-2 border-box padding-left-small">
                            <h5 class="text-2 border-bottom padding-bottom-xsmall weight-semi upper">Latest
                            </h5>
                            <ol class="list-no-style">
                                <li class="text-2 border-bottom border-gray-light">
                                    <a data-track-ga="[
                                        { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Latest — Learning with MOOCs 2023: Abstracts Due April 3rd&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                                        { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;latest — Learning with MOOCs 2023: Abstracts Due April 3rd&quot;}
                                    ]"
                                        class="color-charcoal padding-vert-small block"
                                        href="https://www.classcentral.com/report/learning-with-moocs-2023/">Learning
                                        with MOOCs 2023: Abstracts Due April 3rd</a>
                                </li>
                                <li class="text-2 border-bottom border-gray-light">
                                    <a data-track-ga="[
                { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Latest — 7 Best Crystal Programming Courses to Take in 2023&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;latest — 7 Best Crystal Programming Courses to Take in 2023&quot;}
              ]"
                                        class="color-charcoal padding-vert-small block"
                                        href="https://www.classcentral.com/report/best-crystal-programming-courses/">7
                                        Best Crystal Programming Courses to Take in 2023</a>
                                </li>
                                <li class="text-2 border-bottom border-gray-light">
                                    <a data-track-ga="[
                { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Latest — The Business of Online Education: A Deep Dive Into Coursera’s Financials&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;latest — The Business of Online Education: A Deep Dive Into Coursera’s Financials&quot;}
              ]"
                                        class="color-charcoal padding-vert-small block"
                                        href="https://www.classcentral.com/report/coursera-economics/">The
                                        Business of Online Education: A Deep Dive Into Coursera’s Financials</a>
                                </li>
                                <li class="text-2 border-bottom border-gray-light">
                                    <a data-track-ga="[
                { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Latest — EIT Food’s Course Review: From Waste to Value – How to Tackle Food Waste&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;latest — EIT Food’s Course Review: From Waste to Value – How to Tackle Food Waste&quot;}
              ]"
                                        class="color-charcoal padding-vert-small block"
                                        href="https://www.classcentral.com/report/review-from-waste-to-value/">EIT
                                        Food’s Course Review: From Waste to Value – How to Tackle Food Waste</a>
                                </li>
                                <li class="text-2 ">
                                    <a data-track-ga="[
                { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Latest — 10 Best Bookkeeping Courses to Take in 2023&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;latest — 10 Best Bookkeeping Courses to Take in 2023&quot;}
              ]"
                                        class="color-charcoal padding-vert-small block"
                                        href="https://www.classcentral.com/report/best-bookkeeping-courses/">10
                                        Best Bookkeeping Courses to Take in 2023</a>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="row border-top margin-top-medium padding-top-medium">
                        <a data-track-ga="[
        { &quot;category&quot;: &quot;News&quot;, &quot;action&quot;: &quot;Index&quot;, &quot;label&quot;: &quot;Navbar&quot;},
        { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;news&quot;, &quot;label&quot;: &quot;index&quot;}
      ]"
                            class="btn-white btn-medium horz-align-right relative" href="/report/">
                            Visit
                            <i style="width: 80px; top: 1px;"
                                class="relative inline-block symbol-report">{{ __('home/navbar/navbar.The Report') }}</i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="row nowrap horz-align-right vert-align-middle">

                <div class="dropdown">
                    <button class="btn-circle btn-medium btn-white text-center cmpt-nav-add-item"><svg
                            width="24" height="24" viewBox="0 0 24 24" focusable="false"
                            class="ep0rzf NMm5M">
                            <path
                                d="M12.87 15.07l-2.54-2.51.03-.03A17.52 17.52 0 0 0 14.07 6H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z">
                            </path>
                        </svg></button>
                    <div class="dropdown-content">
                        @foreach (Locales::get() as $locale)
                            <a href="{{ url('locale/' . $locale->code) }}">
                                <img src="{{ $locale->flag }}" alt="flag"> {{ $locale->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <ul class="dropdown">

                </ul>
                <div data-menu="lists" data-name="NAV_DROPDOWN"
                    data-detail="{&quot;name&quot;: &quot;lists&quot;}"
                    class="xsmall-only-hidden margin-horz-xsmall">
                    <button
                        data-track-ga="[
                { &quot;category&quot;: &quot;Lists&quot;, &quot;action&quot;: &quot;Add Item&quot;, &quot;label&quot;: &quot;Navbar&quot;},
                { &quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;lists&quot;, &quot;label&quot;:&quot;add item&quot;}
              ]"
                        aria-label="Your lists" data-name="NAV_TRIGGER"
                        data-detail="{&quot;name&quot;: &quot;lists&quot;}"
                        class="cmpt-nav-add-item btn-circle btn-medium btn-white text-center">
                        <i class="icon-small icon-list-add-charcoal"></i>
                    </button>

                    <button aria-label="Close Lists menu" data-name="NAV_SUBMENU_CLOSE"
                        data-detail="{&quot;name&quot;: &quot;lists&quot;}"
                        class="btn-circle btn-medium btn-white text-center animate-fade-hidden row vert-align-middle horz-align-center">
                        <i class="icon-small icon-x-charcoal"></i>
                    </button>
                    <div class="animate-fade-hidden bg-white  z-top absolute border-all border-gray-light shadow-light"
                        data-menu-dropdown="lists">
                        <div class="text-center padding-medium">
                            <img width="100"
                                src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flists%2Flist-empty.png?auto=format&amp;ixlib=php-3.3.1&amp;w=100&amp;s=7005d0a45465e44b0327c67458186ec5"
                                alt="">
                            <div>
                                <p class="text-2 padding-top-small padding-horz-small">Organize and share your
                                    learning with Class Central Lists.</p>
                                <p class="text-2">View our <a
                                        data-track-ga="{&quot;category&quot;:&quot;nav_click&quot;,&quot;action&quot;:&quot;lists&quot;,&quot;label&quot;:&quot;showcase&quot;}"
                                        href="/lists">Lists Showcase</a></p>

                                <a href="/signup" data-name="SIGNUP_LINK">
                                    {{ __('home/navbar/navbar.Sign Up') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden xlarge-up-inline-block">
                    <a data-track-click="nav_click"
                        data-track-props="{ &quot;type&quot;: &quot;User&quot;, &quot;title&quot;: &quot;Login&quot; }"
                        data-track-ga="{&quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;user&quot;, &quot;label&quot;:&quot;login&quot;}"
                        href="/login" class="text-1 weight-semi color-charcoal">
                        {{ __('home/navbar/navbar.Log In') }} </a>
                    <span class="inline-block padding-horz-xxsmall color-charcoal">or</span>
                    <a data-name="SIGNUP_LINK" data-detail="{&quot;source&quot;: &quot;navbar&quot; }"
                        data-track-click="nav_click"
                        data-track-props="{ &quot;type&quot;: &quot;User&quot;, &quot;title&quot;: &quot;Register&quot; }"
                        data-track-ga="{&quot;category&quot;: &quot;nav_click&quot;, &quot;action&quot;: &quot;user&quot;, &quot;label&quot;:&quot;register&quot;}"
                        href="/signup" class="text-1 weight-semi color-charcoal">
                        {{ __('home/navbar/navbar.Sign Up') }}
                    </a>
                </div>

                <div data-menu="user" data-name="NAV_DROPDOWN" data-detail="{&quot;name&quot;: &quot;user&quot;}"
                    class="xlarge-up-hidden">
                    <button aria-label="Profile &amp; Settings" data-name="NAV_TRIGGER"
                        data-detail="{&quot;name&quot;: &quot;user&quot;}">
                        <i class="icon-profile-charcoal icon-medium"></i>
                    </button>
                    <button aria-label="Close Profile &amp; Settings menu" data-name="NAV_SUBMENU_CLOSE"
                        data-detail="{&quot;name&quot;: &quot;user&quot;}" class="animate-fade-hidden">
                        <i class="icon-medium icon-x-charcoal"></i>
                    </button>

                </div>

            </div>
        </nav>


    </div>

    <div class="animate-fade-hidden width-100 height-100 fixed top left" data-name="BLANKET" data-detail="{}"
        data-header-blanket=""></div>
</header>


<script>
    const navbarToggle = navbar.querySelector("#navbar-toggle");
    const navbarMenu = document.querySelector("#navbar-menu");
    const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
    let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

    const toggleNavbarVisibility = () => {
        isNavbarExpanded = !isNavbarExpanded;
        navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
    };

    navbarToggle.addEventListener("click", toggleNavbarVisibility);

    navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
    navbarMenu.addEventListener("click", toggleNavbarVisibility);
</script>
