<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Traits\UserTypeTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    use UserTypeTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('user')->get();
        return view('cms.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $this->createUser($request, 'student');
            });
            return response()->json(['icon' => 'success', 'title' => 'تمت عملية الحفظ بنجاح'], 200);
        } catch (Exception $e) {
            return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('cms.students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $this->updateUser($request, 'student', $id);
            });
            return response()->json(['icon' => 'success', 'title' => 'تمت عملية التحديث بنجاح'], 200);
        } catch (Exception $e) {
            return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $user = $student->user;
        $user = User::destroy($user->id);
        $student = Student::destroy($id);

        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $student ? 200 : 400);
    }
}
