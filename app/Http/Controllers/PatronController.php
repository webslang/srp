<?php

namespace App\Http\Controllers;

use App\Patron;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PatronController extends Controller
{
     public function  __construct()
     {
         $this->middleware('auth')->only(['index']);
     }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patrons = Patron::search($request->input('q'))->get();

        return view('patron.index', compact('patrons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Patron.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [

            'branch' => 'required',

            'programs' => 'required',

            'first_name' => 'required',

            'last_name' => 'required',

            'email' => 'required|email',

            'patron_age' => 'required|numeric',

            'zip_code' => 'required',

            'grade_level' => 'required',

            'book_reading_promise' => 'required',

            'how_did_you_hear' => 'required',

            'picture_release' => 'required',

        ],
            [
                'email.email'    => 'Please enter correct email format "jon@exampl.com"',
                'patron_age.numeric'    => 'Please enter numbers only for patron age.',
            ]


            );


        Patron::create($request->all());

        return redirect()->route('patron.create')

            ->with('success','Patron created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $patron= Patron::find($id);
        return view('Patron.show',compact('patron'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $patron= Patron::find($id);
        return view('Patron.edit',compact('patron'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [

            'branch' => 'required',

            'programs' => 'required',

            'first_name' => 'required',

            'last_name' => 'required',

            'email' => 'required',

            'patron_age' => 'required',

            'zip_code' => 'required',

            'grade_level' => 'required',

            'beginning_package' => 'required',

            'ending_package' => 'required',

            'book_reading_promise' => 'required',

            'how_did_you_hear' => 'required',

            'books_read' => 'required',

            'picture_release' => 'required',



        ]);

        Patron::find($id)->update($request->all());
        return redirect()->route('patron.edit', array($id))
            ->with('success','Patron info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Patron::find($id)->delete();

        return redirect()->route('patron.index')

            ->with('success','Patron deleted successfully');
    }

    /**
     * Return Current Date
     */

    public function currentDate()
    {
        $currentDay = Carbon::now();
        return $currentDay;
    }
}
