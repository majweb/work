<?php

namespace App\Http\Controllers\Admin;

use App\Enum\ProductType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePromotionServiceRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class PromotionServiceController extends Controller
{
    public function index(): Response
    {
        $products = Product::query()
            ->where('product_type', ProductType::EXTRA)
            ->get()
            ->map(function (Product $product) {
                $isArticle = $product->id === 10;

                return [
                    'id' => $product->id,
                    'name' => $product->getTranslation('name', 'pl'),
                    'active' => $product->active,
                    'price' => $product->price,
                    'duration' => $isArticle ? 'Nielimitowany' : '30 dni',
                ];
            });

        return Inertia::render('Admin/Marketing/PromotionServices/Index', [
            'products' => $products,
        ]);
    }

    public function edit(Product $promotion_service): Response
    {
        return Inertia::render('Admin/Marketing/PromotionServices/Edit', [
            'promotion_service' => [
                'id' => $promotion_service->id,
                'name' => $promotion_service->getTranslations('name'),
                'active' => $promotion_service->active,
                'price' => $promotion_service->price,
            ],
            'langs' => config('langsShorts'),
        ]);
    }

    public function update(UpdatePromotionServiceRequest $request, Product $promotion_service): RedirectResponse
    {
        $promotion_service->update($request->validated());

        return to_route('admin.promotion-services.index')->with('success', 'Usługa zaktualizowana');
    }

    public function toggle(Product $promotion_service): RedirectResponse
    {
        $promotion_service->active = ! $promotion_service->active;
        $promotion_service->save();

        return back()->with('success', 'Status updated');
    }
}
