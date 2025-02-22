<header class="header template__subgrid">
    <div class="header__content template__width-content flex flex-jst-btw flex-alg-cnt">
            <div class="header__logo logo">
                <a href="/" class="logo__link">
                    <span class="logo__text sr-only">My portfolio</span>
                    <img src="/assets/images/header/web-programming.png" alt="logo" class="logo__image" height="60px" width="60px">
                </a>
            </div>
            <nav id="primary-navigation" class="navigation flex flex-alg-cnt" area-visible="false">
                <ul class="menu">
                    <li class="menu__item menu__item--first-lvl">
                        <a href="#" class="menu__link">Menu-category-1</a>
                    </li>
                    <li class="menu__item menu__item--first-lvl menu__item--nested" aria-controls="customer-account-menu2" area-expand="false">
                        <span class="menu__link">Custome account menu</span>
                        <ul id="customer-account-menu2" class="menu__sub-menu" area-visible="false">
                            <li class="menu__item menu__item--second-lvl">
                                <a href="/customer/account/signup.php" class="menu__link">Sign up</a>
                            </li>
                            <li class="menu__item menu__item--second-lvl">
                                <a href="/customer/account/login.php" class="menu__link">Log in</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button id="burger-button" class="header__burger-menu" aria-controls="primary-navigation" area-expand="false">
                <span class="header__burger-line"></span>
                <span class="sr-only">Burger menu</span>
            </button>
    </div>
</header>