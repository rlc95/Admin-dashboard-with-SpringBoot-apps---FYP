<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->increments('id');
            $table->string('name');
            $table->string('fullname');
            $table->string('email');
            $table->string('address');
            $table->integer('phone');
            $table->string('dob');
            $table->string('nic');
            $table->string('gender');
            $table->string('occupation');
            $table->string('password');
            $table->string('licencenum');
            $table->string('issued_date'); 
            $table->string('expiry_date');
            $table->boolean('a1')->comment('Status (1=True/0=False)');
            $table->boolean('a')->comment('Status (1=True/0=False)');
            $table->boolean('b1')->comment('Status (1=True/0=False)');
            $table->boolean('b')->comment('Status (1=True/0=False)');
            $table->boolean('c1')->comment('Status (1=True/0=False)');
            $table->boolean('c')->comment('Status (1=True/0=False)');
            $table->boolean('ce')->comment('Status (1=True/0=False)');
            $table->boolean('d1')->comment('Status (1=True/0=False)');
            $table->boolean('d')->comment('Status (1=True/0=False)');
            $table->boolean('de')->comment('Status (1=True/0=False)');
            $table->boolean('g1')->comment('Status (1=True/0=False)');
            $table->boolean('g')->comment('Status (1=True/0=False)');
            $table->boolean('j')->comment('Status (1=True/0=False)');
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
        Schema::dropIfExists('customers');
    }
}
