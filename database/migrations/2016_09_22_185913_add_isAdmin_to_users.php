<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        
    Schema::table('users', function($table) {
        $table->integer('isAdmin')->after('password');
    });
}
   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   
public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('isAdmin');
    });
}
}
    
