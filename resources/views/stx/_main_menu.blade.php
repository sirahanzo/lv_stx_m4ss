<ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
    <li data-menu="dropdown" class="dropdown nav-item {{ (Request::segment(1) == 'site-info')? 'active':'' }} "><a href="{{url('site-info')}}"  class="dropdown-toggle nav-link"><i class="ft-globe"></i><span>SITE INFO</span></a>
    </li>
    <li data-menu="dropdown" class="dropdown nav-item {{ (Request::segment(1) == 'monitoring')? 'active':'' }}  "><a href="{{ url('monitoring/analog-input') }}" class="dropdown-toggle nav-link"><i class="ft-monitor"></i><span>MONITORING</span></a>
    </li>
    <li data-menu="dropdown" class="dropdown nav-item {{ (Request::segment(1) == 'datalogs')? 'active':'' }}  "><a href="{{ url('datalogs/monitoring') }}"  class="dropdown-toggle nav-link"><i class="ft-file"></i><span>DATALOGS</span></a>
    </li>
    <li data-menu="dropdown" class="dropdown nav-item {{ (Request::segment(1) == 'settings')? 'active':'' }}  "><a href="{{ url('settings/site-info') }}"  class="dropdown-toggle nav-link"><i class="ft-cog"></i><span>SETTINGS</span></a>
    </li>
    <li data-menu="dropdown" class="dropdown nav-item {{ (Request::segment(1) == 'administration')? 'active':'' }}  "><a href="{{ url('administration')}}"  class="dropdown-toggle nav-link"><i class="ft-user-plus"></i><span>ADMINISTRATIONS</span></a>
    </li>

</ul>