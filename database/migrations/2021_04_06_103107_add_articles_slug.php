<?php

use App\Models\Article;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AddArticlesSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });

        $this->updateSlugs();

        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->change();
        });
    }

    private function updateSlugs()
    {
        Article::all()->each(function ($article) {
            if (is_null($article->slug)) {
                $article->slug = Str::slug($article->title, '-');
                $article->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('articles', ['slug']);
    }
}
