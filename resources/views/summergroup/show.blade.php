@extends('layouts.default')



@section('content')

    <div class="row">

        <section class="content">

            <div class="col-md-8 col-md-offset-2">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$summergroup->first_name}} {{$summergroup->last_name}}</h3>
                    </div>

                    <div class="panel-body">


                        <div class="table-container">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Branch
                                    </label>
                                    <p>{{$summergroup->branch}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Program
                                    </label>
                                    <p>{{$summergroup->programs}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Group Name
                                    </label>
                                    <p>{{$summergroup->group_name}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Email
                                    </label>
                                    <p>{{$summergroup->email}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Age
                                    </label>
                                    <p>{{$summergroup->patron_age}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Zip Code
                                    </label>
                                    <p>{{$summergroup->zip_code}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        School
                                    </label>
                                    <p>{{$summergroup->school_attended}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Current Grade Level
                                    </label>
                                    <p>{{$summergroup->grade_level}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Book Reading Promise
                                    </label>
                                    <p>{{$summergroup->book_reading_promise}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        How Did You Hear About TPL
                                    </label>
                                    <p>{{$summergroup->how_did_you_hear}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        I Give TPL The Rights To Use My Photo

                                    </label>
                                    <p>{{$summergroup->picture_release}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Beginning Package
                                    </label>
                                    <p>{{$summergroup->beginning_package}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Ending Package
                                    </label>
                                    <p>{{$summergroup->ending_package}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Books Read
                                    </label>
                                    <p>{{$summergroup->books_read}}</p>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <a href="{{ route('summergroup.index') }}" class="btn btn-info btn-block" >Back</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
