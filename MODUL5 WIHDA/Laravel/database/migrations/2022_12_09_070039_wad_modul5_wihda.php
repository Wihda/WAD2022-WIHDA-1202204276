<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WadModul5Wihda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 255);
            $table->string('owner', 255);
            $table->string('brand', 255);
            $table->datetime('purchase_date');
            $table->text('description');
            $table->string('image', 255);
            $table->enum('status', ['Lunas','Belum-Lunas']);
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
