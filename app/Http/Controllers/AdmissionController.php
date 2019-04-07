<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdmissionController;
use App\student;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //public function show(){
      //  return view("personal");
    //}
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   // echo "mohit"; 
       return view("form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*    $data=validator::make($request->all(),[
            "email"=>"unique:students|email"
        ],[
             //"email.required"=>"email is needed",
             "email.email"=>"email should be valid email"])->validate();*/
        $obj=new student;
        $obj->f_name=$request->first_name;
        $obj->l_name=$request->last_name;
        $obj->email=$request->your_email;
        $obj->phone_no=$request->phone;
        $obj->gender=$request->gender;
        $obj->date=$request->date;
        $obj->month=$request->month;
        $obj->year=$request->year;
        $obj->father_name=$request->Father_name;
        $obj->mother_name=$request->Mother_name;
        $obj->father_email=$request->Father_email;
        $obj->fa_contact=$request->Father_phone;
        $obj->aadhaar_no=$request->aadhar;
        $obj->id_mark=$request->Identification;
        $obj->te_sch_name=$request->ten_school;
        $obj->te_sch_board=$request->ten_board;
        $obj->te_subject=$request->ten_subjects;
        $obj->te_year_pass=$request->ten_passing;
        $obj->te_percentage=$request->ten_percentage;
        $obj->tw_sch_name=$request->tw_school;
        $obj->tw_sch_board=$request->tw_board;
        $obj->tw_subject=$request->tw_subjects;
        $obj->tw_year_pass=$request->tw_passing;
        $obj->tw_percentage=$request->tw_percentage;
        $obj->tw_roll_no=$request->tw_rollno;
        $obj->jee_roll_no=$request->jee_main_rollno;
        $obj->nationality=$request->Nationality;
        $obj->religion=$request->Religion;
        $obj->category=$request->Category;
        $obj->phy_hand=$request->Handicapped;
        $obj->resi_jk=$request->jkresident;
        $obj->orga=$request->organisation;
        $obj->house_no=$request->house_no;
        $obj->street=$request->street_name;
        $obj->landmark=$request->landmark;
        $obj->city=$request->city;
        $obj->state=$request->state;
        $obj->pin=$request->pincode;
        $obj->pe_house_no=$request->pahouse_no;
        $obj->pe_street=$request->pastreet_name;
        $obj->pe_landmark=$request->palandmark;
        $obj->pe_city=$request->pacity;
        $obj->pe_state=$request->pastate;
        $obj->pe_pin=$request->papincode;
        
        $obj->created_dt=date("y-m-d h-i-s");

        // echo "this is store";

        $is_saved = $obj->save();
        if($is_saved)
        {
            session()->flash("studentMessage","student is entered ");
            return redirect("submission");
        }
        else{
            return redirect("welcome");
        }
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function preview(Request $request)
    {
     //echo "mohit";
        return view("preview",compact("request"));
    }
}
