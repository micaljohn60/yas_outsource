<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBizProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biz_proposal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biz_id')->constrained()->onDelete('cascade');
            $table->foreignId('proposal_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('proposal_upload_user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->text('proposal_file_path')->nullable();
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
        Schema::dropIfExists('biz_proposal');
    }
}
