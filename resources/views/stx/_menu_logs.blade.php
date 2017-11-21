<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'monitoring')? 'active':'' }} " id="active-tab1" href="{{ url('datalogs/monitoring') }}" aria-controls="active1" aria-expanded="true">Monitoring Log</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'alarm')? 'active':'' }} " id="link-tab1" href="{{ url('datalogs/alarm') }}" aria-controls="link1" aria-expanded="false">Alarm Log</a>
    </li>

</ul>