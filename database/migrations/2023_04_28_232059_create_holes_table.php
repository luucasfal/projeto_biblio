<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolesTable extends Migration
{

    public function up()
    {
        Schema::create('holes', function (Blueprint $table) {
            $table->id();
            $table->string('user_type');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table){
            $table->unsignedBigInteger('user_type')->after('id');
            
            $table->foreign('user_type')->references('id')->on('holes');
        });
    }


    public function down()
    {
        Schema::dropIfExists('holes');
    }
}
