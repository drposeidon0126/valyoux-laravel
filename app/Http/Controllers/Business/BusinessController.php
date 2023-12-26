<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Business;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->title = 'Business';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('business_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $records = Business::select('id','brand','occupation','photo')->where('user_id',auth()->user()->id)->latest()->get();
            return datatables()->of($records)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->photo) ? $data->photo : 'assets/images/users/avator.png') . '">';
                })->addColumn('action', function ($data) {
                    $edit = ''; $view = ''; $delete = '';
                    if (Gate::allows('business_edit')) {
                        $edit = '<a title="Edit" href="' . route(request()->segment(1).'.'.request()->segment(2).'.edit', $data['id']) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('business_show')) {
                        $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';
                    }
                    if (Gate::allows('business_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button>';
                    }
                    return $edit.$view.$delete;
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        $title = $this->title;
        return view(request()->segment(1) . '.' . request()->segment(2) . '.list',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        return view(request()->segment(1) . '.' . request()->segment(2) . '.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->id){
            $business=Business::find($request->id);
            $msg='Updated Successfully';
        }else{
            $business= new Business();
            $msg='Added Successfully';
        }
        $business->business_type=$request->input('business_type');
        $business->brand=$request->input('brand');
        $business->occupation=$request->input('occupation');
        $business->about=$request->input('about');
        $business->website=$request->input('website');
        $business->youtube=$request->input('youtube');
        $business->facebook=$request->input('facebook');
        $business->twitter=$request->input('twitter');
        $business->instagram=$request->input('instagram');
        $business->otherlink=$request->input('otherlink');
        $business->user_id=auth()->user()->id;
        if (!empty($request->file('photo'))) {
            $business->photo = single_image($request->file('photo'), 'business');
        }
        $business->save();
        $id=$business->id;
        return redirect('business-profile')->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return response()->json($business,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        abort_if(Gate::denies('business_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = $this->title;
        return view(request()->segment(1) . '.' . request()->segment(2) . '.edit', compact('business','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $record = array(
            'business_type' => $request->input('business_type'),
            'brand' => $request->input('brand'),
            'occupation' => $request->input('occupation'),
            'about' => $request->input('about'),
            'website' => $request->input('website'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'youtube' => $request->input('youtube'),
            'otherlink' => $request->input('otherlink'),
            'user_id' => auth()->user()->id
        );

        if (!empty($request->file('photo'))) {
            if (\File::exists($business->photo)) {
                \File::delete($business->photo);
            }
            $record['photo'] = single_image($request->file('photo'), request()->segment(2));
        }
        $business->update($record);
        return redirect()->route(request()->segment(1) . '.' . request()->segment(2) . '.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Business::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }
    public function delete_all(Request $request)
    {
        Business::whereIn('id', $request->input('checkboxValue',[]))->delete();
        return response()->json('Selected records Deleted Successfully.');
    }

}
