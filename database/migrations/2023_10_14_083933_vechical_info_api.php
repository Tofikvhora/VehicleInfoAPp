<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create("twoWheeler",function (Blueprint $table){
        $table->increments("id");
         $table->String("brand")->nullable();
         $table->timestamps();
        }
    );
    }
};
