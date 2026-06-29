<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateArticleSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-article-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for articles that do not have one';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $articles = Article::whereNull('slug')->orWhere('slug', '')->get();

        if ($articles->isEmpty()) {
            $this->info('No articles found without a slug.');

            return;
        }

        $this->info("Generating slugs for {$articles->count()} articles...");

        foreach ($articles as $article) {
            if ($article->title) {
                $article->slug = Str::slug($article->title);
                $article->save();
                $this->line("Generated slug for: {$article->title} -> {$article->slug}");
            }
        }

        $this->info('Slugs generated successfully.');
    }
}
