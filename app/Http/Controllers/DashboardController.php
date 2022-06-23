<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dashboard;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concert = DB::table('concert')->get();

        return view('pages.admin.dashboard', ['concert' => $concert]);
    }
    // Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    // Route::post('/dashboard','DashboardController@store');
    // public function index()
    //     {

    //         $concert = DB::table('concert')->get();

    //         return view('pages.admin.dashboard', ['concert' => $concert]);
    //     }

    //     public function add()
    //     {

    //         return view('pages.admin.add');
    //     }

    //     public function store(Request $request)
    //     {

    //         DB::table('concert')->insert([
    //             'title' => $request->title,
    //             'schadule' => $request->schadule,
    //             'location' => $request->location,

    //         ]);

    //         return redirect('/dashboard');
    //     }
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('concert')->insert([
            'title' => $request->title,
            'schadule' => $request->schadule,
            'location' => $request->location,

        ]);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'schadule' => 'required',
            'location' => 'required',
        ]);
        $show = Dashboard::create($validatedData);

        return redirect('/dashboard')->with('success', 'Game is successfully saved');;
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concert = Dashboard::findOrFail($id);

        return view('edit', compact('concert'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'schadule' => 'required',
            'location' => 'required'
        ]);
        Dashboard::whereId($id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Game is successfully saved');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Dashboard::findOrFail($id);
        $game->delete();

        return redirect('/dashboard')->with('success', 'Concert Data is successfully deleted');
    }
}
