@extends('layouts.stx')

@section('css')

@endsection

@section('content')
    <div class="table-responsive">
        <div class="alert alert-danger hidden-xs-up">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Error!</strong>                                     </div>
        <form class="form-horizontal" method="post" action="http://localhost/stx_m4ss/settings/save_ai">
            <div class="panel-body dash-unit ">
                <table class="table table-bordered table-hover1 table-xs" id="table1">
                    <thead class="bg-primary text-white">
                    <tr>
                        <th>Chanel</th>
                        <th class="text-lg-center">Treshold Lower</th>
                        <th class="text-lg-center">Treshold Upper</th>
                        <th class="text-lg-center">Unit</th>
                        <th class="text-lg-center">Scale</th>
                        <th class="text-lg-center">State</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Analog Input 1</td>
                        <td class="text-lg-center"><input name="id[3][min]" class="form-control  text-lg-center" value="99"></td>
                        <td class="text-lg-center"><input name="id[3][max]" class="form-control  text-lg-center" value="0"></td>
                        <td class="text-lg-center">A</td>
                        <td class="text-lg-center"><input name="id[3][scale]" class="form-control   text-lg-center" value="0"></td>
                        <td class="text-lg-center">
                            <select class="form-control nav input-s-sm col-xs-2" name="id[3][state]">
                                <option value="Enable">Enable</option>
                                <option value="Disable">Disable</option>                                                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>Analog Input 2</td>
                        <td class="text-lg-center"><input name="id[2][min]" class="form-control  text-lg-center" value="0"></td>
                        <td class="text-lg-center"><input name="id[2][max]" class="form-control  text-lg-center" value="0"></td>
                        <td class="text-lg-center">A</td>
                        <td class="text-lg-center"><input name="id[2][scale]" class="form-control   text-lg-center" value="0"></td>
                        <td class="text-lg-center">
                            <select class="form-control nav input-s-sm col-xs-2" name="id[2][state]">
                                <option value="Enable">Enable</option>
                                <option value="Disable">Disable</option>                                                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>Analog Input 3</td>
                        <td class="text-lg-center"><input name="id[1][min]" class="form-control  text-lg-center" value="100"></td>
                        <td class="text-lg-center"><input name="id[1][max]" class="form-control  text-lg-center" value="0"></td>
                        <td class="text-lg-center">A</td>
                        <td class="text-lg-center"><input name="id[1][scale]" class="form-control   text-lg-center" value="0"></td>
                        <td class="text-lg-center">
                            <select class="form-control nav input-s-sm col-xs-2" name="id[1][state]">
                                <option value="Enable">Enable</option>
                                <option value="Disable">Disable</option>                                                            </select>
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
                    <button type="reset" class="btn btn-default btn-block">
                        <i class="fa fa-refresh"></i> Refresh
                    </button>
                </div>

            </div>


        </form>

    </div>
@endsection

@section('js')

@endsection