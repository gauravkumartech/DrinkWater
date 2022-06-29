<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('odr_id');
            $table->string('odr_first_name');
            $table->string('odr_last_name')->nullable();
            $table->string('odr_email');
            $table->unsignedBigInteger('odr_mobile')->nullable();
            $table->unsignedBigInteger('odr_package_id');
            $table->unsignedBigInteger('odr_delivery_frequency_id');
            $table->string('billing_address')->nullable(true);
            $table->string('shipping_address')->nullable(true);
            $table->string('billing_address2')->nullable(true);
            $table->string('shipping_address2')->nullable(true);
            $table->string('b_city_state_zip')->nullable(true);
            $table->string('s_city_state_zip')->nullable(true);
            $table->unsignedInteger('payment_method');
            $table->string('odr_transaction_id');
            $table->double('odr_transaction_amount');
            $table->double('odr_tax_amount');
            $table->text('odr_adv_detail_access_token');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
