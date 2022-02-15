<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('url_ending')->unique();
            $table->string('title')->nullable();
            $table->string('podcast_rss')->nullable();
            $table->string('podcast_link')->nullable();
            $table->string('video_link')->nullable();
            $table->longText('summary')->nullable();
            $table->string('platform')->nullable();
            $table->string('tags')->nullable();
            $table->string('people')->nullable();
            $table->decimal('length')->default(0);
            $table->boolean('show_cta')->default(false);
            $table->unsignedBigInteger('cta_id')->nullable();
            $table->bigInteger('cta_clicks')->default(0);
            $table->bigInteger('email_optin')->default(0);
            $table->bigInteger('social_share_clicks')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('meta_keywords')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
