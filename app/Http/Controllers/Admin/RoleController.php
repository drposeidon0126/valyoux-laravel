<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Artist;
use Gate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords(str_replace('-', ' ', request()->segment(1)));
    }

    public function index()
    {
        abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $permissions = Role::with(['permissions'])->orderBy('id', 'desc')->get();
            return datatables()->of($permissions)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('permissions', function ($data) {
                    $permissions = '';
                    foreach ($data->permissions as $permission) {
                        $permissions .= '<span class="badge badge-info">' . $permission->title . '</span>&nbsp;';
                    }
                    return $permissions;
                })->addColumn('action', function ($data) {
                    $edit = '';
                    $duplicate = '';
                    $view = '';
                    $delete = '';
                    if (Gate::allows('role_edit')) {
                        $edit = '<a title="Edit" href="' . route('admin.' . request()->segment(1) . '.edit', $data['id']) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('role_create')) {
                        $duplicate = '<a title="Duplicate" href="' . route('admin.' . request()->segment(1) . '.duplicate', $data['id']) . '" class="btn btn-v-green btn-sm"><i class="far fa-clone"></i></a>&nbsp;';
                    }
                    if (Gate::allows('role_show')) {
                        $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';
                    }
                    if (Gate::allows('role_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button>';
                    }
                    return $edit . $duplicate . $view . $delete;
                })->rawColumns(['checkbox', 'action', 'permissions'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.' . request()->segment(1) . '.list')->with($content);
    }

    public function create()
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $permissions = \App\Models\Permission::all()->pluck('title', 'id');
        $title = $this->title;
        return view('admin.' . request()->segment(1) . '.create', compact('permissions', 'title'));
    }

    final public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:roles',
            'permissions' => 'required|array',
            'permissions.*' => 'required|integer'
        ]);
        $role = Role::create($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        return redirect()->route('admin.' . request()->segment(1))->with('success', 'Added Successfully.');
    }

    public function duplicate(Role $role)
    {
        $permissions = \App\Models\Permission::all()->pluck('title', 'id');
        $role->load('permissions');
        $title = $this->title;
        return view('admin.' . request()->segment(1) . '.duplicate', compact('permissions', 'role', 'title'));
    }

    public function edit(Role $role)
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $permissions = \App\Models\Permission::all()->pluck('title', 'id');
        $role->load('permissions');
        $title = $this->title;
        return view('admin.' . request()->segment(1) . '.edit', compact('permissions', 'role', 'title'));
    }

    final public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        return redirect()->route('admin.' . request()->segment(1))->with('success', 'Updated Successfully');
    }

    final public function view(int $id): JsonResponse
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $data = Role::with('permissions:id,title')->findOrFail($id);
            return response()->json($data);
        }
    }

    final public function destroy(int $id): void
    {
        Role::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }

    final public function delete_all(Request $request)
    {
        if ($request->input('checkboxValue')) {
            $id = $request->input('checkboxValue');
            $count = count($id);
            for ($i = 0; $i < $count; $i++) {
                Role::findorFail($id[$i])->delete();
            }
            return response()->json('Selected records Deleted Successfully.');
        }
    }
    private $user_role_id;
    final public function switch()
    {
        
         $url='contacts-profile';
        if ((int)request()->get('role_id') === 2) {
            $artist_model = new Artist;
            $result = $artist_model->artistByUser(auth()->user()->id);
           // $result = \App\Models\Artist::where('user_id',auth()->user()->id)->first();
            if ($result) {
                $artist_id = $result->id;
                auth()->user()->roles()->sync(request()->get('role_id'));
            } else {
                request()->session()->flash('notify', 'Sorry you do not currently have an Artist account.');
                request()->session()->flash('button', 'Create Artist');
                request()->session()->flash('url', route('artist.artist.create'));
                return redirect()->back();
            }
            $url='artist/profile/'.$artist_id;
            $user_role_id = 2;
        }
        if ((int)request()->get('role_id') === 4) {
            $result = \App\Models\Business::where('user_id',auth()->user()->id)->first();
            if ($result) {
                auth()->user()->roles()->sync(request()->get('role_id'));
            } else {
                request()->session()->flash('notify', 'Sorry you do not currently have an Business account.');
                request()->session()->flash('button', 'Create Business');
                request()->session()->flash('url', route('business.business.create'));
                return redirect()->back();
            }
            $url='business-profile';
            $user_role_id = 4;
        }
        if ((int)request()->get('role_id') === 3) {
            auth()->user()->roles()->sync(request()->get('role_id'));
            if(request()->get('url') != ''){
                $url=request()->get('url');
            }else{
                // $url='valyou-playlist';
                $url='investor';
            }
            $user_role_id = 3;

        }
        if ((int)request()->get('role_id') === 1) {
            auth()->user()->roles()->sync(request()->get('role_id'));
            $url='/';
            $user_role_id = 1;
        }
        $user_id = auth()->user()->id;
        // $this->create_active_user($user_id,$user_role_id);
        return redirect($url)->withSuccess('Your Account has been switched successfully.');
    }

//     public function create_active_user($user_id,$user_role_id){

        
//         $user_data = DB::table('user_active_role')->where('user_id',auth()->user()->id)->first();
        
//         if(empty($user_data)){
//             $data = array(
//                 'user_id' => auth()->user()->id,
//                 'role_id' => $user_role_id,
//             );
//             DB::table('user_active_role')->insert($data);
//         }else{
//             $user_data->role_id = $user_role_id;
//             DB::table('user_active_role')->where('user_id',auth()->user()->id)->update(['role_id'=>$user_role_id]);
//         }


//     }
    public function activeuser(){



    }

}
