<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ __('pages.title') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">{{ __('pages.brand') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">{{ __('Menu Utama') }}</li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a>
            </li>
            <li class="menu-header">{{ __('Data') }}</li>
            <!-- <li class="nav-item dropdown {{ Request::route()->getName() == 'production.index' ? 'active' : (
                Request::route()->getName() == 'production.create' ? 'active' : (
                    Request::route()->getName() == 'production.approv' ? 'active' : (
                        Request::route()->getName() == 'production.edit' ? 'active' : (
                            Request::route()->getName() == 'production.show' ? 'active' : (
                                Request::route()->getName() == 'production.deny' ? 'active' : ''))))) }}">
                <a href="{{ route('production.index') }}" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-tools"></i>
                    <span>{{ __('Alat Produksi') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::route()->getName() == 'production.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('production.index') }}">{{ __('Daftar') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'production.create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('production.create') }}">{{ __('Tambah') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'production.approv' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('production.approv') }}">{{ __('Persetujuan') }}</a>
                    </li>
                </ul>
            </li> -->
            <li class="nav-item dropdown {{ Request::route()->getName() == 'equipment.index' ? 'active' : (
                Request::route()->getName() == 'equipment.create' ? 'active' : (
                    Request::route()->getName() == 'equipment.approv' ? 'active' : (
                        Request::route()->getName() == 'equipment.edit' ? 'active' : (
                            Request::route()->getName() == 'equipment.show' ? 'active' : (
                                Request::route()->getName() == 'equipment.deny' ? 'active' : ''))))) }}">
                <a href="{{ route('equipment.index') }}" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-toolbox"></i>
                    <span>{{ __('FORM PERMOHONAN') }}</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::route()->getName() == 'equipment.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('equipment.index') }}">{{ __('Daftar Permohonan') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'equipment.create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('equipment.create') }}">{{ __('Tambah Permohonan') }}</a>
                    </li>
                    <!-- <li class="{{ Request::route()->getName() == 'equipment.approv' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('equipment.approv') }}">{{ __('Persetujuan') }}</a>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item dropdown {{ Request::route()->getName() == 'rental.index' ? 'active' : (
                Request::route()->getName() == 'rental.create' ? 'active' : (
                    Request::route()->getName() == 'rental.approv' ? 'active' : (
                        Request::route()->getName() == 'rental.edit' ? 'active' : (
                            Request::route()->getName() == 'rental.show' ? 'active' : (
                                Request::route()->getName() == 'rental.deny' ? 'active' : ''))))) }}">
                <a href="{{ route('rental.index') }}" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-building"></i>
                    <span>{{ __('FORM ANGGOTA') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::route()->getName() == 'rental.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('rental.index') }}">{{ __('Daftar Anggota') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'rental.create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('rental.create') }}">{{ __('Tambah Anggota') }}</a>
                    </li>
                    <!-- <li class="{{ Request::route()->getName() == 'rental.approv' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('rental.approv') }}">{{ __('Persetujuan') }}</a>
                    </li> -->
                </ul>
            </li>
            <!-- <li class="nav-item dropdown {{ Request::route()->getName() == 'vehicle.index' ? 'active' : (
                Request::route()->getName() == 'vehicle.create' ? 'active' : (
                    Request::route()->getName() == 'vehicle.approv' ? 'active' : (
                        Request::route()->getName() == 'vehicle.edit' ? 'active' : (
                            Request::route()->getName() == 'vehicle.show' ? 'active' : (
                                Request::route()->getName() == 'vehicle.deny' ? 'active' : ''))))) }}">
                <a href="{{ route('vehicle.index') }}" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-truck"></i>
                    <span>{{ __('Kendaraan') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::route()->getName() == 'vehicle.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('vehicle.index') }}">{{ __('Daftar') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'vehicle.create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('vehicle.create') }}">{{ __('Tambah') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'vehicle.approv' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('vehicle.approv') }}">{{ __('Persetujuan') }}</a>
                    </li>
                </ul>
            </li> -->
            <!-- @if (Auth::user()->role_id == 1)
            <li class="{{ Request::route()->getName() == 'users.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users"></i>
                    <span>{{ __('Pengguna') }}</span></a>
            </li>
            <li class="{{ Request::route()->getName() == 'room.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('room.index') }}"><i class="fas fa-map-marker-alt"></i>
                    <span>{{ __('Ruangan') }}</span></a>
            </li>
            @endif -->
        </ul>
    </aside>
</div>