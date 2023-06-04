<?php

namespace App\Http\Controllers;

use App\Models\site;
use App\Models\epaper;
use App\Models\pdfm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class epaperC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $site=site::paginate(6); 
        $epaper = epaper::latest()->paginate(10);
        $epaper2 = $epaper;

        return view('welcome', compact('epaper', 'epaper2', 'site'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'meta' => 'required',
            'catagory' => 'required',
            'image' => 'mimes:png,jpg,jpeg|required',
            'thumbnail' => 'mimes:png,jpg,jpeg|required|max:30',
            'pdf' => 'mimes:pdf',
        ],



    );
    $time=time();

$pre=Str::random(10);
$image2 = $time.$pre.'.'.$request->thumbnail->extension();
$request->thumbnail->move(public_path('img'), $image2);
$input = $request->all();
$input['thumbnail'] = $image2;

$pre=Str::random(10);
        $image1 = $time.$pre.'.'.$request->image->extension();
$request->image->move(public_path('img'), $image1);

$input['image'] = $image1;

$pre=Str::random(10);
if ($request->pdf){
$pdf = $time.$pre.'.'.$request->pdf->extension();
$request->image->move(public_path('pdf'), $pdf);

$input['pdf'] = $pdf;
}
epaper::create($input);
return redirect()->back()
        ->with('success','epapper uploaded successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\epaper  $epaper
     * @return \Illuminate\Http\Response
     */
    public function show(epaper $epaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\epaper  $epaper
     * @return \Illuminate\Http\Response
     */
    public function edit(epaper $epaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\epaper  $epaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, epaper $epaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\epaper  $epaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(epaper $epaper)
    {
        //
    }
    public function pdf_upload()
    {
        return view('pdfupload');
    }
    public function pdf_save(request $request)
    {
        $pre=Str::random(10);
        $time=time();
$pdf = $time.$pre.'.'.$request->pdf->extension();
$request->pdf->move(public_path('pdf'), $pdf);
$input = $request->all();
$input['pdf'] = $pdf;
pdfm::create($input);

return redirect()->back()
        ->with('success','epapper uploaded successfully.');


    }
    public function pdf_show()
    {
        $pdf= pdfm::paginate(10);
        return view('pdf', compact('pdf'));
    }

    public function pdf_download($id)
    {
        $pdf= pdfm::find($id)->first();
        $d= public_path('pdf').'/'.$pdf->pdf;
        return response()->download($d);

        //$pdf= pdfm::find($id)->first();
        //return view('pdf', compact('pdf'));
    }
    
}
