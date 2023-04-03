<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserActivity;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::paginate(10);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return User::find($id);
    }

    /**
     * Return the speed list and speed mean of an activity of user.
     *
     * @param int $user_id
     * @param int $activity_id
     * @return \Illuminate\Http\Response
     */
    public function speed_user_activity(int $user_id, int $activity_id)
    {
        $user_activity_speed_list = UserActivity::where([["user_id", $user_id], ["activity_id", $activity_id]])->pluck("speed");
        $array_list = $user_activity_speed_list->toArray();

        return response()->json([
            'user_speed_list' => $array_list,
            'mean' => array_sum($array_list) / count($array_list)
        ], 200);
    }
}
