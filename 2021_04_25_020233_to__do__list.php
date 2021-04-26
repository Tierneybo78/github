<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ToDoList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('To_Do_List', function (Blueprint $table) {
            $table->bigIncrements('Item_name');
            $table->bigIncrements('Description');
            $table->bigIncrements('Creation_Date');
            $table->bigIncrements('Due_Date');
            $table->bigIncrements('Completion_flag');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('To_Do_List');
    }
}
