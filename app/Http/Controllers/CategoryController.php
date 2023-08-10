<?php

namespace App\Http\Controllers;

use App\Data\CategoryData;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke(
        Category $category
    ) {
        return CategoryData::from($category);
    }
}
