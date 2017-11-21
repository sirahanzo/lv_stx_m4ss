<table class="table table-bordered table-xs">
    <thead class="bg-primary text-white ">
    <tr class="">
        <th>Chanel</th>
        <th class="text-lg-center">State</th>
        <th class="text-lg-center">Alarm</th>

    </tr>
    </thead>
    <tbody>
    @foreach($di as $dt)
        <tr>
            <td>{{ $dt->parameter }}</td>

            <td class="text-lg-center">
                @if($dt->state == 'disable')
                    Disable
                @elseif($dt->monitoring->value == 0)
                    Close
                @elseif ($dt->monitoring->value ==1)
                    Open
                @else
                    Comm. Lost
                @endif

            </td>
            <td class="text-lg-center">
                @if($dt->state == 'disable')
                    <i class="fa fa-times"></i>
                @elseif($dt->monitoring->value == 1 or $dt->monitoring->value == 2)
                    <i class="fa fa-bell text-danger blink"></i>
                @elseif($dt->monitoring->value == 3)
                    <i class="fa fa-spinner text-danger"></i>
                @else
                    <i class="fa fa-check text-success"></i>
                @endif

            </td>
        </tr>
    @endforeach

    </tbody>
</table>
