<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company');
            $table->string('adress');
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->string('category')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
