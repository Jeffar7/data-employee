<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;


class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('/karyawan', compact("employees"));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|string|unique:App\Models\Employee,email',
            'jenis_kelamin' => 'required',
            'nomor_hp' => 'required|numeric',
            'current_salary' => 'required|numeric',
            'foto_profil' => 'image|file'
        ]);

        if($request->file('foto_profil')){
            $validated['foto_profil'] = $request->file('foto_profil')->store('post-foto_profil');
        }



        $employee = Employee::create($validated);
        return redirect()->back()->with('success', "Success Input Data Karyawan");
    }

    public function detail($id){
        $employee = Employee::find($id);

        return view('/karyawanDetail', compact("employee"));
    }

    public function exportWord($id){
        $employee = Employee::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/user.docx');
        $templateProcessor->setValue('nama', $employee->nama);
        $templateProcessor->setValue('jenis_kelamin', $employee->jenis_kelamin);
        $templateProcessor->setValue('nomor_hp', $employee->nomor_hp);
        $templateProcessor->setValue('email', $employee->email);
        $templateProcessor->setValue('current_salary', $employee->current_salary);
        $templateProcessor->setImageValue('foto_profil', array('path' => 'storage/' . $employee->foto_profil));
        $fileName = $employee->nama;
        $templateProcessor->saveAs($fileName. '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
