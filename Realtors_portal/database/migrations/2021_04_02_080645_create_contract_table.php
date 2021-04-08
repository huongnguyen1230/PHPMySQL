<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->id();

            $table->integer('client_id');
            $table->integer('employee_id');
            $table->integer('contract_type_id');
            $table->text('contract_details');
            $table->integer('payment_frequency_id');
            $table->integer('number_of_invoices');
            $table->decimal('payment_amount');
            $table->decimal('fee_percentage');
            $table->decimal('fee_amount');
            $table->date('date_signed');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('transaction_id');

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
        Schema::dropIfExists('contract');
    }
}
