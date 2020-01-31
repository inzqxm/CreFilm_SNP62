<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostTeamCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function findPosition($position_array){
        $array = explode(',',$position_array);

        foreach ($array as $key => $pos_id){
            //get ค่า ของ แต่ละ position
            $position = \DB::table('positions')->where('id',$pos_id)->first();
            //รวมทุกค่า
//            if( $text == null){
//                $text = $position->position_name;
//            }else{
//                $text = $text.','.$position->position_name;
//            }

            $text_pos[$key] = $position->position_name;
        }
        return $text_pos;
    }

    public function explodePerson($person_array){
        $arrayPerson = explode(',',$person_array);

//        $values = array();
//
//        array_combine($arrayPerson, $values);
//
        return $arrayPerson;
    }

    public function explodeBudget($budget_array){
        $arrayBudget = explode(',',$budget_array);

        return $arrayBudget;
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pre_position' => $this->findPosition($this->pre_position_id),
            'pro_position' => $this->findPosition($this->pro_position_id),
            'post_position' => $this->findPosition($this->post_position_id),
            'pre_budget' => $this->explodePerson($this->pre_budget),
            'pro_budget' => $this->explodePerson($this->pro_budget),
            'post_budget' => $this->explodePerson($this->post_budget),
            'pre_person' => $this->explodeBudget($this->pre_person),
            'pro_person' => $this->explodeBudget($this->pro_person),
            'post_person' => $this->explodeBudget($this->post_person),
        ];
    }
}
