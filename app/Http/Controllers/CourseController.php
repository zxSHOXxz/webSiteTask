<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('cms.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers = Trainer::with('user')->get();
        $categories = Category::all();
        return view('cms.courses.create', compact('trainers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'title' => 'required|string|min:3|max:20',
        ], [
            'title.required' => 'الإسم مطلوب',
            'title.min' => 'لا يقبل أقل من 3 حروف',
            'title.max' => 'لا يقبل أكثر من 20 حروف',
        ]);

        DB::beginTransaction();

        try {
            if (!$validator->fails()) {
                $course = new Course();
                $course->title = $request->get('title');
                $course->about = $request->get('about');
                $course->description = $request->get('description');
                $course->price = $request->get('price');
                $course->hours = $request->get('hours');
                $course->category_id = $request->get('category_id');
                $course->trainer_id = $request->get('trainer_id');
                $course->image = $request->get('image');

                if (request()->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                    $image->move('storage/images/category', $imageName);
                    $course->image = $imageName;
                }

                $isSaved = $course->save();

                if ($isSaved) {
                    DB::commit();
                    return response()->json(['icon' => 'success', 'title' => "تمت الإضافة بنجاح"], 200);
                } else {
                    DB::rollBack();
                    return response()->json(['icon' => 'error', 'title' => "فشلت عملية التخزين"], 400);
                }
            } else {
                return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
            }
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $trainers = Trainer::with('user')->get();
        $categories = Category::all();
        return view('cms.courses.edit', compact('trainers', 'categories', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = validator($request->all(), [
            'title' => 'required|string|min:3|max:20',
        ], [
            'title.required' => 'الإسم مطلوب',
            'title.min' => 'لا يقبل أقل من 3 حروف',
            'title.max' => 'لا يقبل أكثر من 20 حروف',
        ]);

        DB::beginTransaction();

        try {
            if (!$validator->fails()) {
                $course = Course::findOrFail($id);
                $course->title = $request->get('title');
                $course->about = $request->get('about');
                $course->description = $request->get('description');
                $course->price = $request->get('price');
                $course->hours = $request->get('hours');
                $course->category_id = $request->get('category_id');
                $course->trainer_id = $request->get('trainer_id');
                $course->image = $request->get('image');

                if (request()->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                    $image->move('storage/images/category', $imageName);
                    $course->image = $imageName;
                }

                $isSaved = $course->save();

                if ($isSaved) {
                    DB::commit();
                    return response()->json(['icon' => 'success', 'title' => "تمت الإضافة بنجاح"], 200);
                } else {
                    DB::rollBack();
                    return response()->json(['icon' => 'error', 'title' => "فشلت عملية التخزين"], 400);
                }
            } else {
                return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
            }
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $course ? 200 : 400);
    }
}
