<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(5);
        return view('admin.service.index', compact('services'));
    }

    public function edit($id){
        $services = Service::find($id);
        return view('admin.service.edit',compact('services'));
    }
    public function update(Request $request,$id){
        $request->validate(
            [
                'service_name' => 'required|max:15',
                'service_image' => 'required|mimes:jpg,png,jpeg',
            ]
            ,
            [
                'service_name.required' => "กรุณาป้อนข้อมูลด้วยครับ",
                'service_name.max' => "กรุณาป้อนข้อมูลไม่เกิน 15 ตัวอักษร",
                'service_image.required' => "กรุณาใส่รูปเพิ่มเติม",
            ]
        );
        $service_image = $request->file('service_image');



        if($service_image){
            //บันทึกข้อมูล
            $service_image = $request->file('service_image');

            $name_gen = hexdec(uniqid());
            //เข้ารหัส
            $img_ext = strtolower($service_image->getClientOriginalExtension());
            //นามสกุลไฟล์
            $img_name = $name_gen . '.' . $img_ext;

            //อัพโหลดและอัพเดทข้อมูล
            $upload_location = 'image/service/';
            $full_path = $upload_location.$img_name;


                //ทดสอบอัพเดท
            Service::find($id)->update([
                'service_name'=>$request->service_name,
                'service_image'=>$full_path,
            ]);
            $old_image = $request->old_image;
            unlink($old_image);

            $service_image->move($upload_location,$img_name);
            return redirect()->route('services')->with('success',"update success");
        }else{
            dd("update only name");
        }
    }

    public function store(Request $request)
    {
        // dd($request -> department_name);
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'service_name' => 'required|unique:services|max:15',
                'service_image' => 'required|mimes:jpg,png,jpeg',
            ]
            ,
            [
                'service_name.required' => "กรุณาป้อนข้อมูลด้วยครับ",
                'service_name.max' => "กรุณาป้อนข้อมูลไม่เกิน 15 ตัวอักษร",
                'service_name.unique' => "กรุณาใช้ชื่ออื่นครับ",
                'service_image.required' => "กรุณาใส่รูปเพิ่มเติม",
            ]
        );
        //บันทึกข้อมูล
        $service_image = $request->file('service_image');

        $name_gen = hexdec(uniqid());
        //เข้ารหัส
        $img_ext = strtolower($service_image->getClientOriginalExtension());
        //นามสกุลไฟล์
        $img_name = $name_gen . '.' . $img_ext;

        //อัพโหลดและบันทึก
        $upload_location = 'image/service/';
        $full_path = $upload_location.$img_name;


        //ทดสอบอัพโหลด
        Service::insert([
            'service_name'=>$request->service_name,
            'service_image'=>$full_path,
            'created_at'=>Carbon::now()
        ]);

        $service_image->move($upload_location,$img_name);
        return redirect()->route('services')->with('success',"upload success");
    }
    public function delete($id){
        $img = Service::find($id)->service_image;
        unlink($img);
        $delete = Service::find($id)->Delete();
        return redirect()->back()->with('success',"Delete Success");
    }

}
