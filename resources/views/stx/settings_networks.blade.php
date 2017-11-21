@extends('layouts.stx')

@section('css')

@endsection

@section('content')
    <div class="table-responsive">
        <div class="alert alert-danger hidden-xs-up">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Error!</strong>                                     </div>
        <form class="form-horizontal" method="post" action="http://localhost/stx_m4ss/settings/save_networks">
            <div class="form-body">
                <div class="col-lg-6 ">

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">IPAddress</label>
                        <div class="col-md-9">
                            <input class="form-control" name="ipaddress" value="192.168.137.100">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Net Mask</label>
                        <div class="col-md-9">
                            <input class="form-control" name="netmask" value="255.255.255.0">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Gateway</label>
                        <div class="col-md-9">
                            <input class="form-control" name="gateway" value="192.168.137.1">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">IP Server</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder=" " type="" name="server" value="192.168.137.1">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Port</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder=" " type="" name="port" value="9876">
                        </div>
                    </div>


                </div>

                <div class="col-lg-6 ">



                    <div class="form-group row hidden-xs-up">
                        <label class="col-md-3 label-control" for="eventRegInput2">Alarm polling interval</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <!--<span class="input-group-addon">$</span>-->
                                <input class="form-control" placeholder=" " type="" name="alarm_interval" value="disable">
                                <span class="input-group-addon">Seconds</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Active Trap </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <!--<span class="input-group-addon">$</span>-->
                                <select name="active_trap" id="inputID" class="form-control">
                                    <option value="disable">Disable</option><option value="enable">Enable</option>                                                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Trap Repeat Times</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <!--<span class="input-group-addon">$</span>-->
                                <input class="form-control" placeholder=" " type="" name="trap_repeat" value="2">
                                <span class="input-group-addon">Times</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Trap Repeat Rate</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <!--<span class="input-group-addon">$</span>-->
                                <input class="form-control" placeholder=" " type="" name="trap_rate" value="10">
                                <span class="input-group-addon">Minutes</span>
                            </div>
                        </div>
                    </div>



                    <div class="form-group row hidden-xs-up">
                        <label class="col-md-3 label-control">Datalog polling interval</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <!--<span class="input-group-addon">$</span>-->
                                <input class="form-control" placeholder=" " type="" name="datalog_interval" value="2">
                                <span class="input-group-addon">Minutes</span>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="alert alert-info alert-block fade in alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Important!</strong> After change IP ADDRESS you must reboot the system
                    </div>

                </div>


            </div>

            <!--<div class="form-actions center1 ">-->
            <div class="col-md-2 offset-lg-3">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-check-square-o"></i> Save
                </button>
            </div>

            <div class="col-md-2">
                <button type="reset" class="btn btn-default btn-block">
                    <i class="fa fa-refresh"></i> Refresh
                </button>
            </div>

            <div class="col-md-2">
                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#default">
                    <i class="fa fa-power-off"></i> Reboot
                </button>

            </div>

            <!--</div>-->
        </form>

    </div>
@endsection

@section('js')

@endsection