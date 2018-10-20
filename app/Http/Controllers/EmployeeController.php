<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Employee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model->all();
        return view('admin.backends.employee.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backends.employee.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validator = \Validator::make($request->all(), [
                'nik' => 'required',
                'name' => 'required',
                'email' => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }
            $data= $this->model;
            $data->nik=$request->get('nik');
            $data->name=$request->get('name');
            $data->email=$request->get('email');
            $data->save();
       return redirect()->route('employee.index')->with('alert-success','Berhasil Menambahkan Data!');


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
        $data = $this->model->where('id',$id)->get();

        return view('admin.backends.employee.form.edit',compact('data'));
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
        $data = $this->model->where('id',$id)->first();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->nik = $request->nik;
        $data->save();
        return redirect()->route('employee.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->model->find($id);
        $data->delete();
        return redirect()->route('employee.index')->with('alert-success','Data berhasi dihapus!');
        // return view('admin.backends.employee.index',compact('data'));
    }
}
