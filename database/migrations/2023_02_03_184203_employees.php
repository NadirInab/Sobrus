<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees', function(Blueprint $table){
            $table->bigIncrements('id') ;
            $table->string('name') ;
            $table->mediumText('imag') ;
            $table->mediumText('role') ;
            $table->string('linkdin') ;
            $table->string('city') ;
            $table->timestamps() ;
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employees') ;
    }
};
