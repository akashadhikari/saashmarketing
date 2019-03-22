<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c6b00d214c87RelationshipsToWorkingHourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('working_hours', function(Blueprint $table) {
            if (!Schema::hasColumn('working_hours', 'employees_id')) {
                $table->integer('employees_id')->unsigned()->nullable();
                $table->foreign('employees_id', '267505_5c6b00cf5d3ba')->references('id')->on('employees')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('working_hours', function(Blueprint $table) {
            
        });
    }
}
