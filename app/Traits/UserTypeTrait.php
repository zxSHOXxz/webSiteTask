<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait UserTypeTrait
{
    public function createUser($request, $userType)
    {
        $validator = validator($request->all(), []);

        if (!$validator->fails()) {
            $userClass = User::getUserClass($userType);

            $guard = new $userClass();

            $guard->email = $request->get('email');
            $guard->password = Hash::make($request->get('password'));
            $isSaved = $guard->save();

            if ($isSaved) {
                $user = new User;

                if (request()->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                    $image->move('storage/images/' . $userType, $imageName);
                    $user->image = $imageName;
                }

                $user->name = $request->get('name');
                $user->mobile = $request->get('mobile');
                $user->address = $request->get('address');
                $user->city = $request->get('city');
                $user->status = $request->get('status');
                $user->birthday = $request->get('birthday');
                $user->gender = $request->get('gender');

                $user->userable()->associate($guard);

                $userSaved = $user->save();

                if ($userSaved) {
                    return response()->json(['icon' => 'success', 'title' => 'تمت عملية الحفظ بنجاح'], 200);
                } else {
                    throw new \Exception('فشلت عملية الاضافة');
                }
            } else {
                throw new \Exception('فشلت عملية الاضافة');
            }
        } else {
            throw new \Exception($validator->getMessageBag()->first());
        }
    }
    public function updateUser($request, $userType, $id)
    {
        $validator = validator($request->all(), []);

        if (!$validator->fails()) {
            $userClass = User::getUserClass($userType);

            $guard = $userClass::findOrFail($id);

            $guard->email = $request->get('email');
            $isSaved = $guard->save();

            if ($isSaved) {
                $user = $guard->user;
                if (request()->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                    $image->move('storage/images/' . $userType, $imageName);
                    $user->image = $imageName;
                }

                $user->name = $request->get('name');
                $user->mobile = $request->get('mobile');
                $user->address = $request->get('address');
                $user->city = $request->get('city');
                $user->status = $request->get('status');
                $user->birthday = $request->get('birthday');
                $user->gender = $request->get('gender');

                $userSaved = $user->save();

                if ($userSaved) {
                    return response()->json(['icon' => 'success', 'title' => 'تمت عملية الحفظ بنجاح'], 200);
                } else {
                    throw new \Exception('فشلت عملية التعديل');
                }
            } else {
                throw new \Exception('فشلت عملية التعديل');
            }
        } else {
            throw new \Exception($validator->getMessageBag()->first());
        }
    }
}
