<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTranslationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //['title', 'body', 'more_read'];

        Schema::create('blog_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->text('more_read');
            $table->bigInteger('blog_id')->unsigned()->nullable();
            $table->string('locale')->index();
            $table->unique(['blog_id', 'locale']);
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('blog_translations');
    }

}
