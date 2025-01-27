<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_users', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->smallIncrements('id')->comment('User ID');
            $table->string('name',150)->comment('Name');
            $table->string('company_name')->comment('company name');
            $table->string('email',100)->unique()->comment('Email Address');
            $table->string('contact_num', 20)->unique()->comment('Contact Number');
            $table->string('adrss',500)->comment('Address');
            $table->string('occuptn',50)->comment('Occupation');




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
        Schema::dropIfExists('add_users');
    }
}
