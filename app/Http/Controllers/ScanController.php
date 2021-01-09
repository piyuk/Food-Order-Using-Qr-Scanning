<?php

namespace App\Http\Controllers;

use App\Scan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ScanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function indexoption2(Request $request) { 
        
        return view('Customer.scan');
    }
   

    public function checkUser(Request $request) {
       
    }

    public function number()
    {
      
    }

    public function num(Request $request)
    { 
      
     
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Admin.table.create_table');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = Scan::where('id','=',$id)->get();
          return view('qr',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function edit(Scan $scan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scan $scan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scan $scan)
    {
        $flag = $scan->delete();
        if($flag) 
        {
            return redirect()->route('scan.index');
        }   
        else
        {
            return redirect()->route('scan.create');
        }
    }
}
