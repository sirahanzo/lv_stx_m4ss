@extends('layouts.stx')

@section('content')
    <div class="table-responsive" id="monitoring">
        <section class="">
            <section class="">
                <div class="  {{ ($sett[1]->state == 'disable')?'col-lg-12': 'col-lg-6' }}">

                    <table class="table table-bordered table-xs {{ ($sett[0]->state == 'disable')?'hidden-xs-up': '' }} ">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th colspan="2" class="text-lg-center ">MPPT-60 1</th>
                            <th class="text-lg-center width-25-per  " colspan="2">Value</th>
                            <th class="text-lg-center width-15-per">Alarm</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-lg-center">
                                @if($chg1[0]->monitoring->value == 4)
                                    <i class="fa fa-bell text-danger blink"></i>
                                @else
                                    <i class="fa fa-circle  text-success blink"></i>
                                @endif
                            </td>
                            <td class="text-uppercase"><b>Charging State</b></td>
                            <td colspan="2" class="text-lg-center text-uppercase text-bold-700">
                                <?php
                                switch ($chg1[0]->monitoring->value) {
                                    case '1':
                                        echo "Night Check";
                                        break;
                                    case "2":
                                        echo "Disconnect";
                                        break;
                                    case "3":
                                        echo "Night";
                                        break;
                                    case "4":
                                        echo "Fault";
                                        break;
                                    case "5":
                                        echo "MPPT";
                                        break;
                                    case "6":
                                        echo "Absorption";
                                        break;
                                    case "7":
                                        echo "Float";
                                        break;
                                    case "8":
                                        echo "Equalize";
                                        break;
                                    case "9":
                                        echo "Slave";
                                        break;

                                    default:
                                        echo "Start";
                                }
                                ?>
                            </td>
                            <td class="text-lg-center">
                                @if($chg1[0]->monitoring->value == 4)
                                    <i class="fa fa-exclamation text-danger"></i>
                                @else
                                    <i class="fa fa-check  text-success"></i>
                                @endif
                            </td>
                        </tr>

                        @foreach($sps1 as $dt)
                            <tr>

                                <td class="text-lg-center ">
                                    @if($dt->monitoring->alarm == 0)
                                        <i class="fa fa-circle  text-success blink"></i>
                                    @else
                                        <i class="fa fa-bell text-danger blink"></i>
                                    @endif
                                </td>
                                <td>{{ $dt->parameter }}</td>
                                <td class="text-lg-center">
                                    {{ $dt->monitoring->value }}
                                </td>
                                <td class="text-lg-center"> {{ $dt->unit }}</td>

                                <td class="text-lg-center">
                                    @if($dt->monitoring->alarm == 0)
                                        <i class="fa fa-check  text-success"></i>
                                    @elseif($dt->monitoring->alarm == 1)
                                        LOW
                                    @elseif($dt->monitoring->alarm == 2)
                                        HIGH
                                    @elseif($dt->monitoring->alarm == 3)
                                        LOST
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class=" col-lg-6 {{ ($sett[0]->state == 'disable')?'col-lg-12': 'col-lg-6' }}">
                    <table class="table table-bordered  table-xs {{ ($sett[1]->state == 'disable')?'hidden-xs-up': '' }}  ">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th colspan="2" class="text-lg-center ">MPPT-60 2</th>
                            <th class="text-lg-center width-25-per  " colspan="2">Value</th>
                            <th class="text-lg-center width-15-per">Alarm</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-lg-center">
                                @if($chg2[0]->monitoring->value == 4)
                                    <i class="fa fa-bell text-danger blink"></i>
                                @else
                                    <i class="fa fa-circle  text-success blink"></i>
                                @endif
                            </td>
                            <td class="text-uppercase"><b>Charging State</b></td>
                            <td colspan="2" class="text-lg-center text-uppercase text-bold-700">
                                <?php
                                switch ($chg2[0]->monitoring->value) {
                                    case '1':
                                        echo "Night Check";
                                        break;
                                    case "2":
                                        echo "Disconnect";
                                        break;
                                    case "3":
                                        echo "Night";
                                        break;
                                    case "4":
                                        echo "Fault";
                                        break;
                                    case "5":
                                        echo "MPPT";
                                        break;
                                    case "6":
                                        echo "Absorption";
                                        break;
                                    case "7":
                                        echo "Float";
                                        break;
                                    case "8":
                                        echo "Equalize";
                                        break;
                                    case "9":
                                        echo "Slave";
                                        break;

                                    default:
                                        echo "Start";
                                }
                                ?>
                            </td>
                            <td class="text-lg-center">
                                @if($chg2[0]->monitoring->value == 4)
                                    <i class="fa fa-exclamation text-danger"></i>
                                @else
                                    <i class="fa fa-check  text-success"></i>
                                @endif
                            </td>
                        </tr>

                        @foreach($sps2 as $dt)
                            <tr>

                                <td class="text-lg-center ">
                                    @if($dt->monitoring->alarm == 0)
                                        <i class="fa fa-circle  text-success blink"></i>
                                    @else
                                        <i class="fa fa-bell text-danger blink"></i>
                                    @endif
                                </td>
                                <td>{{ $dt->parameter }}</td>
                                <td class="text-lg-center">
                                    {{ $dt->monitoring->value }}
                                </td>
                                <td class="text-lg-center"> {{ $dt->unit }}</td>

                                <td class="text-lg-center">
                                    @if($dt->monitoring->alarm == 0)
                                        <i class="fa fa-check  text-success"></i>
                                    @elseif($dt->monitoring->alarm == 1)
                                        LOW
                                    @elseif($dt->monitoring->alarm == 2)
                                        HIGH
                                    @elseif($dt->monitoring->alarm == 3)
                                        LOST
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </section>
        </section>
    </div>
@endsection

@section('js')
    @include('stx._script_ajax_monitoring')
@endsection
