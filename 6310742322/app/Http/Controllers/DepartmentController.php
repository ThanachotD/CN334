<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;

use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    //
    public function index(){
        //query all()
        //$departments = Department::all();
        //query select page
        $departments = Department::paginate(5);
        $trashdepartments = Department::onlyTrashed()->paginate(5);
        return view('admin.department.index',compact('departments','trashdepartments'));
    }
    public function store(Request $request){
       // dd($request -> department_name);
        //ตรวจสอบข้อมูล
        $request->validate([
            'department_name' => 'required|unique:departments|max:15'
        ]
            ,[
                'department_name.required' => "กรุณาป้อนข้อมูลด้วยครับ",
                'department_name.max' => "กรุณาป้อนข้อมูลไม่เกิน 15 ตัวอักษร"
            ]
        );
        //บันทึกข้อมูล
        $department = new Department;
        $department->department_name = $request->department_name;
        $department->user_id = Auth::user()->id;
        $department->save();
        return redirect()->back()->with('success',"sucessfully");
    }
    public function edit($id){
        $department = Department::find($id);
        return view('admin.department.edit',compact('department'));
    }
    public function update(Request $request,$id){
        $request->validate([
                'department_name' => 'required|unique:departments|max:15'
            ]
            ,[
                'department_name.required' => "กรุณาป้อนข้อมูลด้วยครับ",
                'department_name.max' => "กรุณาป้อนข้อมูลไม่เกิน 15 ตัวอักษร"
            ]
        );
        $update = Department::find($id) ->update([
            'department_name' => $request->department_name,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->route('department')->with('success',"Update success");
    }
    public function softdelete($id){
       $delete = Department::find($id)->delete();
        return redirect()->back()->with('success',"Delete Success");
    }

    public function restore($id){
        $restore = Department::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"restore success");
    }

    public function delete($id){
        $delete = Department::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"Delete Success");
    }
}
