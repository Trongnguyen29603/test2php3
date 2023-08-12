<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index(Request $request){
        $student = DB::table('student')
        ->whereNull('deleted_at')
        ->get();
        return view('student.index',compact('student'));
    }
    public function add(StudentRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
               $params['image']= uploadFile('hinh',$request->file('image'));
            }
            $student = Student::create($params);
           if($student->id){
            Session::flash('success','đã thêm mới thành công');
            return redirect()->route('route_student');
           }
        }
        return view('student.add');
    }
    public function edit(Request $request,$id){
        $student = Student::find($id);
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $resultDL = Storage::delete('/public'.$student->image);
                if($resultDL){
                    $params['image']= uploadFile('hinh',$request->file('image'));
                }
             }else{
                $params['image'] = $student->image;
             }
                Student::where('id',$id)->update($params);
                if($request){
                    Session::flash('success','đã SỬA thành công');
                    return redirect()->route('route_student');
                }
        }
        return view('student.edit',compact('student'));
    }
    public function delete($id){
      Student::where('id',$id)->delete();
      Session::flash('success','XOAS THANH COONG'.$id);
      return redirect()->route('route_student');
    }
}
