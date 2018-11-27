<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketinforsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // migrations create table in the database
    public function up()
    {
        Schema::create('ticketinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OS');
            $table->string('softwareIssue');
            $table->string('additionalComments');
            $table->string('status')->default('Pending');
            $table->string('Reply')->default('Nothing');
            $table->string('priority')->default('low');
            $table->string('escLevel')->default('1');
            $table->integer('userinfo_id')->unsigned();  //PK and FK relationships
            $table->foreign('userinfo_id')
                ->references('id')->on('userinfo')    // the userinfo_id(FK) field in the ticketinfor table references
                ->onDelete('cascade');                // the id (PK) in the userinfo table
            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticketinfo');
    }
}
