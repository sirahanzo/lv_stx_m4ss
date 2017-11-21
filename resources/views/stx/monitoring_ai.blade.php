@extends('layouts.stx')
@section('content')

    <div class="table-responsive" id="monitoring">
        <section class="col-lg-8">
            <table class="table table-bordered ">
                <thead class="bg-primary text-white">
                <tr>
                    <th class="text-lg-center" colspan="2">Channel</th>
                    <th class="text-lg-center  width-25-per" colspan="2">Value</th>
                    <th class="text-lg-center width-15-per">Alarm</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ai as $dt)
                    <tr>
                        <td class="text-lg-center">
                            @if($dt->monitoring['alarm'] == 0 )
                                <i class="fa fa-circle  text-success blink"></i>
                            @else
                                <i class="fa fa-bell  text-danger blink"></i>
                            @endif

                        </td>
                        <td class=""> {{$dt->parameter}}</td>
                        <td class="text-lg-center">
                            {{ $dt->monitoring['value'] }}
                        </td>
                        <td class="text-lg-center">
                            {{ $dt->unit }}

                        </td>
                        <td class="text-lg-center">
                            @if($dt->monitoring['alarm'] ==1)
                                LOW
                            @elseif($dt->monitoring['alarm'] == 2)
                                HI
                            @else
                                <i class="fa fa-check  text-success"></i>

                            @endif
                        </td>

                    </tr>

                @endforeach

                </tbody>
            </table>
        </section>
    </div>
@endsection

@section('js')
    @include('stx._script_ajax_monitoring')
@endsection

