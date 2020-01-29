<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use App\PostTeam;

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
        // $this->validate($request, [
        //     "name" => 'required',
        //     "detail" =>  'required',
        //     "start_date" =>  'required',
        //     "end_date" => 'required',
        //     "pre_position_id" => 'required',
        //     "pre_person" =>  'required',
        //     "pre_budget" =>  'required',
        //     "pro_person" =>  'required',
        //     "pro_budget" => 'required',
        //     "pro_position_id" =>  'required',
        //     "post_position_id" =>  'required',
        //     "post_person" =>  'required',
        //     "post_budget" =>  'required',
        // ]);
        $stores = new PostTeam;

        $stores->name = $request->input('name');
        $stores->detail = $request->input('detail');
        $stores->start_date = $request->input('start_date');
        $stores->end_date = $request->input('end_date');
        $stores->status = 1;
        $stores->pre_position_id = $request->input('pre_position_id[]');
        $stores->pre_person = $request->input('pre_person[]');
        $stores->pre_budget = $request->input('pre_budget[]');
        $stores->pro_person = $request->input('pro_person[]');
        $stores->pro_budget = $request->input('pro_budget[]');
        $stores->pro_position_id = $request->input('pro_position_id[]');
        $stores->post_position_id = $request->input('post_position_id[]');
        $stores->post_person = $request->input('post_person[]');
        $stores->post_budget = $request->input('post_budget[]');


        if(count($stores->pre_position_id) > count($stores->pre_person))
        $count = count($stores->pre_person);
    else $count = count($stores->pre_position_id);


    // for($i = 0; $i < $count; $i++){
    //     $data = array(
    //         'pre_position_id' => $stores->pre_position_id[$i],
    //         'pre_person' => $stores->pre_person[$i],
    //         'pre_budget' => $stores->pre_budget[$i],
    //         'pro_person' => $stores->pro_person[$i],
    //         'pro_budget' => $stores->pro_budget[$i],
    //         'pro_position_id' => $stores->pro_position_id[$i],
    //         'post_position_id' => $stores->post_position_id[$i],
    //         'post_person' => $stores->post_person[$i],
    //         'post_budget' => $stores->post_budget[$i],

    //     );

    //     $insertData[] = $data;
    // }

        $stores->save();
        // PostTeam::insert($insertData);
        // return redirect()->route('/findTeam')->with('success','data insert');

        if(!empty($request['pro_position_id'])){
            $pro_id = '';
            foreach($request['pro_position_id'] as $stores){
                if($pro_id != ''){
                    $pro_id = $pro_id.','.$stores;
                }else{
                    $pro_id = $stores;
                }
            }
            $request['pro_position_id'] = $pro_id;
        }

        return $request;

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
