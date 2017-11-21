<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'date-time')? 'active': '' }}  " id="active-tab1" href="{{ url('settings/date-time') }}" aria-controls="active1" aria-expanded="true">Date & Time</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'site-info')? 'active': '' }}  " id="link-tab1" href="{{ url('settings/site-info') }}" aria-controls="active1" aria-expanded="true">Site Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'networks')? 'active': '' }} " id="link-tab1" href="{{ url('settings/networks') }}" aria-controls="link1" aria-expanded="false">Networks</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'analog-input')? 'active': '' }} " id="link-tab1" href="{{ url('settings/analog-input') }}" aria-controls="link1" aria-expanded="false">Analog Input</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'digital-input')? 'active': '' }} " id="link-tab1" href="{{ url('settings/digital-input') }}" aria-controls="link1" aria-expanded="false">Digital Input</a>
    </li>
    <li class="nav-item hidden-xs-up">
        <a class="nav-link {{ (Request::segment(2) == 'digital-output')? 'active': '' }} " id="link-tab1" href="{{ url('settings/digital-output') }}" aria-controls="link1" aria-expanded="false">Digital Output</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'temperature')? 'active': '' }} " id="link-tab1" href="{{ url('settings/temperature') }}" aria-controls="link1" aria-expanded="false">Temperature</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2) == 'sps')? 'active': '' }} " id="link-tab1" href="{{ url('settings/sps') }}" aria-controls="link1" aria-expanded="false">Solar Panel System</a>
    </li>
</ul>