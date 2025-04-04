<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
          
            $table->string('diagnosis')->nullable(); 
             
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
            $table->dropColumn('diagnosis');
    
        });
    }
};