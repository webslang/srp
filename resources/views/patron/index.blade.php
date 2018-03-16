@extends('layouts.default')



@section('content')

    <div class="row">

        <section class="content">

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>List of Patrons</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">

                                <a href="{{ route('patron.create') }}" class="btn btn-info" >Add New</a>

                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>

                                <th><input type="checkbox" id="checkall" /></th>
                                <th>Date Created</th>
                                <th>Year Created</th>
                                <th>Branch</th>
                                <th>Program</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Zip Code</th>
                                <th>School Attended</th>
                                <th>Beginning Package</th>
                                <th>Ending Package</th>
                                <th>Age</th>
                                <th>Book Reading Promise</th>
                                <th>How Did You Hear About Us</th>
                                <th>Shirt Size</th>
                                <th>Books Read</th>
                                <th>Picture Release</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </thead>
                                <tbody>
                                @if($patrons->count())
                                    @foreach($patrons as $patron)
                                        <tr>
                                            <td><input type="checkbox" class="checkthis" /></td>
                                            <td>{{$patron->date_created}}</td>
                                            <td>{{$patron->year_created}}</td>
                                            <td>{{$patron->branch}}</td>
                                            <td>{{$patron->programs}}</td>
                                            <td>{{$patron->first_name}}</td>
                                            <td>{{$patron->last_name}}</td>
                                            <td>{{$patron->email}}</td>
                                            <td>{{$patron->patron_age}}</td>
                                            <td>{{$patron->zip_codel}}</td>
                                            <td>{{$patron->school_attended}}</td>
                                            <td>{{$patron->beginning_package}}</td>
                                            <td>{{$patron->ending_package}}</td>
                                            <td>{{$patron->book_reading_promise}}</td>
                                            <td>{{$patron->how_did_you_hearl}}</td>
                                            <td>{{$patron->description}}</td>
                                            <td>{{$patron->shirt_size}}</td>
                                            <td>{{$patron->books_read}}</td>
                                            <td>{{$patron->picture_release}}</td>

                                            <td><a class="btn btn-primary btn-xs" href="{{action('PatronController@show', $patron->id)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('PatronController@edit', $patron->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td>
                                                <form action="{{action('PatronController@destroy', $patron->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">No Records found !!</td>
                                    </tr>
                                @endif





                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
