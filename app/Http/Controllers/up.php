<?php

namespace App\Http\Controllers;

use App\Models\site;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class up extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$site=site::all();
         return view('all', compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',



        ],

    );
  $input = $request->all();

site::create($input);
return redirect()->back()
        ->with('success','page created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function show($site)
    { $site=site::where('id', $site)->get();
        return view('playout', compact ('site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit($site)
    {
        $site=site::where('id',$site)->first();
         return view('pgedit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, site $site)
    {
        $validated=$request->validate([

            'link'=> 'required',
            'title'=> 'required',
            'content'=> 'required',


        ]);
        site::where('id',$site)->update($validated);
        return redirect()->back()
        ->with('success','page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function delete($site)
    {
       site::where('id', $site)->delete();
        return redirect()->back()
        ->with('success','page deleted successfully.');
    }
}
