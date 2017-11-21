@extends('layouts.stx')
@section('content')

    <div class="table-responsive fadeInUp">
        <table class="table table-xs">
            <thead>
            <tr>
                <th>#</th>
                <th>Description </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">SITE ID</th>
                <td> : {{ $site_info->site_id }}</td>
            </tr>
            <tr>
                <th>SITE NAME</th>
                <td> : {{ $site_info->name }}1</td>
            </tr>
            <tr>
                <th>ADDRESS</th>
                <td> : {{ $site_info->address }}</td>
            </tr>
            <tr>
                <th>MODEL</th>
                <td> : {{ $site_info->model }}</td>
                </td>
            </tr>
            <tr>
                <th>PART NUMBER</th>
                <td> : {{ $site_info->sn }}</td>
                </td>
            </tr>
            <tr>
                <th>SERIAL NUMBER</th>
                <td> : {{ $site_info->pn }}</td>
                </td>
            </tr>
            <tr>
                <th>SOFTWARE</th>
                <td> : {{ $site_info->software }}</td>
                </td>
            </tr>
            <tr>
                <th>HARDWARE</th>
                <td> : {{ $site_info->hardware }}</td>
            </tr>
            <tr>
                <th>IP ADDRESS</th>
                <td> : {{ $network->ipaddress }}</td>
            </tr>
            <tr>
                <th>NETMASK</th>
                <td> : {{ $network->netmask }}</td>
            </tr>
            <tr>
                <th>GATEWAY</th>
                <td> : {{ $network->gateway }}</td>
            </tr>
            <tr>
                <th>SNMP TRAP </th>
                <td> : {{ $network->snmp1 }}</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
