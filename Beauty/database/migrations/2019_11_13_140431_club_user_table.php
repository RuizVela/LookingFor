<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClubUserTable extends Migration
{

    public function up()
    {
        Schema::create('club_user', function (Blueprint $table) {
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('user_id');
            $table->primary(['club_id', 'user_id']);
            $table->foreign('club_id')->references('id')->on('clubs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('admin')->default(0);
        });
    }
    public function down()
    {
        Schema::dropIfExists('club_user');
    }
}
