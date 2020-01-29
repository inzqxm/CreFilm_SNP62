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
            $pre_person = '';
            foreach($request->pre_person as $key => $person){
                if($person != 0){
                    if($key != 0){
                        $pre_person = $pre_person.','.$person;
                    }else{
                        $pre_person = $person;
                    }
                }
            }
        }
        if(!empty($request->pre_budget)){
            $pre_budget = '';
            foreach($request->pre_budget as $key => $budget){
                if($budget != "Choose..."){
                    if($key != 0){
                        $pre_budget = $pre_budget.','.$budget;
                    }else{
                        $pre_budget = $budget;
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
            $pro_person = '';
            foreach($request->pro_person as $key => $person){
                if($person != 0){
                    if($key != 0){
                        $pro_person = $pro_person.','.$person;
                    }else{
                        $pro_person = $person;
                    }
                }
            }
        }
        if(!empty($request->pro_budget)){
            $pro_budget = '';
            foreach($request->pro_budget as $key => $budget){
                if($budget != "Choose..."){
                    if($key != 0){
                        $pro_budget = $pro_budget.','.$budget;
                    }else{
                        $pro_budget = $budget;
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
            $post_person = '';
            foreach($request->post_person as $key => $person){
                if($person != 0){
                    if($key != 0){
                        $post_person = $post_person.','.$person;
                    }else{
                        $post_person = $person;
                    }
                }
            }
        }
        if(!empty($request->post_budget)){
            $post_budget = '';
            foreach($request->post_budget as $key => $budget){
                if($budget != "Choose..."){
                    if($key != 0){
                        $post_budget = $post_budget.','.$budget;
                    }else{
                        $post_budget = $budget;
                    }
                }
            }
        }

         $stores = new PostTeam;

        $stores->name = $request->name;
        $stores->detail = $request->detail;
        $stores->start_date = $request->start_date;
        $stores->end_date = $request->end_date;
        $stores->pre_position_id = $pre_id;
        $stores->pre_person = $pre_person;
        $stores->pre_budget = $pre_budget;
        $stores->pro_position_id = $pro_id;
        $stores->pro_person = $pro_person;
        $stores->pro_budget = $pro_budget;
        $stores->post_position_id = $post_id;
        $stores->post_person = $post_person;
        $stores->post_budget = $post_budget;


        $stores->save();

        // return 'pre position :'.$pre_id.'<br> pre person :'.$pre_person.'<br> pre budjet :'.$pre_budget.'pro position :'.$pro_id.'<br> pro person :'.$pro_person.'<br> pro budjet :'.$pro_budget.'post position :'.$post_id.'<br> post person :'.$post_person.'<br> post budjet :'.$post_budget;
        return view('findteam.createteam');

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
