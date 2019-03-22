<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1550516658WorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('working_hours', function (Blueprint $table) {
            
if (!Schema::hasColumn('working_hours', 'start_time')) {
                $table->time('start_time');
                }
if (!Schema::hasColumn('working_hours', 'time')) {
                $table->time('time');
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
        Schema::table('working_hours', function (Blueprint $table) {
            $table->dropColumn('start_time');
            $table->dropColumn('time');
            
        });

    }
}
