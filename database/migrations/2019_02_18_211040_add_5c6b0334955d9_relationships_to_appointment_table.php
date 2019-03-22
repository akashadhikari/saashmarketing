<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c6b0334955d9RelationshipsToAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function(Blueprint $table) {
            if (!Schema::hasColumn('appointments', 'client_id')) {
                $table->integer('client_id')->unsigned()->nullable();
                $table->foreign('client_id', '267509_5c6b0331ddc3f')->references('id')->on('clients')->onDelete('cascade');
                }
                if (!Schema::hasColumn('appointments', 'employee_id')) {
                $table->integer('employee_id')->unsigned()->nullable();
                $table->foreign('employee_id', '267509_5c6b03320419f')->references('id')->on('employees')->onDelete('cascade');
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
        Schema::table('appointments', function(Blueprint $table) {
            
        });
    }
}
