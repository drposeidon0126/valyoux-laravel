<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->title = ucwords(str_replace('-', ' ', request()->segment(1)));
    }

    public function index()
    {
        abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $permissions = Permission::orderBy('id','desc')->get();
            return datatables()->of($permissions)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('action', function ($data) {
                    $edit = ''; $duplicate = ''; $view = ''; $delete = '';
                    if (Gate::allows('permission_edit')) {
                        $edit = '<a title="Edit" href="' . request()->segment(1) . '/form/edit/' . $data['id'] . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('permission_create')) {
                        $duplicate = '<a title="Duplicate" href="' . request()->segment(1) . '/form/duplicate/' . $data['id'] . '" class="btn btn-v-green btn-sm"><i class="far fa-clone"></i></a>&nbsp;';
                    }
                    if (Gate::allows('permission_show')) {
                        $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';
                    }
                    if (Gate::allows('permission_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button>';
                    }
                    return $edit.$duplicate.$view.$delete;
                })->rawColumns(['checkbox', 'action'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.' . request()->segment(1) . '.list')->with($content);
    }

    public function form(Request $request, $form_choice = "", $id = "")
    {
        if ($request->input()) {
            if ($form_choice == 'add' || $form_choice == 'duplicate') {
                $request->validate([
                    'title' => 'required|unique:permissions',
                ]);
            }
            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = ($form_choice == 'edit') ? Permission::find($id) : new Permission;
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->save();
            if ($form_choice == 'edit') {
                return redirect(request()->segment(1))->with('success', 'Updated Successfully.');
            } else if ($form_choice == 'add' || $form_choice == 'duplicate') {
                return redirect(request()->segment(1))->with('success', 'Added Successfully.');
            }
        } else {
            $view = request()->segment(1) . '.form';
            if ($form_choice == 'edit' || $form_choice == 'duplicate') {
                $content['record'] = Permission::findOrFail($id);
            }
            $content['title'] = $this->title;
            return view('admin.' . $view)->with($content);
        }
    }

    final public function view(int $id): JsonResponse
    {
        if (request()->ajax()) {
            $data = Permission::findOrFail($id);
            return response()->json($data);
        }
    }

    final public function destroy(int $id): void
    {
        Permission::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }

    final public function delete_all(Request $request)
    {
        if ($request->input('checkboxValue')) {
            $id = $request->input('checkboxValue');
            $count = count($id);
            for ($i = 0; $i < $count; $i++) {
                Permission::findorFail($id[$i])->delete();
            }
            return response()->json('Selected records Deleted Successfully.');
        }
    }
}
