<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->

    <div class="app-brand demo">
        <a href="{{url('/')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                @include('admin._partials.macros',["height"=>20])
            </span>
            <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span>
        </a>

        <a href="{{ route('admin.dashboard') }}" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>
        <li
            class="{{ request()->routeIs('experiences.index') || request()->routeIs('experiences.create') || request()->routeIs('experiences.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-briefcase"></i>
                <div data-i18n="Dashboards">Experiences</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('experiences.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('experiences.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('experiences.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('experiences.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('educations.index') || request()->routeIs('educations.create') || request()->routeIs('educations.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div data-i18n="Dashboards">Educations</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('educations.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('educations.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('educations.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('educations.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('projects.index') || request()->routeIs('projects.create') || request()->routeIs('projects.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-axe"></i>
                <div data-i18n="Dashboards">Projects</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('projects.index') ? 'active' : '' }} menu-item">
                    <a href="{{route('projects.index')}}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('projects.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('projects.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('skills.index') || request()->routeIs('skills.create') || request()->routeIs('skills.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-topology-star-3"></i>
                <div data-i18n="Dashboards">Skills</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('skills.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('skills.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('skills.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('skills.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('certificates.index') || request()->routeIs('certificates.create') || request()->routeIs('certificates.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-certificate"></i>
                <div data-i18n="Dashboards">Cartificates</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('certificates.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('certificates.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('certificates.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('certificates.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('blogs.index') || request()->routeIs('blogs.create') || request()->routeIs('blogs.edit') || request()->routeIs('blogs.show') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Blogs</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('blogs.index') }}"
                        class="{{ request()->routeIs('blog.index') ? 'active' : '' }} menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('blogs.create') }}"
                        class="{{ request()->routeIs('blog.create') ? 'active' : '' }} menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ request()->routeIs('appointments.index') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-calendar-time"></i>
                <div data-i18n="Dashboards">Appointment</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">1</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('appointments.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('appointments.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ request()->routeIs('contacts.index') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-braces"></i>
                <div data-i18n="Dashboards">Contect</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">1</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('contacts.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('contacts.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>