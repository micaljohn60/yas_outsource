<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bizs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('status')->default('draft');
            $table->string('phone');
            $table->string('register_number');
            $table->string('country');
            $table->text('address')->nullable();
            $table->text('reason_sale');
            $table->string('biz_detail');
            $table->string('position_of_owner')->nullable();
            $table->double('wish_sale_price')->nullable();
            $table->double('actual_sale_price')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('share_holder')->nullable();
            $table->string('language')->default('english')->nullable();
            $table->string('years_est')->nullable();
            $table->text('file_path')->nullable();
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
        Schema::dropIfExists('bizs');
    }
}
