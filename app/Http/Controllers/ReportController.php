<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    function show() {
        return view('report.index');
       }
    function create() {
        return view('report.add');
    }
    function submit(Request $request){
        $request->validate([
            'NIK' => 'required|string',
            'nama_pelapor' => 'required|string',
            'umur_pelapor' => 'required|integer',
            'pekerjaan' => 'required|string',
            'alamat' => 'required|string',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'nama_terlapor' => 'required|string',
            'umur_terlapor' => 'required|integer',
            'hubungan' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
        ]);

        $report = new Report();
    
        $report->NIK = $request->NIK;
        $report->nama_pelapor = $request->nama_pelapor;
        $report->umur_pelapor = $request->umur_pelapor;
        $report->pekerjaan = $request->pekerjaan;
        $report->alamat = $request->alamat; 
        $report->judul = $request->judul;
        $report->isi = $request->isi;
        $report->nama_terlapor = $request->nama_terlapor;
        $report->umur_terlapor = $request->umur_terlapor;
        $report->hubungan = $request->hubungan;
        $report->status = 'Dalam Tinjauan';
        $report->phone = $request->phone;
        $report->email = $request->email;
        $report->save();
    
        // return redirect()->route('report.index');
        session()->flash('status', 'Report submitted successfully!');

        return redirect()->back();
    }
    function update(Request $request, $id){
        $report = Report::find($id);

        $report->status = $request -> new_status;
        $report->update();

        return redirect()->route('report.index');
    }
    function delete($id){
        $report = Report::find($id);
    
        $report->delete();
    
        return redirect()->route('report.index');
       }
}
