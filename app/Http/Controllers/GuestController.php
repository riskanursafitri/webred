<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Internship;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function internship()
    {
        return view('internship.internshipdata');
    }

    public function internshipCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|regex:/^([^0-9]*)$/',
            'email' => 'required',
            'address' => 'required',
            'instansi' => 'required',
            'phone_number' => 'required',
            // 'file' => 'required',
        ]);

        $file           = $request->file('file');
        $file_name      = $file->getClientOriginalName();
        $file->move('file_upload', $file->getClientOriginalName());

        $internship = new Internship;
        $internship->name = $request->input('name');
        $internship->email = $request->input('email');
        $internship->address = $request->input('address');
        $internship->instansi = $request->input('instansi');
        $internship->phone_number = $request->input('phone_number');
        $internship->file = $file_name;

        $internship->save();

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Data berhasil disimpan', 'success');
        // return redirect()->route('internshipdata');
        return redirect('/internship');
    }
}
