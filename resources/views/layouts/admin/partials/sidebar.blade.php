<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
        <p class="mb-0 font-roboto">Human Resources Department</p>
        <ul>
            <li>
                <span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li>
                <span>2 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li>
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Retour</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/commerciale')}}" href="javascript:void(0)"><i data-feather="bookmark"></i><span>Gestion commerciale</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/commerciale')}};">
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">CLIENTS<span class="sub-arrow"><i  class="icofont icofont-people m-2"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('commerciale.client.create')}}" class="{{routeActive('commerciale.client.create')}}">Ajouter un client</a></li>
                                    <li><a href="{{ route('commerciale.client.index')}}" class="{{routeActive('commerciale.client.index')}}">Les clients</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">COMMANDES<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('commerciale.vente.index')}}" class="{{routeActive('commerciale.vente.index')}}">Saisie Commande</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
