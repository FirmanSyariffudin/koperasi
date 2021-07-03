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
            <li class="nav-item dropdown {{ Request::route()->getName() == 'request.index' ? 'active' : (
                Request::route()->getName() == 'request.create' ? 'active' : (
                    Request::route()->getName() == 'request.approv' ? 'active' : (
                        Request::route()->getName() == 'request.edit' ? 'active' : (
                            Request::route()->getName() == 'request.show' ? 'active' : (
                                Request::route()->getName() == 'request.deny' ? 'active' : ''))))) }}">
                <a href="{{ route('request.index') }}" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-toolbox"></i>
                    <span>{{ __('FORM PERMOHONAN') }}</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::route()->getName() == 'request.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('request.index') }}">{{ __('Daftar Permohonan') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'request.create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('request.create') }}">{{ __('Tambah Permohonan') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ Request::route()->getName() == 'member.index' ? 'active' : (
                Request::route()->getName() == 'member.create' ? 'active' : (
                    Request::route()->getName() == 'member.approv' ? 'active' : (
                        Request::route()->getName() == 'member.edit' ? 'active' : (
                            Request::route()->getName() == 'member.show' ? 'active' : (
                                Request::route()->getName() == 'member.deny' ? 'active' : ''))))) }}">
                <a href="{{ route('member.index') }}" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-building"></i>
                    <span>{{ __('FORM ANGGOTA') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::route()->getName() == 'member.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('member.index') }}">{{ __('Daftar Anggota') }}</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'member.create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('member.create') }}">{{ __('Tambah Anggota') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>