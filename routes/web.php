<?php

use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get(
    '/',
    function (Request $request) {

        $sortField = match ($request->query('sortField')) {
            'symbol' => 'symbol',
            'name' => 'name',
            'market_cap' => 'market_cap',
            'sector' => 'sector',
            'industry' => 'industry',
            default => 'symbol',
        };

        $sortOrder = match ($request->query('sortOrder')) {
            'desc' => 'desc',
            default => 'asc',
        };

        $stocks = DB::table('stocks')->orderBy($sortField, $sortOrder)->get();
        return view(
            'welcome',
            [
                'stocks' => $stocks,
                'sortOrder' => $sortOrder,
                'sortField' => $sortField,
            ]
        );
    }
);
