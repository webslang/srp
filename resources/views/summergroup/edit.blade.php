@extends('layouts.app')

@section('content')

    <div class="row">

        <section class="content">

            <div class="col-md-8 offset-2">
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
                        <h3 class="panel-title">Update SummerGroup: {{$summergroup->first_name." ".$summergroup->last_name}}</h3>
                    </div>

                    <div class="panel-body">


                        <div class="table-container">
                            <form method="POST" action="{{ route('summergroup.update', $summergroup->id) }}"  role="form">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What branch are you using to register?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select id="branch" name="branch" class="form-control input-sm">
                                                <option value="{{$summergroup->branch}}">
                                                    {{$summergroup->branch}}
                                                </option>
                                                <option value="Main Branch">
                                                    Main Branch
                                                </option>
                                                <option value="Weaver Bolden Branch">
                                                    Weaver Bolden Branch
                                                </option>
                                                <option value="Brown Branch">
                                                    Brown Branch
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
                                            <select id="programs" name="programs"  class="form-control input-sm">
                                                <option value="{{$summergroup->programs}}">
                                                    {{$summergroup->programs}}
                                                </option>
                                                <option value="Main Branch">
                                                    Kids Program
                                                </option>
                                                <option value="Teen Program">
                                                    Teen Program
                                                </option>
                                                <option value="Adult Program">
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
                                            <input type="text" name="first_name" value="{{$summergroup->first_name}}" id="first_name" class="form-control input-sm">
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
                                            <input type="text" name="last_name" value="{{$summergroup->last_name}}" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <!--- Summer Group Beginning -->
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Summer Group
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select id="group_name" name="group_name" class="form-control input-sm" value="{{ old('group_name') }}">
                                                <option value="{{$summergroup->group_name}}">
                                                    {{$summergroup->group_name}}
                                                </option>
                                                <option value="Elizabeth Baptist Daycare" @if (old('group_name') == 'Elizabeth Baptist Daycare') selected="selected" @endif>
                                                    Elizabeth Baptist Daycare
                                                </option>
                                                <option value="Christian Community Daycare" @if (old('group_name') == 'Christian Community Daycare') selected="selected" @endif>
                                                    Christian Community Daycare
                                                </option>
                                                <option value="Trinity Baptist Daycare" @if (old('group_name') == 'Trinity Baptist Daycare') selected="selected" @endif>
                                                    Trinity Baptist Daycare
                                                </option>
                                                <option value="Friendship Baptist Daycare" @if (old('group_name') == 'Friendship Baptist Daycare') selected="selected" @endif>
                                                    Friendship Baptist Daycare
                                                </option>
                                                <option value="Piney Grove Baptist Daycare" @if (old('group_name') == 'Piney Grove Baptist Daycare') selected="selected" @endif>
                                                    Piney Grove Baptist Daycare
                                                </option>
                                                <option value="Beulah Baptist Daycare" @if (old('group_name') == 'Beulah Baptist Daycare') selected="selected" @endif>
                                                    Beulah Baptist Daycare
                                                </option>
                                                <option value="St. Peter AME Daycare" @if (old('grade_level') == 'St. Peter AME Daycare') selected="selected" @endif>
                                                    St. Peter AME Daycare
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--- Summer Group End -->
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Email
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="email" value="{{$summergroup->email}}" id="email" class="form-control input-sm" >
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
                                            <input type="text" name="patron_age" value="{{$summergroup->patron_age}}" id="patron_age" class="form-control input-sm">
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
                                            <input type="text" name="zip_code" value="{{$summergroup->zip_code}}" id="zip_code" class="form-control input-sm" placeholder="Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What school do you attend?
                                            </label>
                                            <input type="text" name="school_attended" value="{{$summergroup->school_attended}}" id="school_attended" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What is your current grade level?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select id="grade_level" name="grade_level" class="form-control input-sm">
                                                <option value="{{$summergroup->grade_level}}">
                                                    {{$summergroup->grade_level}}
                                                </option>
                                                <option value="Pre-K">
                                                    Pre-K
                                                </option>
                                                <option value="Kindergarten">
                                                    Kindergarten
                                                </option>
                                                <option value="1st Grade">
                                                    1st Grade
                                                </option>
                                                <option value="2nd Grade">
                                                    2nd Grade
                                                </option>
                                                </option>
                                                <option value="3rd Grade">
                                                    3rd Grade
                                                </option>
                                                <option value="4th Grade">
                                                    4th Grade
                                                </option>
                                                <option value="5th Grade">
                                                    5th Grade
                                                </option>
                                                <option value="6th Grade">
                                                    6th Grade
                                                </option>
                                                <option value="7th Grade">
                                                    7th Grade
                                                </option>
                                                <option value="8th Grade">
                                                    8th Grade
                                                </option>
                                                </option>
                                                <option value="9th Grade">
                                                    9th Grade
                                                </option>
                                                <option value="10th Grade">
                                                    10th Grade
                                                </option>
                                                <option value="11th Grade">
                                                    11th Grade
                                                </option>
                                                <option value="12th Grade">
                                                    12th Grade
                                                </option>
                                                <option value="College Student">
                                                    College Student
                                                </option>
                                                <option value="Nonstudent">
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
                                            <input type="text" name="book_reading_promise" value="{{$summergroup->book_reading_promise}}" id="book_reading_promise" class="form-control input-sm">
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
                                            <select class="form-control input-sm" id="how_did_you_hear" name="how_did_you_hear">
                                                <option value="{{$summergroup->how_did_you_hear}}">
                                                    {{$summergroup->how_did_you_hear}}
                                                </option>

                                                <option value="Newspaper">
                                                    Newspaper
                                                </option>
                                                <option value="Radio">
                                                    Radio
                                                </option>
                                                <option value="Television">
                                                    Television
                                                </option>
                                                <option value="TPL Website">
                                                    TPL website
                                                </option>
                                                <option value="Social Media">
                                                    Social Media (Facebook, Twitter, Instagram)
                                                </option>
                                                <option value="TPL staff">
                                                    TPL staff
                                                </option>
                                                <option value="Past Participation">
                                                    Participated in the past
                                                </option>
                                                <option value="School">
                                                    Through my child's school
                                                </option>
                                                <option value="Word of Mouth">
                                                    From other TPL patrons (word of mouth)
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Do you give consent for TPL to use your like in photograph
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select class="form-control input-sm" id="picture_release" name="picture_release">
                                                <option value="{{$summergroup->picture_release}}">
                                                    {{$summergroup->picture_release}}
                                                </option>
                                                <option value="yes">
                                                    yes
                                                </option>
                                                <option value="no">
                                                    no
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Have You Received Your Beginning Package?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select class="form-control input-sm" id="beginning_package" name="beginning_package">
                                                <option value="{{$summergroup->beginning_package}}">
                                                    {{$summergroup->beginning_package}}
                                                </option>
                                                <option value="yes">
                                                    yes
                                                </option>
                                                <option value="no">
                                                    no
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Have You Received Your Ending Package?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <select class="form-control input-sm" id="ending_package" name="ending_package">
                                                <option value="{{$summergroup->ending_package}}">
                                                    {{$summergroup->ending_package}}
                                                </option>
                                                <option value="yes">
                                                    yes
                                                </option>
                                                <option value="no">
                                                    no
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What is the number of books you have read?
                                                <span class="asteriskField">
                                                 *
                                            </span>
                                            </label>
                                            <input type="text" name="books_read" value="{{$summergroup->books_read}}" id="books_read" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>




                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Update" class="btn btn-success btn-block">
                                        <a href="{{ route('summergroup.index') }}" class="btn btn-info btn-block" >Back</a>
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