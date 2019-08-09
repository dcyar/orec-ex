<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Dashboard</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('dashboard') }}" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Inicio</span>
            </a><!-- br-menu-link -->
        </li>
        <!-- br-menu-item -->
        {{-- <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Cards &amp; Widgets</span>
            </a>
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="card-dashboard.html" class="sub-link">Dashboard</a></li>
                <li class="sub-item"><a href="card-social.html" class="sub-link">Blog &amp; Social Media</a></li>
                <li class="sub-item"><a href="card-listing.html" class="sub-link">Shop &amp; Listing</a></li>
            </ul>
        </li> --}}
        <!-- br-menu-link -->
    </ul>
    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Actas</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('nacimientos.index') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-document tx-24"></i>
                <span class="menu-item-label">Nacimientos</span>
            </a><!-- br-menu-link -->
        </li>
        <!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ route('matrimonios.index') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-document tx-24"></i>
                <span class="menu-item-label">Matrimonios</span>
            </a><!-- br-menu-link -->
        </li>
        <!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ route('defunciones.index') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-document tx-24"></i>
                <span class="menu-item-label">Defunciones</span>
            </a><!-- br-menu-link -->
        </li>
        <!-- br-menu-item -->
    </ul>
</ul>
<label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Tramites</label>
<ul class="br-sideleft-menu">
    <li class="br-menu-item">
        <a href="{{ route('solterias.index') }}" class="br-menu-link">
            <i class="menu-item-icon icon ion-document tx-24"></i>
            <span class="menu-item-label">Certificado de Solteria</span>
        </a><!-- br-menu-link -->
    </li>
    <!-- br-menu-item -->
</ul>
    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Ayuda y Soporte</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('sistema') }}" class="br-menu-link">
            <i class="menu-item-icon icon ion-help-circled tx-24"></i>
            <span class="menu-item-label">Acerca del Sistema</span>
            </a><!-- br-menu-link -->
        </li>
    </ul>
    <!-- br-sideleft-menu -->
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('autor') }}" class="br-menu-link">
            <i class="menu-item-icon icon ion-coffee tx-24"></i>
            <span class="menu-item-label">Autor</span>
            </a><!-- br-menu-link -->
        </li>
    </ul>
    <!-- br-sideleft-menu -->
</div>
<!-- br-sideleft -->