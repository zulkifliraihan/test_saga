<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('roles')->orderBy('id', 'asc');
        if (request()->ajax()) {
            return DataTables::of($user)
            ->addColumn('DT_RowIndex', function() {
                $i = 1;
                return $i++;
            })
            ->addColumn('name_provider', function ($query){
                if ($query->provider != null) {
                    return ucwords($query->provider);
                }
                else {
                    return "Daftar Manual";
                }
            })
            ->addColumn('roles', function ($query){
                return $query->roles['0']->name;
            })
            ->addColumn('action', function ($action){
                // $button_all = '<div class="d-inline-flex">
                //     <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">
                //         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                //             <circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle>
                //             <circle cx="12" cy="19" r="1"></circle>
                //         </svg>
                //     </a>
                //     <div class="dropdown-menu dropdown-menu-right">
                //         <a href="'. route('dashboard.user.index', $action->id) .'" class="dropdown-item">
                //             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text mr-50 font-small-4">
                //                 <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                //                 <polyline points="14 2 14 8 20 8"></polyline>
                //                 <line x1="16" y1="13" x2="8" y2="13"></line>
                //                 <line x1="16" y1="17" x2="8" y2="17"></line>
                //                 <polyline points="10 9 9 9 8 9"></polyline>
                //             </svg>
                //             Details
                //         </a>
                //         <a href="javascript:void(0)" class="dropdown-item delete-record delete-user" id="'. $action->id .'">
                //             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-50 font-small-4">
                //                 <polyline points="3 6 5 6 21 6"></polyline>
                //                 <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                //                 <line x1="10" y1="11" x2="10" y2="17"></line>
                //                 <line x1="14" y1="11" x2="14" y2="17"></line>
                //             </svg>
                //             Delete
                //         </a>
                //     </div>
                // </div>';

                $button_all = '<a href="javascript:void(0)" class="item-edit delete-user" id="'. $action->id .'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-50 font-small-4">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>';

                $button_edit = '<a href="'. route('dashboard.user.edit', $action->id ) .'" class="item-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </a>';

                return $button_all . $button_edit;
            })
            ->rawColumns(['name_provider', 'role','action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('dashboard.content.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('dashboard.content.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Start : Validation
        $rules = [
           'name' => 'required',
           'email' => 'required|unique:users,email',
           'role' => 'required',
           'password' => 'required|min:8',
       ];

       $messages = [
           'name.required' => 'Nama lengkap wajib di isi!',
           'email.required' => 'Email wajib di isi!',
           'email.unique' => 'Email Anda Sudah Terdaftar!',
           'role.required' => 'Pilih Role terlebih dahuku!',
           'password.required' => 'Password wajib di isi!',
           'password.min' => 'Password minimal 8 karakter!',
       ];

       $validator = Validator::make($request->all(), $rules, $messages);

       if ($validator->fails()) {
           return response()->json([
               'status' => 'fail-validator',
               'message' => $validator->errors()->first()
           ], 400);
       }

       // End : Validation

       // Start : Store User
       $data = [
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password)
       ];

       $user = User::firstOrCreate($data);
       $user->assignRole($request->role);

       return response()->json([
           'status' => 'ok',
           'response' => 'create-user',
           'message' => 'User berhasil dibuat!',
           'route' => route('dashboard.user.index')
       ], 200);
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
        $user = User::find($id);
        $roles = Role::all();
        $data = [
            'user' => $user,
            'roles' => $roles
        ];

        return view('dashboard.content.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Start : Validation
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required|min:8',
        ];

        $messages = [
            'name.required' => 'Nama lengkap wajib di isi!',
            'email.required' => 'Email wajib di isi!',
            'role.required' => 'Pilih Role terlebih dahuku!',
            'password.required' => 'Password wajib di isi!',
            'password.min' => 'Password minimal 8 karakter!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'fail-validator',
                'message' => $validator->errors()->first()
            ], 400);
        }

        if ($user->email != $request->email) {
            $cek_user_email = User::where('email', $request->email)->count();
            if ($cek_user_email == 1) {
                return response()->json([
                    'status' => 'fail-email',
                    'message' => 'Email sudah terdaftar pada sistem!'
                ], 400);
            }
        }
        // End : Validation

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pasword)
        ];

        $user->update($data);
        $delete_role_user = DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->role);

        return response()->json([
            'status' => 'ok',
            'response' => 'update-user',
            'message' => 'User berhasil diupdate data!',
            'route' => route('dashboard.user.index')
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $delete_role_user = DB::table('model_has_roles')->where('model_id',$id)->delete();

        return response()->json([
            'status' => 'ok',
            'response' => 'delete-user',
            'message' => 'User berhasil dihapus!'
        ], 200);
    }
}
