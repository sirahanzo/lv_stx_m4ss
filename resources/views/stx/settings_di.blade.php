@extends('layouts.stx')

@section('css')

@endsection

@section('content')
    <div class="table-responsive">
        <form class="form-horizontal" method="post" action="http://localhost/stx_m4ss/settings/save_digital_input">
            <div class="form-body">
                <div class="col-lg-12 ">

                    <table class="table table-bordered table-xs" id="table1">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th class="">Chanel</th>
                            <th class="text-lg-center ">State</th>
                            <th class="text-lg-center ">Triger</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>DI 1</td>
                            <td class="  ">
                                <select class="form-control " name="id[401][state]">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </td>
                            <td class=" ">
                                <select class="form-control " name="id[401][triger]">
                                    <option value="1">Close</option>
                                    <option value="0">Open</option>                                                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>DI 2</td>
                            <td class="  ">
                                <select class="form-control " name="id[402][state]">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </td>
                            <td class=" ">
                                <select class="form-control " name="id[402][triger]">
                                    <option value="0">Open</option>
                                    <option value="1">Close</option>                                                                </select>
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

                <div class="col-lg-6 hidden-xs-up ">
                    <table class="table table-bordered table-xs " id="table1">
                        <thead class="bg-primary text-white ">
                        <tr>
                            <th class="">Chanel</th>
                            <th class="text-lg-center ">State</th>
                            <th class="text-lg-center ">Triger</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>DI 5</td>
                            <td class="">
                                <select class="form-control " name="id[405][state]">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </td>
                            <td class="">
                                <select class="form-control " name="id[405][triger]">
                                    <option value="0">Open</option>
                                    <option value="1">Close</option>                                                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>DI 6</td>
                            <td class="">
                                <select class="form-control " name="id[406][state]">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </td>
                            <td class="">
                                <select class="form-control " name="id[406][triger]">
                                    <option value="0">Open</option>
                                    <option value="1">Close</option>                                                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>DI 7</td>
                            <td class="">
                                <select class="form-control " name="id[407][state]">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </td>
                            <td class="">
                                <select class="form-control " name="id[407][triger]">
                                    <option value="0">Open</option>
                                    <option value="1">Close</option>                                                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>DI 8</td>
                            <td class="">
                                <select class="form-control " name="id[408][state]">
                                    <option value="Enable">Enable</option>
                                    <option value="Disable">Disable</option>
                                </select>
                            </td>
                            <td class="">
                                <select class="form-control " name="id[408][triger]">
                                    <option value="0">Open</option>
                                    <option value="1">Close</option>                                                                </select>
                            </td>
                        </tr>



                        </tbody>
                    </table>
                </div>

                <!--<div class="form-actions center1 ">-->


                <!--</div>-->


            </div></form>

    </div>
@endsection

@section('js')

@endsection