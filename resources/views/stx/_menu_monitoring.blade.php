
<ul class="nav nav-tabs nav-top-border no-hover-bg  nav-justified">
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2)== 'analog-input')?'active': '' }} " id="active-tab1" href=" {{ url('monitoring/analog-input') }}" aria-controls="active1"
           aria-expanded="true">Analog Input</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2)== 'digital-input')?'active': '' }} " id="link-tab1" href="{{ url('monitoring/digital-input') }}" aria-controls="link1"
           aria-expanded="false">Digital Input</a>
    </li>
    <li class="nav-item hidden-xs-up">
        <a class="nav-link {{ (Request::segment(2)== 'digital-output')?'active': '' }} " id="link-tab1" href="{{ url('monitoring/digital-output') }}" aria-controls="link1"
           aria-expanded="false">Digital Output</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2)== 'temperature')?'active': '' }} " id="link-tab1" href="{{ url('monitoring/temperature') }}" aria-controls="link1" aria-expanded="false">Temperature</a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ (Request::segment(2)== 'sps')?'active': '' }} " id="link-tab1" href="{{ url('monitoring/sps') }}" aria-controls="link1">Solar Panel System</a>
    </li>
</ul>