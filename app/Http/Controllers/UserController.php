<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();
        $user = $query->latest()->paginate($request->per_page ?? 5);
        return view('pages.dashboard.user.index',compact('user'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('pages.dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request, User $avatar)
    {   
        //
        $imageName = time().$request->name.'.'.$request->avatar->extension();  
  
        $request->avatar->move(public_path('assets/user'), $imageName);
 
        $avatar = new User();
        $avatar->name = $request->name;
        $avatar->email = $request->email;
        $avatar->avatar = $imageName;
        $avatar->role_id = $request->role_id;
        $avatar->password = Hash::make($request->password);
        $avatar->save();
        return redirect()->route('user.index')
                ->withSuccess('New User is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $id = Crypt::decrypt($id);
        $user = User::findOrFail($id);
        return view('pages.dashboard.user.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        //
        //get product by ID
        $user = User::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('avatar')) {

            //upload new image
            $imageName = time().'.'.$request->avatar->extension();  
  
            $request->avatar->move(public_path('assets/user'), $imageName);

            //delete old image
            $avatar = $user->avatar;
            if ($user) {
                if ($avatar != null || $avatar != '') {
                    $file = public_path('assets/user/' . $avatar);
                    File::delete($file);
                }
                $user->update([
                    'avatar'         => $imageName,
                    'email'         => $request->email,
                    'name'   => $request->name,
                    'role_id'         => $request->role_id,
                    'password'         => Hash::make($request->password)
                ]);
            } else {
                //update user without image
                $user->update([
                    'email'         => $request->email,
                    'name'   => $request->name,
                    'role_id'         => $request->role_id,
                    'password'         => Hash::make($request->password)
                ]);
                        }
                        //update user with new image
                    }

        return redirect()->route('user.index')
                ->withSuccess('User is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $did = Crypt::decrypt($id);
        $data = User::findOrFail($did);

        $avatar = $data->avatar;
        if ($data) {
            if ($avatar != null || $avatar != '') {
                $file = public_path('assets/user/' . $avatar);
               File::delete($file);
            }
            $data->delete();
            return redirect()->route('user.index')
                ->withSuccess('User is updated successfully.');
        } else {
            return redirect()->route('user.index')
            ->withErrors('User Not Found.');
        }
    }
}
