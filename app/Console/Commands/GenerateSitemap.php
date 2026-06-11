<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Firm;
use App\Models\Foundation;
use App\Models\Project;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $sitemap = Sitemap::create();

        // Statyczne strony
        $sitemap->add(Url::create(route('landing'))->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        $sitemap->add(Url::create(route('front.articles'))->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        $sitemap->add(Url::create(route('front.projects'))->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS));
        $sitemap->add(Url::create(route('front.contact'))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('front.aboutus'))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('front.privacy'))->setPriority(0.1)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create(route('front.price'))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('front.partners'))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('front.terms'))->setPriority(0.1)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create(route('front.charity'))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('front.firms'))->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));

        // Artykuły
        Article::active()->get()->each(function (Article $article) use ($sitemap) {
            $sitemap->add(
                Url::create(route('front.articles.single', $article))
                    ->setLastModificationDate($article->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.7)
            );
        });

        // Projekty
        Project::active()->get()->each(function (Project $project) use ($sitemap) {
            $sitemap->add(
                Url::create(route('front.projects.single', $project))
                    ->setLastModificationDate($project->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.9)
            );
        });

        // Fundacje
        Foundation::where('active', true)->whereNotNull('slug')->get()->each(function (Foundation $foundation) use ($sitemap) {
            $sitemap->add(
                Url::create(route('front.foundation.single', $foundation))
                    ->setLastModificationDate($foundation->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.6)
            );
        });

        // Firmy (profile użytkowników/firm)
        Firm::all()->each(function (Firm $firm) use ($sitemap) {
            if ($firm->user_id) {
                $sitemap->add(
                    Url::create(route('front.firms.single', $firm->user_id))
                        ->setLastModificationDate($firm->updated_at)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                        ->setPriority(0.5)
                );
            }
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
