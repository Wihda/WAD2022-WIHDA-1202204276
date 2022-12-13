<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WadM5Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->BigIncrement('id');
            $table->string('name', 255);
            $table->string('no_hp', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->timestamp('created_at', $precision = 0);
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
    });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
