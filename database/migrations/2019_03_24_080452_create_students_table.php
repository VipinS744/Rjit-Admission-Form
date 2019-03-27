<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('gender');
            $table->integer('date');
            $table->string('month');
            $table->integer('year');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_email');
            $table->string('fa_contact');
            $table->integer('aadhaar_no');
            $table->text('id_mark');
            $table->string('te_sch_name');
            $table->string('te_sch_board');
            $table->string('te_subject');
            $table->integer('te_year_pass');
            $table->integer('te_percentage');
            $table->string('tw_sch_name');
            $table->string('tw_sch_board');
            $table->string('tw_subject');
            $table->integer('tw_year_pass');
            $table->integer('tw_percentage');
            $table->integer('tw_roll_no');
            $table->integer('jee_roll_no');
            $table->string('nationality');
            $table->string('religion');
            $table->string('category');
            $table->string('resi_jk');
            $table->string('phy_hand');
            $table->string('orga');
            $table->integer('house_no');
            $table->string('street');
            $table->string('city');
            $table->string('landmark');
            $table->string('state');
            $table->integer('pin');
            $table->integer('pe_house_no');
            $table->string('pe_street');
            $table->string('pe_city');
            $table->string('pe_landmark');
            $table->string('pe_state');
            $table->integer('pe_pin');
            $table->timestamp("created_dt");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
