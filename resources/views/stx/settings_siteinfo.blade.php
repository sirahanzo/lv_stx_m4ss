@extends('layouts.stx')


@section('content')
    <div class="table-responsive">
        <div class="alert alert-danger hidden-xs-up">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Error!</strong></div>
        <form class="form-horizontal" method="post" action="" id="form_site_info">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="col-lg-6">

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Site ID</label>
                        <div class="col-md-9">
                            <input class="form-control" name="siteid" value="SITE-01">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Site Name</label>
                        <div class="col-md-9">
                            <input class="form-control" name="name" value="INTI-001">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Site Address</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="3" id="comment" name="address">JL. PARAHYANGAN 46 ,BANDUNG WEST JAVA, INDONESIA _edit </textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hidden-xs-up1">
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput1">Part Number</label>
                        <div class="col-md-9">
                            <!--<input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">-->

                            <div class="position-relative has-icon-left">
                                <input class="form-control" placeholder=" " type="" name="pn" value="1234567890">
                                <div class="form-control-position">
                                    <i class="fa fa-barcode"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput1">Serial Number</label>
                        <div class="col-md-9">
                            <!--<input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">-->

                            <div class="position-relative has-icon-left">
                                <input class="form-control" placeholder=" " type="" name="sn" value="1234567890">
                                <div class="form-control-position">
                                    <i class="fa fa-barcode"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">H/W Version</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder=" " type="" name="hw" value="1.0">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">S/W Version</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder=" " type="" name="sw" value="1.0">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="eventRegInput2">Model System</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder=" " type="" name="model" value="STX-M4SS">
                        </div>
                    </div>
                </div>


            </div>

            <!--<div class="form-actions center1 ">-->
            <div class="col-md-2 offset-lg-2">
                <button type="button" class="btn btn-primary btn-block" onclick="save_info()">
                    <i class="fa fa-check-square-o"></i> Save
                </button>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-default btn-block">
                    <i class="fa fa-refresh"></i> Refresh
                </button>
            </div>

            <!--</div>-->
        </form>

    </div>
@endsection

@section('js')
    <script>
        function save_info() {
            console.log('Change Site Information with Ajax Request');
            var route = '{{ route('save dtime') }}';
            var form = '#form_site_info';
            var text = ' Site Information Changed !';
//            $('#loading-text').html('write');

            //call function ajax request
            store(route, form, text);
        }


    </script>
@endsection