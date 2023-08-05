<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\Models\Family;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $families;

    protected $uses;

    public function __construct()
    {
        $this->families = new Family;
        $this->users = new User;
    }

    public function index()
    {
        return view('users_management.index', [
            'users' => $this->users->orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users_management.form', [
            'families' => $this->families->getAllFamily(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        $inputs = $request->all();
        $inputs['password'] = bcrypt($request->password);
        $inputs['type'] = User::TYPE['Admin_System'];

        if ($request->avatar) {
            $path = Storage::disk('public')->put('media', $request->avatar);
            $inputs['avatar'] = Storage::disk('public')->url($path);
        }

        User::create($inputs);

        return to_route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $url = $this->users->find($id)->avatar;
        $avatarName = basename($url);

        return view('users_management.form', [
            'user' => $this->users->find($id),
            'families' => $this->families->getAllFamily(),
            'avatarName' => $avatarName,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveUserRequest $request, $id)
    {
        $inputs = array_filter($request->all());
        if ($request->password) {
            $inputs['password'] = bcrypt($request->password);
        }

        if ($request->avatar) {
            $path = Storage::disk('public')->put('media', $request->avatar);
            $inputs['avatar'] = Storage::disk('public')->url($path);
        }

        User::find($id)->update($inputs);

        return to_route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return to_route('user.index');
    }
}
