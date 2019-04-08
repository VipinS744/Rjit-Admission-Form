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
            $table->binary('image');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_email')->nullable();
            $table->string('father_phone');
            $table->string('aadhar');
            $table->text('id_mark')->nullabe();
            $table->binary('te_marksheet');
            $table->string('te_school');
            $table->string('te_board');
            $table->string('te_subject');
            $table->integer('te_passing');
            $table->integer('te_percentage');
            $table->string('tw_school');
            $table->string('tw_board');
            $table->string('tw_subject')->nullable()->nullable();
            $table->integer('tw_passing');
            $table->integer('math_mark')->nullable();
            $table->integer('bio_mark')->nullable();
            $table->integer('phy_mark')->nullable();
            $table->integer('che_mark')->nullable();
            $table->integer('tw_percentage')->nullable();
            $table->binary('tw_certificate');
            $table->string('tw_rollno');
            $table->string('jee_roll_no')->nullable();
            $table->string('jee_rank')->nullable();
            $table->binary('jee_certificate');
            $table->string('nationality');
            $table->string('religion');
            $table->string('other')->nullable();

            $table->string('category');
            $table->string('jkresident');
            $table->string('phy_hand');
            $table->string('pwd')->nullable();
            $table->string('orga');
            $table->string('bsf_rank')->nullable();
            $table->string('unit')->nullable();
            $table->string('unitadd')->nullable();
            $table->string('capf_org')->nullable();
            $table->binary('ser_certificate');
            $table->integer('house_no');
            $table->string('street');
            $table->string('city');
            $table->string('landmark');
            $table->string('state');
            $table->string('pin');
            $table->integer('pahouse_no');
            $table->string('pa_street');
            $table->string('pa_city');
            $table->string('pa_landmark');
            $table->string('pa_state');
            $table->string('pa_pin');
            $table->timestamp("created_dt");
        });
    }

    /**
     * Reverse ->nullable()the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
