<?php

namespace App\Services;

use App\Http\Resources\MultiselectResource;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Http\Resources\PayModesResource;
use App\Http\Resources\TypeOfContractResource;
use App\Http\Resources\WorkingModesResource;
use App\Http\Resources\WorkLoadResource;
use App\Models\Category;
use App\Models\CvType;
use App\Models\Day;
use App\Models\Education;
use App\Models\Experience;
use App\Models\LangLevel;
use App\Models\Offer;
use App\Models\PayoutMode;
use App\Models\PaySystem;
use App\Models\ShiftWork;
use App\Models\TypeOfContract;
use App\Models\Wait;
use App\Models\Welcome;
use App\Models\WorkingMode;
use App\Models\WorkingPlace;
use App\Models\WorkLoad;
use Illuminate\Support\Facades\Cache;

class DictionaryService
{
    public function getCategories(): mixed
    {
        return Cache::rememberForever('category', function () {
            return MultiselectResource::collection(Category::isRoot()->get());
        });
    }

    public function getWorkingModes(): mixed
    {
        return Cache::rememberForever('workingModes', function () {
            return WorkingModesResource::collection(WorkingMode::all());
        });
    }

    public function getWorkingPlaces(): mixed
    {
        return Cache::rememberForever('workingPlaces', function () {
            return MultiselectResource::collection(WorkingPlace::all());
        });
    }

    public function getTypesOfContract(): mixed
    {
        return Cache::rememberForever('typesOfContract', function () {
            return TypeOfContractResource::collection(TypeOfContract::all());
        });
    }

    public function getWorkLoads(): mixed
    {
        return Cache::rememberForever('workLoads', function () {
            return WorkLoadResource::collection(WorkLoad::all());
        });
    }

    public function getPayoutModes(): mixed
    {
        return Cache::rememberForever('payoutModes', function () {
            return PayModesResource::collection(PayoutMode::all());
        });
    }

    public function getPaySystems(): mixed
    {
        return Cache::rememberForever('paySystems', function () {
            return PayModesResource::collection(PaySystem::all());
        });
    }

    public function getDays(): mixed
    {
        return Cache::rememberForever('days', function () {
            return PayModesResource::collection(Day::all());
        });
    }

    public function getShiftWorks(): mixed
    {
        return Cache::rememberForever('shiftWorks', function () {
            return PayModesResource::collection(ShiftWork::all());
        });
    }

    public function getOffers(): mixed
    {
        return Cache::rememberForever('offers', function () {
            return PayModesResource::collection(Offer::all());
        });
    }

    public function getWaits(): mixed
    {
        return Cache::rememberForever('waits', function () {
            return PayModesResource::collection(Wait::all());
        });
    }

    public function getExperiences(): mixed
    {
        return Cache::rememberForever('experiences', function () {
            return WorkLoadResource::collection(Experience::all());
        });
    }

    public function getDistanceOptions(): array
    {
        return [
            ['name' => '0 km', 'value' => 0],
            ['name' => '15 km', 'value' => 15],
            ['name' => '30 km', 'value' => 30],
            ['name' => '50 km', 'value' => 50],
            ['name' => '75 km', 'value' => 75],
            ['name' => '100 km', 'value' => 100],
        ];
    }

    public function getWorkingModesForSelect(): mixed
    {
        return Cache::rememberForever('workingModes', function () {
            return MultiselectWithoutDetailResource::collection(WorkingMode::all());
        });
    }

    public function getExperiencesForSelect(): mixed
    {
        return Cache::rememberForever('experiences', function () {
            return MultiselectWithoutDetailResource::collection(Experience::all());
        });
    }

    public function getTypesOfContractForSelect(): mixed
    {
        return Cache::rememberForever('typesOfContract', function () {
            return MultiselectWithoutDetailResource::collection(TypeOfContract::all());
        });
    }

    public function getWorkLoadsForSelect(): mixed
    {
        return Cache::rememberForever('workLoads', function () {
            return MultiselectWithoutDetailResource::collection(WorkLoad::all());
        });
    }

