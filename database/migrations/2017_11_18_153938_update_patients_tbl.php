<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePatientsTbl extends Migration
{

    public function up()
    {
        Schema::table('patients', function($table)
        {
            $table->string('gender');
            $table->string('marital_status');
            $table->text('family_history');
            $table->string('doctor_name');
            $table->string('doctor_address');
            $table->string('doctor_number');
            $table->text('medication');
            $table->string('smoker');
            $table->string('drinker');
            $table->text('medical_history');
        });
    }

    public function down()
    {
        $table->dropColumn('gender');
        $table->dropColumn('marital_status');
        $table->dropColumn('family_history');
        $table->dropColumn('doctor_name');
        $table->dropColumn('doctor_address');
        $table->dropColumn('doctor_number');
        $table->dropColumn('medication');
        $table->dropColumn('smoker');
        $table->dropColumn('drinker');
        $table->dropColumn('medical_history');
    }
}
