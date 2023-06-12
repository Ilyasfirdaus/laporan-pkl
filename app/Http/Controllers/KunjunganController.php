<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use PDF;
use App\Models\Pengunjung;
use App\Models\Institusi;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Facades\DB;

 


class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data = Kunjungan::all();
        $data->load('institusi');
  
        return view ('kunjungan.index', compact(['data']));
    }
    
    public function cetak_pdf()
    {
    	$kunjungan = Kunjungan::all();
 
    	$pdf = DomPDFPDF::loadview('kunjungan',['kunjungan'=>$kunjungan]);
    	return $pdf->download('laporan-kunjungan-pdf');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);
    }

  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kunjungan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $pengunjung = Pengunjung::create($request->all());
       $kunjungan = Kunjungan::create($request->all() + ['pengunjung_id' => $pengunjung->id]);

       $institusi = Institusi::create($request->all() + ['kunjungan_id' => $kunjungan->id]);
      // $php_errormsg
       //$kunjungan->pengunjung_id = $
       return redirect()->route('kunjungan.store');
       
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
     	
	$kunjungan= DB::table('kunjungan')->where('id',$id)->get();
	
	return view('kunjungan.edit',['kunjungan' => $kunjungan]);
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
       
	DB::table('kunjungan')->where('id',$request->id)->update([
		'keperluan' => $request->keperluan,
		'tujuan' => $request->tujuan,
		'kesan' => $request->kesan,

	]);
	
	return redirect('/kunjungan');
    }

/**
* Remove the specified resource from storage.
*
* @param  \App\Models\Kunjungan  $post
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
    $item = Kunjungan::findOrFail($id);
    $item->delete();

    return redirect()->route('kunjungan.index')
         ->withSuccess(__('Kunjungan  delete successfully.'));
} 
}
