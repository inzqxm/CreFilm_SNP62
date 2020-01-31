<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use App\PostTeam;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::all();
        $positions = Position::orderBy('created_at','desc')->get();
        return view('findteam.createteam',compact('positions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('findteam.createteam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $this->validate($request, [
            "name" => 'required',
            "detail" =>  'required',
            "start_date" =>  'required',
            "end_date" => 'required',
            "pre_position_id" => 'required',
            "pre_person" =>  'required',
            "pre_budget" =>  'required',
            "pro_person" =>  'required',
            "pro_budget" => 'required',
            "pro_position_id" =>  'required',
            "post_position_id" =>  'required',
            "post_person" =>  'required',
            "post_budget" =>  'required',
            "img_head" => 'required|max:1000'
        ]);

        $filenameWithExt = $request->file('img_head')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        $extension = $request->file('img_head')->getClientOriginalName();

        //create new file name
        $filenameToStore = Date('YmdHis').'_'.$extension;

        //upload
        $request->file('img_head')->move('uploads/covers_team',$filenameToStore);


        // ------------pre-----------
        if(!empty($request->pre_position_id)){
                $pre_id = '';
            foreach($request->pre_position_id as $key => $position_id){
                if($key != 0){
                    $pre_id = $pre_id.','.$position_id;
                }else{
                    $pre_id = $position_id;
                }
            }
        }
        if(!empty($request->pre_person)){
            $pre_ps = '';
            foreach($request->pre_person as $key => $person){
                if($person != 0){
                    if($key != 0){
                        $pre_ps = $pre_ps.','.$person;
                    }else{
                        $pro_ps = $person;
                    }
                }
            }
        }
        if(!empty($request->pre_budget)){
            $pre_bg = '';
            foreach($request->pre_budget as $key => $budget){
                if($budget != "Choose..."){
                    if($key != 0){
                        $pre_bg = $pre_bg.','.$budget;
                    }else{
                        $pre_bg = $budget;
                    }
                }
            }
        }

        // ------------pro-----------
        if(!empty($request->pro_position_id)){
            $pro_id = '';
            foreach($request->pro_position_id as $key => $position_id){
                if($key != 0){
                    $pro_id = $pro_id.','.$position_id;
                }else{
                    $pro_id = $position_id;
                }
            }
        }
        if(!empty($request->pro_person)){
            $pro_ps = '';
            foreach($request->pro_person as $key => $person){
                if($person != 0){
                    if($key != 0){
                        $pro_ps = $pro_ps.','.$person;
                    }else{
                        $pro_ps = $person;
                    }
                }
            }
        }
        if(!empty($request->pro_budget)){
            $pro_bg = '';
            foreach($request->pro_budget as $key => $budget){
                if($budget != "Choose..."){
                    if($key != 0){
                        $pro_bg = $pro_bg.','.$budget;
                    }else{
                        $pro_bg = $budget;
                    }
                }
            }
        }

        // ------------post-----------
        if(!empty($request->post_position_id)){
            $post_id = '';
            foreach($request->post_position_id as $key => $position_id){
                if($key != 0){
                    $post_id = $post_id.','.$position_id;
                }else{
                    $post_id = $position_id;
                }
            }
        }
        if(!empty($request->post_person)){
            $post_ps = '';
            foreach($request->post_person as $key => $person){
                if($person != 0){
                    if($key != 0){
                        $post_ps = $post_ps.','.$person;
                    }else{
                        $post_ps = $person;
                    }
                }
            }
        }
        if(!empty($request->post_budget)){
            $post_bg = '';
            foreach($request->post_budget as $key => $budget){
                if($budget != "Choose..."){
                    if($key != 0){
                        $post_bg = $post_bg.','.$budget;
                    }else{
                        $post_bg = $budget;
                    }
                }
            }
        }

        $stores = new PostTeam;

        // $request->name;
        $stores->name = $request->name;
        $stores->status = $request->status;
        $stores->detail = $request->detail;
        $stores->start_date = $request->start_date;
        $stores->end_date = $request->end_date;
        $stores->pre_position_id = $pre_id;
        $stores->pre_person = $pre_ps;
        $stores->pre_budget = $pre_bg;
        $stores->pro_position_id = $pro_id;
        $stores->pro_person = $pro_ps;
        $stores->pro_budget = $pro_bg;
        $stores->post_position_id = $post_id;
        $stores->post_person = $post_ps;
        $stores->post_budget = $post_bg;
        $stores->img_head = $filenameToStore;
        $stores->user_id = Auth::id();

        $stores->save();

        // return 'pre position :'.$pre_id.'<br> pre person :'.$pre_person.'<br> pre budjet :'.$pre_budget.'pro position :'.$pro_id.'<br> pro person :'.$pro_person.'<br> pro budjet :'.$pro_budget.'post position :'.$post_id.'<br> post person :'.$post_person.'<br> post budjet :'.$post_budget;
        return redirect('/findteam')->with('success');
        // return $stores;

      //แปลงค่าจาก db
    //   $pre_id_explode = explode(',',$pre_id);
    //     foreach($pre_id_explode as $key => $id){
    //         $position_name['name'][$key] = Position::where('id',$id)->first();
    //     }

    //     return $position_name;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //

        // $position_want = DB::table('post_teams')
        // ->join('positions', 'post_teams.pre_position_id', '=', 'positions.id')
        // ->join('positions', 'post_teams.pro_position_id', '=', 'positions.id')
        // ->join('positions', 'post_teams.post_position_id', '=', 'positions.id')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        // ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
    }


}
