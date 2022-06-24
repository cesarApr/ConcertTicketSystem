<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dashboard;
use App\Models\Concert;
use Illuminate\Support\Facades\Storage;
use PDF;


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
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'schedule' => 'required',
            'location' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('Dashboard');
        }

        Concert::create($validateData);

        return redirect('/dashboard')->with('success', 'Concert is successfully saved');
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
        $concert = Concert::findOrFail($id);

        return view('pages.admin.edit', compact('concert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concert $concert, $id)
    {
        /*Concert::find($concert->id);
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'schadule' => 'required',
            'location' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->hasFile('image')) {
            if ($concert->image && file_exists(storage_path('app/public/'. $concert->image))) {
                Storage::delete(['public/', $concert->image]);
            }
            $validateData['image'] = $request->file('image')->store('Dashboard');
        }
        dd($validateData);
        
        Concert::update($validateData);
        
        return redirect('/dashboard')->with('success', 'Edit Success');*/
        $rules = [
            'title' => 'required|max:255',
            'schedule' => 'required',
            'location' => 'required',
            'image' =>'image|file|max:3072',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($concert->image && file_exists(storage_path('app/public/'. $concert->image))) {
                Storage::delete(['public/', $concert->image]);
            }
            $validateData['image'] = $request->file('image')->store('Dashboard');
        }

        Concert::where('id', $id)->update($validateData);

        return redirect('/dashboard')->with('success', 'Succesfully Updated');
    }

    public function print_pdf(Concert $concert){
        $dashboard = DB::table('concert')->get();
        $pdf = PDF::loadview('pages.admin.dashboard_pdf', ['dashboard'=>$dashboard]);
        return $pdf->stream();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Concert::findOrFail($id);
        $destroy->delete($id);

        return redirect('/dashboard')->with('success', 'Concert Data is successfully deleted');
    }
}
