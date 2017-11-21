@extends('layouts.stx')

@section('css')

@endsection

@section('content')
    <div class="table-responsive">
        <div class="alert alert-danger hidden-xs-up">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Error!</strong>                                     </div>
        <form class="form-horizontal" method="post" action="http://localhost/stx_m4ss/settings/save_th">
            <div class="panel-body dash-unit ">
                <table class="table table-bordered table-hover1">
                    <thead class="bg-primary text-white">
                    <tr>
                        <th class=" ">Parameter</th>
                        <th class="text-lg-center" colspan="2">Treshold High</th>
                        <th class="text-lg-center">Scale</th>
                        <th class="text-lg-center  ">State</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Temperature 1</td>
                        <td class="text-lg-center"><input name="id[201][max]" type="text" class="form-control text-center" value="39"></td>
                        <td class="text-lg-center">°C </td>
                        <td class="text-lg-center"><input name="id[201][scale]" type="text" class="form-control text-center" value="0"></td>
                        <td class="text-lg-center">
                            <select class="form-control" name="id[201][state]">
                                <option value="Enable">Enable</option>
                                <option value="Disable">Disable</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>Temperature 2</td>
                        <td class="text-lg-center"><input name="id[203][max]" type="text" class="form-control text-center" value="0"></td>
                        <td class="text-lg-center">°C </td>
                        <td class="text-lg-center"><input name="id[203][scale]" type="text" class="form-control text-center" value="0"></td>
                        <td class="text-lg-center">
                            <select class="form-control" name="id[203][state]">
                                <option value="Enable">Enable</option>
                                <option value="Disable">Disable</option>
                            </select>
                        </td>

                    </tr>

                    </tbody>
                </table>
                <br>
                <div class="col-md-2 offset-lg-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-check-square-o"></i> Save
                    </button>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-default btn-block">
                        <i class="fa fa-refresh"></i> Refresh
                    </button>
                </div>
            </div>


        </form>

    </div>@endsection

@section('js')

@endsection