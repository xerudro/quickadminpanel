<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrmCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('crm_customers', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_7348361')->references('id')->on('teams');
        });
    }
}
