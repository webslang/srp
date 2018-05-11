@extends('layouts.app')


@section('content')

    <div class="row">

        <section class="content">
            <div class="col-md-10 offset-1">
                <form method="GET" action="{{ route('patron.index') }}" accept-charset="UTF-8">
                    <div id="custom-search-input">
                        <div class="input-group col-md-8">
                            <input  type="text" class="form-control input-lg" placeholder="enter patron's name" name="q" />
                            <span class="input-group-prepend">
                        <button  class="btn btn-info btn-lg" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                        </div>
                    </div>
                </form>
                <br>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="float-left"><h3>List of Patrons</h3></div>
                        <div class="float-right">
                            <div class="btn-group">

                                <a href="{{ route('patron.create') }}" class="btn btn-info" >Add New</a>

                            </div>
                        </div>
                        <div class="table-container table-responsive pull-left">
                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>

                                <th><input type="checkbox" id="checkall" /></th>
                                <th>Date Created</th>
                                <th>Branch</th>
                                <th>Program</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Zip</th>
                                <th>Age</th>
                                <th>School Attend</th>
                                <th>Grade Level</th>
                                <th>Begining Package</th>
                                <th>Ending Package</th>
                                <th>Book Reading Promise</th>
                                <th>How Did You Hear</th>
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
                                            <td>{{$patron->created_at}}</td>
                                            <td>{{$patron->branch}}</td>
                                            <td>{{$patron->programs}}</td>
                                            <td>{{$patron->first_name}}</td>
                                            <td>{{$patron->last_name}}</td>
                                            <td>{{$patron->email}}</td>
                                            <td>{{$patron->zip_code}}</td>
                                            <td>{{$patron->patron_age}}</td>
                                            <td>{{$patron->school_attended}}</td>
                                            <td>{{$patron->grade_level}}</td>
                                            <td>{{$patron->beginning_package}}</td>
                                            <td>{{$patron->ending_package}}</td>
                                            <td>{{$patron->book_reading_promise}}</td>
                                            <td>{{$patron->how_did_you_hear}}</td>
                                            <td>{{$patron->shirt_sizes}}</td>
                                            <td>{{$patron->books_read}}</td>
                                            <td>{{$patron->picture_release}}</td>

                                            <td><a class="btn btn-primary btn-xs" href="{{action('PatronController@show', $patron->id)}}" ><span class="far fa-eye"></span></a></td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('PatronController@edit', $patron->id)}}" ><span class="far fa-edit"></span></a></td>
                                            <td>
                                                <form action="{{action('PatronController@destroy', $patron->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="far fa-trash-alt"></span></button>
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
