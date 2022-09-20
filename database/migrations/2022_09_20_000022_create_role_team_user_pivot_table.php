<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTeamUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('role_team_user', function (Blueprint $table) {
            $table->unsignedBigInteger('team_user_id');
            $table->foreign('team_user_id', 'team_user_id_fk_7344331')->references('id')->on('team_users')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_7344331')->references('id')->on('roles')->onDelete('cascade');
        });
    }
}
