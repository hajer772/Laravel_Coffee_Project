<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\CoursesExport;
use App\Http\Controllers\Controller;
use App\Imports\CoursesImport;
use App\Models\Course;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{
    private $course;

    public function __construct(Course $course)
    {
        $this->middleware(['permission:read-courses'])->only('index');
        $this->middleware(['permission:create-courses'])->only('create', 'store');
        $this->middleware(['permission:export-courses'])->only('export');
        $this->middleware(['permission:delete-courses'])->only('destroy');
        $this->course = $course;
    }

    public function index()
    {
        try {
            $courses = $this->course->latest('id')->get();
            return view('admin.courses.index', compact('courses'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function import(Request $request)
    {
        try {
            Excel::import(new CoursesImport(), $request->courses);

            return redirect()->route('courses.index')->with('success', __('message.created_successfully'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function export()
    {
        return Excel::download(new CoursesExport, 'courses.xlsx');
    }
}
