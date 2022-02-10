<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->unsignedBigInteger('page_id')->index();
            $table->longText('sentence')->nullable();
            $table->string('starts_at')->nullable();
            $table->string('ends_at')->nullable();
            $table->decimal('confidence')->nullable();
            $table->string('chapter')->nullable();
            $table->string('podcast_rss')->nullable();
            $table->string('episode_link')->nullable();
            $table->timestamps();

            $table->foreign('content_id')
                ->references('id')
                ->on('contents')
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
        Schema::dropIfExists('transcriptions');
    }
}
