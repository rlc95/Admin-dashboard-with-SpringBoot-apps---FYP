<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustmrTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custmr_transactions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->smallIncrements('trnsid')->comment('transactn ID');
            $table->string('authrtyName',150)->comment('authprity Name');
            $table->string('trnsactn',500)->comment('transaction');
            $table->integer('authrtyid')->comment('authprity ID');
            $table->integer('cusid')->comment('customer ID');
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
        Schema::dropIfExists('custmr_transactions');
    }
}
