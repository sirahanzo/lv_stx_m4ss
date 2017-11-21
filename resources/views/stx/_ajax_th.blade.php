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