    public function getWelcomes(): mixed
    {
        return Cache::rememberForever('welcomes', function () {
            return PayModesResource::collection(Welcome::all());
        });
    }

    public function getEducations(): mixed
    {
        return Cache::rememberForever('educations', function () {
            return PayModesResource::collection(Education::all());
        });
    }

    public function getCvs(): mixed
    {
        return Cache::rememberForever('cvs', function () {
            return PayModesResource::collection(CvType::all());
        });
    }

    public function getLangLevels(): mixed
    {
        return Cache::rememberForever('langLevels', function () {
            return MultiselectWithoutDetailResource::collection(LangLevel::all());
        });
    }

    public function getFoundationCategories(): mixed
    {
        return Cache::rememberForever('categoriesFoundations', function () {
            return MultiselectWithoutDetailResource::collection(\App\Models\FoundationCategory::whereNull('parent_id')->get());
        });
    }

    public function getCountries(string $locale): mixed
    {
        return Cache::rememberForever('countries_'.$locale, function () {
            return (new Helper())->makeCountriesToSelect();
        });
    }

    public function getCategoriesWithoutDetail(): mixed
    {
        return Cache::rememberForever('categoriesWithoutDetail', function () {
            return MultiselectWithoutDetailResource::collection(\App\Models\Category::whereNotNull('parent_id')->get());
        });
    }

    public function getCategoriesWithArticles(): mixed
    {
        return Cache::rememberForever('categoriesWithArticles', function () {
            return \App\Http\Resources\CategoryWithArticlesResource::collection(
                \App\Models\Category::active()->lang()->isRoot()->get()
            );
        });
    }

    public function getLevelEducations(): mixed
    {
        return Cache::rememberForever('levelEducations', function () {
            return MultiselectWithoutDetailResource::collection(\App\Models\LevelEducation::all());
        });
    }

    public function getAllProjectDictionaries(): array
    {
        return [
            'categories' => $this->getCategories(),
            'workingModes' => $this->getWorkingModes(),
            'workingPlaces' => $this->getWorkingPlaces(),
            'typesOfContract' => $this->getTypesOfContract(),
            'workLoads' => $this->getWorkLoads(),
            'payoutModes' => $this->getPayoutModes(),
            'paySystems' => $this->getPaySystems(),
            'days' => $this->getDays(),
            'shiftWorks' => $this->getShiftWorks(),
            'offers' => $this->getOffers(),
            'waits' => $this->getWaits(),
            'experiences' => $this->getExperiences(),
            'welcomes' => $this->getWelcomes(),
            'educations' => $this->getEducations(),
            'cvs' => $this->getCvs(),
        ];
    }

    public function clearLangLevels(): void
    {
        Cache::forget('langLevels');
    }

    public function clearLevelEducations(): void
    {
        Cache::forget('levelEducations');
    }

    public function clearCategories(): void
    {
        Cache::forget('category');
        Cache::forget('categoriesWithoutDetail');
        Cache::forget('categoriesWithArticles');
        // If there are other category-related caches (like from Model methods), they should be cleared too.
        Cache::forget('categories_without_detail');
        Cache::forget('categories_without_positions_without_detail');
    }

    public function clearFoundationCategories(): void
    {
        Cache::forget('categoriesFoundations');
    }

    public function clearAll(): void
    {
        Cache::forget('category');
        Cache::forget('workingModes');
        Cache::forget('workingPlaces');
        Cache::forget('typesOfContract');
        Cache::forget('workLoads');
        Cache::forget('payoutModes');
        Cache::forget('paySystems');
        Cache::forget('days');
        Cache::forget('shiftWorks');
        Cache::forget('offers');
        Cache::forget('waits');
        Cache::forget('experiences');
        Cache::forget('welcomes');
        Cache::forget('educations');
        Cache::forget('cvs');
        Cache::forget('langLevels');
        Cache::forget('levelEducations');
        Cache::forget('categoriesFoundations');
        Cache::forget('categoriesWithoutDetail');
        Cache::forget('categoriesWithArticles');
        Cache::forget('categories_without_detail');
        Cache::forget('categories_without_positions_without_detail');
    }
}
