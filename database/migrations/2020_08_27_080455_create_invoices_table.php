<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('series_id')->unsigned()->index();
            $table->string('invoice_date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('number')->default(0);
            $table->string('amount')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->longText('private_notes')->nullable();
            $table->string('status')->default('Draft');
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
        Schema::dropIfExists('invoices');
    }
}
