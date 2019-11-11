<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
