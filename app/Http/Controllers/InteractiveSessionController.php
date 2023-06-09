<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\InteractiveSession;
use App\Models\Trainer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InteractiveSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interactiveSessions = InteractiveSession::with('trainers')->get();
        return view('cms.interactiveSessions.index', compact('interactiveSessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers = Trainer::with('user')->get();
        $courses = Course::all();
        return view('cms.interactiveSessions.create', compact('trainers', 'courses'));
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
            'tittle' => 'required|string|min:3|max:20',
        ], [
            'tittle.required' => 'العنوان مطلوب',
            'tittle.min' => 'لا يقبل أقل من 3 حروف',
            'tittle.max' => 'لا يقبل أكثر من 20 حروف',
        ]);
        DB::beginTransaction();

        try {
            if (!$validator->fails()) {
                try {
                    $interactiveSession = new InteractiveSession();
                    $interactiveSession->tittle = $request->get('tittle');
                    $interactiveSession->description = $request->get('description');
                    $interactiveSession->goals = $request->get('goals');
                    $interactiveSession->course_id = $request->get('course_id');

                    if (request()->hasFile('image')) {
                        $image = $request->file('image');
                        $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                        $image->move('storage/images/interactive_session', $imageName);
                        $interactiveSession->image = $imageName;
                    }
                    $isSaved = $interactiveSession->save();
                    $trainers = $request->get('trainer');
                    $trainerArray = explode(',', $trainers);
                    foreach ($trainerArray as $trainer) {
                        $interactiveSession->trainers()->attach($trainer);
                    }
                    if ($isSaved) {
                        DB::commit();
                        return response()->json(['icon' => 'success', 'title' => 'تمت الاضافة بنجاح'], 200);
                    }
                } catch (Exception $e) {
                    return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 400);
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
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function show(InteractiveSession $interactiveSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function edit(InteractiveSession $interactiveSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InteractiveSession $interactiveSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interactiveSession = InteractiveSession::destroy($id);
        return response()->json(['icon' => 'success', 'title' => ' تم الحذف بنجاح '], $interactiveSession ? 200 : 400);
    }
}
