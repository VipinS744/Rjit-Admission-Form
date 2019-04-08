<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdmissionController;
use App\student;
use App\User;
use DB;
use Validator;
class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //public function show(){
      //  return view("parsonal");
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
        $file=$request->file("image");

        if($request->hasfile("image"))
        {
            $file->move("upload/",$file->getClientOriginalName());
        }
        $file1=$request->file("te_marksheet");

        if($request->hasfile("te_marksheet"))
        {
            $file1->move("upload/",$file->getClientOriginalName());
        }

        $file2=$request->file("tw_certificate");

        if($request->hasfile("tw_certificate"))
        {
            $file2->move("upload/",$file->getClientOriginalName());
        }
        
        $file3=$request->file("jee_certificate");

        if($request->hasfile("jee_certificate"))
        {
            $file3->move("upload/",$file->getClientOriginalName());
        }

        $file4=$request->file("serving_certificate");
        
        if($request->hasfile("serving_certificate"))
        {
            $file4->move("upload/",$file->getClientOriginalName());
        }    
        
        $data=validator::make($request->all(),[
            "email"=>"unique:students|email"
        ],[
             //"email.required"=>"email is needed",
             "email.email"=>"email should be valid email"])->validate();
             // echo "mohit";
         $obj=new student;
         $obj->f_name=$request->first_name;
         $obj->l_name=$request->last_name;
         $obj->email=$request->email;
         $obj->email=$request->email;
         $obj->image=$file->getClientOriginalName();
         $obj->phone_no=$request->mobile;
         $obj->gender=$request->gender;
         $obj->date=$request->date;
         $obj->month=$request->month;
         $obj->year=$request->year;
         $obj->father_name=$request->father_name;
         $obj->mother_name=$request->mother_name;
         $obj->father_email=$request->father_email;
         $obj->father_phone=$request->father_phone;
         $obj->aadhar=$request->aadhar;
         $obj->id_mark=$request->identification;
         $obj->te_school=$request->ten_school;
         $obj->te_board=$request->ten_board;
         $obj->te_subject=$request->ten_subjects;
         $obj->te_passing=$request->ten_passing;
         $obj->te_percentage=$request->ten_percentage;
         $obj->te_marksheet=$request->te_marksheet;
         $obj->tw_school=$request->tw_school;
         $obj->tw_board=$request->tw_board;
         $obj->tw_subject=$request->tw_subjects;
         $obj->tw_passing=$request->tw_passing;
         $obj->tw_percentage=$request->tw_percentage;
         $obj->tw_certificate=$file2->getClientOriginalName();
         $obj->tw_rollno=$request->tw_rollno;
         $obj->jee_roll_no=$request->jee_main_rollno;
         $obj->jee_certificate=$file3->getClientOriginalName();
         $obj->nationality=$request->nationality;
         $obj->religion=$request->religion;
         $obj->category=$request->category;
         $obj->phy_hand=$request->handicapped;
         $obj->jkresident=$request->jkresident;
         $obj->orga=$request->organisation;
         $obj->ser_certificate=$file4->getClientOriginalName();
         $obj->bsf_rank=$request->bsf_rank;
         $obj->unit=$request->unit;
         $obj->unitadd=$request->unit_add;
         $obj->capf_org=$request->capf_org;
         $obj->house_no=$request->house_no;
         $obj->street=$request->street_name;
         $obj->landmark=$request->landmark;
         $obj->city=$request->city;
         $obj->state=$request->state;
         $obj->pin=$request->pincode;
         $obj->pahouse_no=$request->pahouse_no;
         $obj->pa_street=$request->pastreet_name;
         $obj->pa_landmark=$request->palandmark;
         $obj->pa_city=$request->pacity;
         $obj->pa_state=$request->pastate;
         $obj->pa_pin=$request->papincode;
        
        $obj->created_dt=date("y-m-d h-i-s");

        // // echo "this is store";

        $is_saved = $obj->save();
        if($is_saved)
        {
            session()->flash("studentMessage","student is entered ");
            return redirect("welcome");
        }
        else{
            return redirect("log/create");
        }
        
    }

    /**
     * Display the spacified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the spacified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the spacified resource in storage.
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
     * Remove the spacified resource from storage.
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
<<<<<<< HEAD
=======
    public function be()
    {
        return view("login");
    }
    public function save(Request $request)
    {
        echo "mohit";
      // $obj=new User();
      // $obj->fname=$request->first_name;
      // $obj->lname=$request->last_name;
      // $obj->email=$request->email;
      // $obj->mobile=$request->mobile;
      // $obj->confirmpass=$request->confirmpass;

      // $obj->created_at=date("y-m-d h-i-s");    
      // $is=$obj->save();
      // if($is)
      // {
        // redirect("login");
      // }

    }
>>>>>>> d160890bbd7771b455f78be137a5279d9c02eda2
}
