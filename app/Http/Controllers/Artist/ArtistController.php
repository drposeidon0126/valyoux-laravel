<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Artist;
use App\Models\Wallet;
use App\Models\StockTransaction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\VideoUploads;
use DB;
use File;

class ArtistController extends Controller
{
    public function __construct()
    {
        $this->title = 'Artist';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //abort_if(Gate::denies('artist_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $records = Artist::select('id','category','brand','photo')->latest()->get();
            return datatables()->of($records)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->photo) ? $data->photo : 'assets/images/users/avator.png') . '">';
                })->addColumn('category_name', function ($data) {
                    $category_name='';
                    if($data['category'] == 0){
                        $category_name='EOI Profile';
                    }else if($data['category'] == 1){
                        $category_name='Upcoming';
                    }else if($data['category'] == 2){
                        $category_name='Professional';
                    }else{
                        $category_name='Major Artist';
                    }
                    return $category_name;
                })->addColumn('action', function ($data) {
                    $edit = ''; $view = ''; $delete = '';
                    $id=$data['id'];
                    if (Gate::allows('artist_edit')) {
                        $edit = '<a title="Edit" href="artist/artist/edit/'.$id.'" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('artist_show')) {
                        $view = '<a title="View" href="crypto-exchange?artist_id='.$id.'" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></a>&nbsp;';
                    }
                    if (Gate::allows('artist_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button>';
                    }
                    return $edit.$view.$delete;
                })->rawColumns(['checkbox','category_name','action','image'])->make(true);
        }
        $title = $this->title;
        return view('artist/list')->with("title", $title);
    }
    public function myArtists(){
        $id = auth()->user()->id;
         $artist = Artist::where('user_id',auth()->user()->id)->latest()->get();
         return view('artist/my_artists')->with("artist", $artist);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        return view('artist.create')->with("title", $title);
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
            $artist=Artist::find($request->id);

             $old_stock=$artist->stock_value;
             $new_stock=$request->input('stock_value');
             $change_stock = $artist->change_stock;
             if($old_stock != 0 && $old_stock != $new_stock){
              $change_stock =  ($new_stock-$old_stock)/$old_stock * 100;
             }
            $old_market=$artist->market_value;
             $new_market=$request->input('market_value');
              $change_market = $artist->change_market;
             if($old_market != 0 && $old_market != $new_market){
                $change_market =  ($new_market-$old_market)/$old_market * 100;
             }
            $msg='Updated Successfully';
        }else{
            $change_stock = $change_market = 0;
            $artist= new Artist();
            $msg='Added Successfully';
            $artist->user_id=auth()->user()->id;
        }
        $artist->category=$request->input('category');
        $artist->brand=$request->input('brand');
        $artist->about=$request->input('about');
        $artist->artist_about=$request->input('artist_about');
        $artist->website=$request->input('website');
        $artist->spotify=$request->input('spotify');
        $artist->soundcloud=$request->input('soundcloud');
        $artist->applemusic=$request->input('applemusic');
        $artist->youtube=$request->input('youtube');
        $artist->facebook=$request->input('facebook');
        $artist->instagram=$request->input('instagram');

        $artist->stock_value=$request->input('stock_value');
        $artist->market_value=$request->input('market_value');
        $artist->dividend_payments=$request->input('dividend_payments');
        $artist->country=$request->input('country');
        $artist->change_stock=$change_stock;
        $artist->change_market=$change_market;
        $artist->current_price=$request->input('current_price');
        $artist->total_supply=$request->input('total_supply');
        $artist->circulating_supply=$request->input('circulating_supply');
        $artist->artist=$request->input('artist');
        $artist->music_fan_investor=$request->input('music_fan_investor');
        $artist->sell_restrictions=$request->input('sell_restrictions');
        $artist->market_maker_price=$request->input('market_maker_price');
        $artist->sell_limit=$request->input('sell_limit');

        if (!empty($request->file('photo'))) {
            $artist->photo = single_image($request->file('photo'), 'artist');
        }
        $artist->save();
        $id=$artist->id;
        return redirect('artist-profile/'.$id)->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return response()->json($artist,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //abort_if(Gate::denies('artist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = $this->title;
        $artist=Artist::find($id);
        return view('artist.edit', compact('artist','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {

        $record = array(
            'category' => $request->input('category'),
            'brand' => $request->input('brand'),
            'about' => $request->input('about'),
            'website' => $request->input('website'),
            'spotify' => $request->input('spotify'),
            'soundcloud' => $request->input('soundcloud'),
            'applemusic' => $request->input('applemusic'),
            'youtube' => $request->input('youtube'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'stock_value' => $request->input('stock_value'),
            'market_value' => $request->input('market_value'),
            'dividend_payments' => $request->input('dividend_payments'),
            'country' => $request->input('country'),
        );

        if (!empty($request->file('photo'))) {
            if (File::exists($artist->photo)) {
                File::delete($artist->photo);
            }
            $record['photo'] = single_image($request->file('photo'), request()->segment(2));
        }
        $artist->update($record);
        return redirect()->route('artist.' . request()->segment(2) . '.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artist::findOrFail($id)->delete();
        StockTransaction::where("artist_id", $id)->delete();
        return response()->json("Deleted Successfully.");
    }
    public function delete_all(Request $request)
    {
        Artist::whereIn('id', $request->input('checkboxValue',[]))->delete();
        return response()->json('Selected records Deleted Successfully.');
    }
    public function artist_profile($id){

        $artist = Artist::where('id',$id)->latest()->first();
        if($artist){
            return view('artist.artist-profile')->with("artist", $artist);
        }
    }
    public function profile($id)
    {
        echo $this->getArtist($id, "_artist-profile");
    }
    public function stockprice($id)
    {
        echo $this->getArtist($id, "_stock-price");
    }
    public function songs($id)
    {
        $records = VideoUploads::with('user')->where(['artist_id'=>$id,'type'=>1])->limit(10)->get();
        echo $this->getArtist($id, "_songs", $records);

    }
    public function photos($id)
    {
        echo $this->getArtist($id, "_photos");

    }
    public function revenueStreams($id){
        $artist = Artist::where('id',$id)->latest()->first();
        $user_id = $artist->user_id;

        $total_revenue = DB::table('wallet')
                            ->select('note', DB::raw('SUM(amount) as total'))
                            ->where(['to_user_id'=>$user_id,'type'=>0])
                            ->groupBy('note')
                            ->get();

        $notes = exchangeRateNote();
        // echo "<pre>";
        // print_r($notes);die;
        $sum = 0;
        foreach($total_revenue as $key1=>$row){
            $sum += $row->total;
            $notes[($row->note)]['total'] = $row->total;
        }

        $total_amount['total'] =$sum;
 
        if($artist && $notes && $total_amount && $total_amount){
            return view('artist.revenue-streams', compact('artist','notes','total_revenue','total_amount'));
        }

    }
    public function bank($id)
    {
        echo $this->getArtist($id, "_bank");
    }
    public function collaborate($id)
    {
        echo $this->getArtist($id, "_collaborate");
    }
    public function invite($id)
    {
        echo $this->getArtist($id, "_invite");
    }
    public function promote($id)
    {
        echo $this->getArtist($id, "_promote");
    }
    public function ecommerceProducts($id)
    {
        echo $this->getArtist($id, "_ecommerce-products");
    }
    public function subscriptions($id)
    {
        echo $this->getArtist($id, "_subscriptions");
    }
    public function investmentDeal($id)
    {
        echo $this->getArtist($id, "_investment_deal");
    }
    public function academy($id)
    {
        echo $this->getArtist($id, "_academy");
    }
    public function mysongs()
    {
        $records = VideoUploads::with('user')->where(['user_id'=>auth()->user()->id,'type'=>1])->limit(10)->get();
        if(empty($id)){
            $artist = Artist::where('user_id',auth()->user()->id)->latest()->first();
        }else{
            $artist = Artist::where('id',$id)->latest()->first();
        }
        return view('artist.songs',compact('records','artist'));
    }
    public function posts($id)
    {
        $records = VideoUploads::with('user')->where(['user_id'=>auth()->user()->id,'type'=>1])->limit(10)->get();
        echo $this->getArtist($id, "_posts", $records);
    }
    public function setprimaryartist(){

        $artist_type =$_GET['value'];
        $artist_id =$_GET['artist_id'];
        $artist =  Artist::find($artist_id);
        if($artist && !empty($artist_type)){
            $all_artist = Artist::where('user_id', auth()->user()->id)->update(array('primary_artist' => 0));
            $artist->primary_artist = 1;
            $artist->save();

        }

      echo true;
    }

    private function getArtist($id, $component, $records = null){
        $artist = Artist::where('id',$id)->latest()->first();
        $data = compact('artist');
        if($records){
            $data = compact('records','artist');
        }

        if($artist){
            if(!empty($_GET["id"])){
                // tab button
                return view('artist.'.substr($component, 1), $data);
                // echo  json_encode( ["html"=>view('artist.artist_part.'.$component, $data)->render()]);
            }else{
                // page is refreshed
                return view('artist.'.substr($component, 1), $data);
            }
        }
    }

}
