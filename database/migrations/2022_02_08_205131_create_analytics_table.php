<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analytics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->bigInteger('page_views_month')->default(0);
            $table->bigInteger('page_views_last_month')->default(0);
            $table->bigInteger('searches_month')->default(0);
            $table->bigInteger('searches_last_month')->default(0);
            $table->bigInteger('email_optins')->default(0);
            $table->bigInteger('cta_clicks')->default(0);
            $table->timestamps();

            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analytics');
    }
}
