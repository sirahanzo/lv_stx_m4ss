@extends('layouts.stx')

@section('content')
    <div class="table-responsive">
        <form class="form hidden-xs-up">
            <div class="form-body">


                <div class="row">
                    <div class="form-group col-md-2 mb-2">
                        <label for="issueinput3">Start Time</label>
                        <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened"
                               data-original-title="" title="">
                    </div>
                    <div class="form-group col-md-2 mb-2">
                        <label for="issueinput4">End Time</label>
                        <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed"
                               data-original-title="" title="">
                    </div>
                    <div class="form-group col-md-4 mb-2">
                        <label for="issueinput4">Option</label>
                        <input type="button" name="name" id="inputID" class="btn btn-info" value="Show" title="" required="required">

                    </div>
                </div>
            </div>

        </form>
        <form class="form-inline" action="http://localhost/stx_m4ss/history/monitoring" method="post">
            <div class="form-group"><label for="">Data Log To :</label></div>
            <div class="form-group " id="sandbox-container">
                <input class=" input-sm input-s form-control datepicker-input " placeholder="From" name="from">
            </div>
            <div class="form-group" id="sandbox-container">
                <input class=" input-sm input-s form-control datepicker-input " placeholder="To" name="to">
            </div>
            <input type="submit" name="show" value="Show" class="btn btn-sm btn-info ">
            <input type="submit" name="download" value="Download" class="btn btn-sm btn-success ">
            <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-refresh"></i></button>
            <div class="form-group btn-group-sm">
                <!-- Buttons with Icon -->
                <button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1"><i class="fa fa-star-o"></i> Secondary</button>
                <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-user-o"></i> Primary</button>
                <button type="button" class="btn btn-success btn-min-width mr-1 mb-1"><i class="fa fa-check"></i> Success</button>
                <button type="button" class="btn btn-info btn-min-width mr-1 mb-1"><i class="fa fa-info"></i> Info</button>
                <button type="button" class="btn btn-warning btn-min-width mr-1 mb-1">Warning <i class="fa fa-camera"></i></button>
                <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1">Danger <i class="fa fa-eye"></i></button>
            </div>

        </form>
        <p></p>

    </div>
@endsection