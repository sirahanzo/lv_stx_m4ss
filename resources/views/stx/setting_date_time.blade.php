@extends('layouts.stx')

@section('css')
    <link href="{{ asset('/') }}assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/css/clockpicker.css" rel="stylesheet">
@endsection

@section('content')
    <div class="table-responsive">
        <div class="alert alert-danger hidden-xs-up">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Error!</strong></div>
        <form class="form-horizontal" method="post" action="" id="form_dtime">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="col-lg-8">
                    <div class="form-group row" id="sandbox-container">
                        <label class="col-md-3 label-control" for="eventRegInput1">Date</label>
                        <div class="col-md-6">
                            <!--<input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">-->

                            <div class="position-relative has-icon-left">
                                <input class=" datepicker-input form-control  " name="date" value="" data-date-format="dd-mm-yyyy" type="text">
                                <div class="form-control-position">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput1">Time</label>
                        <div class="col-md-6">
                            <!--<input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">-->

                            <div class="position-relative has-icon-left clockpicker " data-autoclose="true">
                                <input class="form-control timepicker " id="timepicker1" name="time" value="" type="text">
                                <div class="form-control-position">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

            <!--<div class="form-actions center1 ">-->
            <div class="col-md-2 offset-lg-2">
                <button type="button" class="btn btn-primary btn-block" onclick="save_dtime()">
                    <i class="fa fa-check-square-o"></i> Save
                </button>
            </div>

            <div class="col-md-2">
                <button type="reset" class="btn btn-default btn-block">
                    <i class="fa fa-refresh"></i> Refresh
                </button>
            </div>

            <!--</div>-->
        </form>

    </div>


@endsection

@section('js')
    <script src="{{ asset('/') }}assets/js/clockpicker.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.clockpicker').clockpicker();
        $('.datepicker').datepicker();

        $('#sandbox-container input').datepicker({
            format: "yyyy-mm-dd",
            weekStart: 1,
            todayBtn: "linked",
            todayHighlight: true,
            autoclose: true

        });

        $('.datepicker tbody').on('click', function () {
            $('.datepicker').hide()
        });
        $('.icon-calendar').on('click', function () {
            $('.datepicker').toggle()
        });

        function save_dtime() {
            console.log('Set Date&Time with Ajax Request');
            var route = '{{ route('save dtime') }}';
            var form = '#form_dtime';
            var text = ' Date & Time Changed !';
//            $('#loading-text').html('write');

            //call function ajax request
            store(route, form, text);
        }


    </script>
@endsection