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
                        <h3 class="panel-title">TPL's Summer Reading - Patron Registration</h3>
                    </div>

                    <div class="panel-body">


                        <div class="table-container">
                            <form method="POST" action="{{ route('patron.store') }}"  role="form">
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
                                            <select id="branch" name="branch" class="form-control input-sm">
                                                <option value="">

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
                                            <select id="programs" name="programs" class="form-control input-sm">
                                                <option value="">

                                                </option>
                                                <option value="Main Branch">
                                                    Kids Program
                                                </option>
                                                <option value="Teen Program">
                                                    Teen Program
                                                </option>
                                                <option value="Adult">
                                                    Adult
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
                                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
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
                                            <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
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
                                            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="johndoe@exampl.com">
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
                                            <input type="text" name="patron_age" id="patron_age" class="form-control input-sm" placeholder="Your Age">
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
                                            <input type="text" name="zip_code" id="zip_code" class="form-control input-sm" placeholder="Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                What school do you attend?
                                            </label>
                                            <input type="text" name="school_attended" id="school_attended" class="form-control input-sm" placeholder="School Attended">
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
                                            <input type="text" name="beginning_package" id="beginning_package" class="form-control input-sm" placeholder="Received Beginning Package">
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
                                            <input type="text" name="ending_package" id="ending_package" class="form-control input-sm" placeholder="Received Ending Package">
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
                                            <input type="text" name="book_reading_promise" id="book_reading_promise" class="form-control input-sm" placeholder="Book Reading Promise">
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
                                            <input type="text" name="how_did_you_hear" id="how_did_you_hear" class="form-control input-sm" placeholder="How Did You Hear About Us">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    Please select your preferred t-shirt size.
                                                    <span class="asteriskField">
                                                 *
                                            </span>
                                                </label>
                                                <select class="form-control input-sm" id="shirt_sizes" name="shirt_sizes">
                                                    <option value="">

                                                    </option>
                                                    <option value="Toddler 2T">
                                                        Toddler (2T)
                                                    </option>
                                                    <option value="Toddler 4T">
                                                        Toddler (4T)
                                                    </option>
                                                    <option value="Youth Small">
                                                        Youth Small
                                                    </option>
                                                    <option value="Youth Medium">
                                                        Youth Medium
                                                    </option>
                                                    <option value="Youth Large">
                                                        Youth Large
                                                    </option>
                                                    <option value="Adult Small">
                                                        Adult Small
                                                    </option>
                                                    <option value="Adult Medium">
                                                        Adult Medium
                                                    </option>
                                                    <option value="Adult Large">
                                                        Adult Large
                                                    </option>
                                                    <option value="Adult X-large">
                                                        Adult X-large
                                                    </option>
                                                    <option value="Adult XX-large">
                                                        Adult XX-large
                                                    </option>
                                                    <option value="Adult XXX-large">
                                                        Adult XXX-large
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
                                            <input type="text" name="books_read" id="books_read" class="form-control input-sm" placeholder="Books Read">
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
                                                <option value="yes">
                                                    yes
                                                </option>
                                                <option value="no">
                                                    no
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Save" class="btn btn-success btn-block">
                                        <a href="{{ route('patron.index') }}" class="btn btn-info btn-block" >Back</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
