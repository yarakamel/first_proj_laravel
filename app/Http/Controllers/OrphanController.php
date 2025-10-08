<?php

namespace App\Http\Controllers;

use App\Imports\OrphansImport;
use App\Models\Orphan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class OrphanController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validation

$validator = Validator::make($request->all(), [
    'id_no' => 'required|integer|unique:orphans,id_no',
    'full_name' => 'required|string|max:255',
], [], [
    'id_no' => 'رقم الهوية',
    'full_name' => 'الاسم الكامل',
]);
        if ($validator->fails()) {
            // ترجع الأخطاء ك JSON
            return response()->json([
                'StatusCode' => 0,
                'msg' => $validator->errors()->first() // أول خطأ بس
            ]);
        }
        $Orphan=Orphan::create(['id_no'=>$request->id_no,'full_name'=>$request->full_name,]);
        return response()->json([
            'StatusCode' => 1,
            'msg' => 'تم إضافة اليتيم بنجاح!'
        ]);


    }
     public function show(Request $request){
         return view('showalldata');
     }
    public function getData(Request $request){


        $query = Orphan::query();



        if ($request->searchName) {
            $query->where("full_name", "like", "%".$request->searchName."%");
        }

        return response()->json([
            "data" => $query->get()
        ]);
}
    public function edit($id){
    return Orphan::findOrFail($id);

    }
public function update(Request $request, $id)
{
    $orphan = Orphan::find($id);

    if (!$orphan) {
        return response()->json([
            "success" => false,
            "message" => "السجل غير موجود"
        ], 404);
    }

    $updated = $orphan->update([
        "id_no" => $request->id_no,
        "full_name" => $request->full_name,
    ]);

    if ($updated) {
        return response()->json([
            "success" => true,
            "message" => "تم التعديل بنجاح"
        ]);
    } else {
        return response()->json([
            "success" => false,
            "message" => "فشل التعديل"
        ], 500);
    }
}
public function orphansDel($id){
   $orphan = Orphan::find($id);

    if (!$orphan) {
        return response()->json([
            'success' => false,
            'message' => 'السجل غير موجود'
        ], 404);
    }

    try {
        $orphan->delete();
        return response()->json([
            'success' => true,
            'message' => 'تم الحذف بنجاح'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'حدث خطأ أثناء الحذف'
        ], 500);
    }
}
public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls,csv',
    ]);
//OrphansImportاسم Class إحنا أنشأناه عشان يتحكم في قراءة ملف الإكسل وتحويل كل صف منه إلى Model Orphan.

        $file = $request->file('file');
        $data = Excel::toArray([], $file);
        $rows = $data[0];
        unset($rows[0]);// إزالة صف العناوين
    foreach ($rows as $i => $row) {
        $id_number = trim($row[0]);
        $name = trim($row[1]);
        $findorphan=Orphan::findByIdNumber($id_number);
        if()
    }
        return response()->json([
        'success' => true,
        'message' => 'تم استيراد الأيتام بنجاح!'
    ]);
}

}
