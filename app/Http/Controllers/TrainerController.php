<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\User;
use App\Traits\UserTypeTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    use UserTypeTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::with('user')->get();
        return view('cms.trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.trainers.create');
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
                $this->createUser($request, 'trainer');
            });
            return response()->json(['icon' => 'success', 'title' => 'تمت عملية الحفظ بنجاح'], 200);
        } catch (Exception $e) {
            return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 400);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('cms.trainers.edit', ['trainer' => $trainer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $this->updateUser($request, 'trainer', $id);
            });
            return response()->json(['icon' => 'success', 'title' => 'تمت عملية التحديث بنجاح'], 200);
        } catch (Exception $e) {
            return response()->json(['icon' => 'error', 'title' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $user = $trainer->user;
        $user = User::destroy($user->id);
        $trainer = Trainer::destroy($id);

        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $trainer ? 200 : 400);
    }
}
