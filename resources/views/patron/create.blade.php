@extends('layouts.default')


@section('content')

    <div class="row">

        <section class="content">

            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">TPL's Summer Reading - Patron Registration (for group registration please see staff.)</h3>
                    </div>

                    <div class="panel-body">


                        <div class="table-container">
                            <form autocomplete="off" method="POST" action="{{ route('patron.store') }}"  role="form">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What branch are you using to register?
                                            <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select id="branch" name="branch" class="form-control input-sm" value="{{ old('branch') }}">
                                                <option value="">

                                                </option>
                                                <option value="Main Branch" @if (old('branch') == 'Main Branch') selected="selected" @endif>
                                                    Main Branch
                                                </option>
                                                <option value="Weaver Bolden Branch" @if (old('branch') == 'Weaver Bolden Branch') selected="selected" @endif>
                                                    Weaver Bolden Branch
                                                </option>
                                                <option value="Brown Branch" @if (old('branch') == 'Brown Branch') selected="selected" @endif>
                                                    Brown Branch
                                                </option>
                                                <option value="Bookmobile" @if (old('branch') == 'Bookmobile') selected="selected" @endif>
                                                    Bookmobile
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Which program are you registering for?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select id="programs" name="programs" class="form-control input-sm" value="{{ old('programs') }}">
                                                <option value="">

                                                </option>
                                                <option value="Kids Program" @if (old('programs') == 'Kids Program') selected="selected" @endif>
                                                    Kids Program
                                                </option>
                                                <option value="Teen Program" @if (old('programs') == 'Teen Program') selected="selected" @endif>
                                                    Teen Program
                                                </option>
                                                <option value="Adult Program" @if (old('programs') == 'Adult Program') selected="selected" @endif>
                                                    Adult Program
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                First Name
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Last Name
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" value="{{ old('last_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Email
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="johndoe@example.com" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What's Your Age?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="patron_age" id="patron_age" class="form-control input-sm" placeholder="Your Age" value="{{ old('patron_age') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What's Your Zip Code?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="zip_code" id="zip_code" class="form-control input-sm" placeholder="Zip Code" value="{{ old('zip_code') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What School or Organization do you attend?
                                            </label>
                                            <input type="text" name="school_attended" id="school_attended" class="form-control input-sm" placeholder="School / Organization Attended " value="{{ old('school_attended') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What is your grade level in the Fall?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select id="grade_level" name="grade_level" class="form-control input-sm" value="{{ old('grade_level') }}">
                                                <option value="">

                                                </option>
                                                <option value="Pre-K" @if (old('grade_level') == 'Pre-K') selected="selected" @endif>
                                                    Pre-K
                                                </option>
                                                <option value="Kindergarten" @if (old('grade_level') == 'Kindergarten') selected="selected" @endif>
                                                    Kindergarten
                                                </option>
                                                <option value="1st Grade" @if (old('grade_level') == '1st Grade') selected="selected" @endif>
                                                    1st Grade
                                                </option>
                                                <option value="2nd Grade" @if (old('grade_level') == '2nd Grade') selected="selected" @endif>
                                                    2nd Grade
                                                </option>
                                                <option value="3rd Grade" @if (old('grade_level') == '3rd Grade') selected="selected" @endif>
                                                    3rd Grade
                                                </option>
                                                <option value="4th Grade" @if (old('grade_level') == '4th Grade') selected="selected" @endif>
                                                    4th Grade
                                                </option>
                                                <option value="5th Grade" @if (old('grade_level') == '5th Grade') selected="selected" @endif>
                                                    5th Grade
                                                </option>
                                                <option value="6th Grade" @if (old('grade_level') == '6th Grade') selected="selected" @endif>
                                                    6th Grade
                                                </option>
                                                <option value="7th Grade" @if (old('grade_level') == '7th Grade') selected="selected" @endif>
                                                    7th Grade
                                                </option>
                                                <option value="8th Grade" @if (old('grade_level') == '8th Grade') selected="selected" @endif>
                                                    8th Grade
                                                </option>
                                                <option value="9th Grade" @if (old('grade_level') == '9th Grade') selected="selected" @endif>
                                                    9th Grade
                                                </option>
                                                <option value="10th Grade" @if (old('grade_level') == '10th Grade') selected="selected" @endif>
                                                    10th Grade
                                                </option>
                                                <option value="11th Grade" @if (old('grade_level') == '11th Grade') selected="selected" @endif>
                                                    11th Grade
                                                </option>
                                                <option value="12th Grade" @if (old('grade_level') == '12th Grade') selected="selected" @endif>
                                                    12th Grade
                                                </option>
                                                <option value="College Student" @if (old('grade_level') == 'College Student') selected="selected" @endif>
                                                    College Student
                                                </option>
                                                <option value="Nonstudent" @if (old('grade_level') == 'Nonstudent') selected="selected" @endif>
                                                   Nonstudent
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                How many books do you promise to read or listen to this summer?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="book_reading_promise" id="book_reading_promise" class="form-control input-sm" placeholder="Book Reading Promise" value="{{ old('book_reading_promise') }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                How did you hear about the Tuscaloosa Public Library's Summer Reading Program?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select class="form-control input-sm" id="how_did_you_hear" name="how_did_you_hear" value="{{ old('how_did_you_hear') }}">
                                                <option value="Newspaper" @if (old('how_did_you_hear') == 'Newspaper') selected="selected" @endif>
                                                    Newspaper
                                                </option>
                                                <option value="Radio" @if (old('how_did_you_hear') == 'Radio') selected="selected" @endif>
                                                    Radio
                                                </option>
                                                <option value="Television" @if (old('how_did_you_hear') == 'Television') selected="selected" @endif>
                                                    Television
                                                </option>
                                                <option value="TPL Website" @if (old('how_did_you_hear') == 'TPL Website') selected="selected" @endif>
                                                    TPL website
                                                </option>
                                                <option value="Social Media" @if (old('how_did_you_hear') == 'Social Media') selected="selected" @endif>
                                                    Social Media (Facebook, Twitter, Instagram)
                                                </option>
                                                <option value="TPL Staff" @if (old('how_did_you_hear') == 'TPL Staff') selected="selected" @endif>
                                                    TPL staff
                                                </option>
                                                <option value="Past Participation" @if (old('how_did_you_hear') == 'Past Participation') selected="selected" @endif>
                                                    Participated in the past
                                                </option>
                                                <option value="School" @if (old('how_did_you_hear') == 'School') selected="selected" @endif>
                                                    Through my child's school
                                                </option>
                                                <option value="Word of Mouth" @if (old('how_did_you_hear') == 'Word of Mouth') selected="selected" @endif>
                                                    From other TPL patrons (word of mouth)
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Do you give consent for TPL to use your likeness in photograph?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select class="form-control input-sm" id="picture_release" name="picture_release" value="{{ old('picture_release') }}">
                                                <option value="yes" @if (old('picture_release') == 'yes') selected="selected" @endif>
                                                    yes
                                                </option>
                                                <option value="no" @if (old('picture_release') == 'no') selected="selected" @endif>
                                                    no
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <p class="text-center">Prizes available while supplies last!</p>
                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Save" class="btn btn-success btn-block">
                                        <a href="{{ route('patron.create') }}" class="btn btn-info btn-block" >Back</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
