<?php

namespace App\Http\Controllers;

use App\SummerGroup;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SummerGroupController extends Controller
{
    //
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
        $summergroups = SummerGroup::search($request->input('q'))->get();

        return view('summergroup.index', compact('summergroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('summergroup.create');
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

            'group_name' => 'required',

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


        SummerGroup::create($request->all());

        return redirect()->route('summergroup.create')

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
        $summergroup= SummerGroup::find($id);
        return view('summergroup.show',compact('summergroup'));
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
        $summergroup= SummerGroup::find($id);
        return view('summergroup.edit',compact('summergroup'));

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

            'group_name' => 'required',

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

        SummerGroup::find($id)->update($request->all());
        return redirect()->route('summergroup.edit', array($id))
            ->with('success','Summer Group info updated successfully');
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

        SummerGroup::find($id)->delete();

        return redirect()->route('summergroup.index')

            ->with('success','Summer Group deleted successfully');
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
