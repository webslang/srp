@extends('layouts.default')



@section('content')

    <div class="row">

        <section class="content">

            <div class="col-md-8 col-md-offset-2">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$patron->first_name}} {{$patron->last_name}}</h3>
                    </div>

                    <div class="panel-body">


                        <div class="table-container">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                       Branch
                                    </label>
                                    <p>{{$patron->branch}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                       Program
                                    </label>
                                    <p>{{$patron->programs}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Email
                                    </label>
                                    <p>{{$patron->email}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Age
                                    </label>
                                    <p>{{$patron->patron_age}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Zip Code
                                    </label>
                                    <p>{{$patron->zip_code}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                       School
                                    </label>
                                    <p>{{$patron->school_attended}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Current Grade Level
                                    </label>
                                    <p>{{$patron->grade_level}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Book Reading Promise
                                    </label>
                                    <p>{{$patron->book_reading_promise}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        How Did You Hear About TPL
                                    </label>
                                    <p>{{$patron->how_did_you_hear}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                         I Give TPL The Rights To Use My Photo

                                    </label>
                                    <p>{{$patron->picture_release}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                       Beginning Package
                                    </label>
                                    <p>{{$patron->beginning_package}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Ending Package
                                    </label>
                                    <p>{{$patron->ending_package}}</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Books Read
                                    </label>
                                    <p>{{$patron->books_read}}</p>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <a href="{{ route('patron.index') }}" class="btn btn-info btn-block" >Back</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
