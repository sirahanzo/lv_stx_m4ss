@extends('layouts.stx')

@section('content')
    <div class="table-responsive" id="monitoring">
        <section>
            <section>
                <div class="col-md-2 offset-lg-2 hidden-xs-up">
                    <div class="donation-meter " style="margin-top: 10px;">
                        <br>
                        <span class="glass">
                                          <strong class="ticks" style="bottom: 10%">--</strong>
                                          <strong class="ticks" style="bottom: 20%">--</strong>
                                          <strong class="ticks" style="bottom: 30%">--</strong>
                                          <strong class="ticks" style="bottom: 40%">--</strong>
                                          <strong class="ticks" style="bottom: 50%">--</strong>
                                          <strong class="ticks" style="bottom: 60%">--</strong>
                                          <strong class="ticks" style="bottom: 70%">--</strong>
                                          <strong class="ticks" style="bottom: 80%">--</strong>
                                          <strong class="ticks" style="bottom: 90%">--</strong><strong class="total" style="bottom: 62.4%">62.4°C </strong>
                                          <span class="amount" style="height: 62.4%"></span>
                                          </span>
                        <div class="bulb">
                            <span class="red-circle"></span>
                            <span class="filler"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered ">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th>Parameter</th>
                            <th class="text-lg-center width-25-per" colspan="2">Data</th>

                            <th class="text-lg-center width-25-per">Alarm</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($th as $dt)
                            <tr>
                                <td>{{ $dt->parameter }}</td>
                                <td class="text-lg-center ">
                                    @if($dt->state == 'disable')
                                        -
                                    {{--@elseif($dt->monitoring->value == 255)--}}
                                        {{-----}}
                                    @else
                                        {{ $dt->monitoring->value }}
                                    @endif
                                </td>
                                <td class="text-lg-center">°C</td>

                                <td class="text-lg-center">
                                    @if($dt->state == 'disable')
                                        <i class="fa fa-times"></i>Disable
                                    @elseif($dt->monitoring->alarm == 1)
                                        <i class="fa fa-exclamation-triangle text-danger blink"></i> LOW
                                    @elseif($dt->monitoring->alarm == 2)
                                        <i class="fa fa-exclamation-triangle text-danger blink"></i> HIGH
                                    @elseif($dt->monitoring->alarm == 3)
                                       <i class="fa fa-spinner text-danger"></i> COMM. LOST
                                    @else
                                        <i class="fa fa-check text-success"></i>
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
