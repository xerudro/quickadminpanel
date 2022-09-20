<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamUsersTable extends Migration
{
    public function up()
    {
        Schema::create('team_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->boolean('approved')->default(0)->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
