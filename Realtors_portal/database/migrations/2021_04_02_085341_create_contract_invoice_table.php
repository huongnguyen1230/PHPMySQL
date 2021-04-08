<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_invoice', function (Blueprint $table) {
            $table->id();

            $table->integer('contract_id');
            $table->string('invoice_number');
            $table->text('issued_by');
            $table->text('issued_to');
            $table->text('invoice_details');
            $table->decimal('invoice_amount');
            $table->date('date_created');
            $table->date('billing_date');
            $table->date('date_paid');

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
        Schema::dropIfExists('contract_invoice');
    }
}
