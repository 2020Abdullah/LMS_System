<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Season;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class seasonsController extends Controller
{
    public function index()
    {
        $Seasons = Season::all();
        $grades = Grade::all();
        $title = 'تحذير !';
        $text = "هل تريد حذف هذا العنصر بالفعل ؟";
        confirmDelete($title, $text);
        return view('dashboard.Seasons.index', compact('Seasons', 'grades'));
    }
    public function store(Request $request)
    {
        $group_classes = $request->classes;

        foreach ($group_classes as $group_class) {
            Season::create([
                'name_class' => $group_class['name_class'],
                'grade_id' => $group_class['grade_id'],
            ]);
        }

        Alert::success('عملية ناجحة', 'تم إضافة البيانات بنجاح');

        return back();
    }
    public function delete($id)
    {
        $Season = Season::find($id);
        $Season->delete();
        return back();
    }
}
