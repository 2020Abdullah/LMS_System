<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();

        $title = 'تحذير !';
        $text = "هل تريد حذف هذا العنصر بالفعل ؟";
        confirmDelete($title, $text);

        return view('dashboard.Grades.index', compact('grades'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'Name_ar' => 'required'
        ], ['required' => 'تأكد من إدخال حقل اسم المرحلة !']);

        Grade::create([
            'Name_ar' => $request->Name_ar,
            'Name_en' => $request->Name_en,
            'Notes' => $request->Notes,
            'status' => $request->status,
        ]);

        Alert::success('عملية ناجحة', 'تم إضافة المرحلة بنجاح');

        return back();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'Name_ar' => 'required'
        ], ['required' => 'تأكد من إدخال حقل اسم المرحلة !']);

        $grade = Grade::where('id', $request->grade_id);

        $grade->update([
            'Name_ar' => $request->Name_ar,
            'Notes' => $request->Notes,
            'status' => $request->status,
        ]);

        Alert::success('عملية ناجحة', 'تم تعديل البيانات بنجاح');

        return back();
    }

    public function delete($id)
    {
        $grade = Grade::find($id);
        $grade->delete();
        return back();
    }
}
