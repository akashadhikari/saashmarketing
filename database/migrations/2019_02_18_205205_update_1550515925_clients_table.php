<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1550515925ClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            
if (!Schema::hasColumn('clients', 'phone')) {
                $table->string('phone')->nullable();
                }
if (!Schema::hasColumn('clients', 'email')) {
                $table->string('email')->nullable();
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
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('email');
            
        });

    }
}
