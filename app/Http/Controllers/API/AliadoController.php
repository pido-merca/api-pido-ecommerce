<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AliadoCollection;
use App\Http\Resources\Aliado as AliadoResource;
use App\Models\Aliado;

class AliadoController extends Controller
{
    public function obtenerAliadosPorSubcategoria($category)
    {
        return new AliadoCollection(Aliado::getAlliesToSubcategory($category)->get());
    }

    public function obtenerProductosPorCategoria($ally, $category)
    {
        $query = Aliado::getProductsByCategory($ally, $category)->get();
        $data = null;
        if (!$query->isEmpty()) {
            $data['categoryId'] = $query[0]->id_categoria;
            $data['categoryName'] = $query[0]->nombre_categoria;
            $data['categorySlug'] = $query[0]->slug_categoria;
            $data['products'] = collect([]);
            $query->each(function ($item, $key) use ($data) {
                $data['products']->push(
                    [
                        'productId' => $item->id_producto,
                        'productName' => $item->nombre,
                        'price' => $item->preciosubmedida,
                        'productImage' => $item->imagen,
                        'brand' => $item->nombre_marca,
                        'submeasureName' => $item->nom_submedida
                    ]
                );
            });
        }
        return response()->json($data);
    }

    public function obtenerProductosPorAliado($ally)
    {
        $query = Aliado::getProductsByAlly($ally)->get();
        $products = collect([]);
        if (!$query->isEmpty()) {
            $query->each(function ($item, $key) use ($products) {
                if ($products->isEmpty()) {
                    $products->push($this->buildArrayCategoryWithProducts($item));
                } else {
                    $found = $products->firstWhere('categoryId', $item->id_categoria);
                    if (collect($found)->isEmpty()) {
                        $products->push($this->buildArrayCategoryWithProducts($item));
                    } else {
                        $products->transform(function ($collect, $key) use ($item) {
                            if ($collect['categoryId'] === $item->id_categoria) {
                                $collect['products']->push($this->buildArrayProducts($item));
                            }
                            return $collect;
                        });
                    }
                }
            });
        }
        return $products->toJson();
    }

    private function buildArrayCategoryWithProducts($item)
    {
        return  [
            'categoryId' => $item->id_categoria,
            'categoryName' => $item->nombre_categoria,
            'categorySlug' => $item->slug_categoria,
            'products' => collect([
                [
                    'productId' => $item->id_producto,
                    'productName' => $item->nombre,
                    'price' => $item->preciosubmedida,
                    'productImage' => $item->imagen,
                    'brand' => $item->nombre_marca,
                    'submeasureName' => $item->nom_submedida
                ]
            ])
        ];
    }

    private function buildArrayProducts($item)
    {
        return [
            'productId' => $item->id_producto,
            'productName' => $item->nombre,
            'price' => $item->preciosubmedida,
            'productImage' => $item->imagen,
            'brand' => $item->nombre_marca,
            'submeasureName' => $item->nom_submedida
        ];
    }

    public function obtenerAliadoPorSlug($ally)
    {
        return new AliadoResource(Aliado::where('slug', $ally)->first());
    }
}
