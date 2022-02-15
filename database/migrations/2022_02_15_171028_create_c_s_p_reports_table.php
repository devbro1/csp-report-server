<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCSPReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csp_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('document_uri')->nullable();
            $table->text('referrer')->nullable();
            $table->text('blocked_uri')->nullable();
            $table->text('violated_directive')->nullable();
            $table->text('original_policy')->nullable();
            $table->text('status_code')->nullable();
            $table->text('script_sample')->nullable();
            $table->json('report')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_s_p_reports');
    }
}
