<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_category_has_many_posts()
    {
        //Bey
        $category = new Category();
        $this->assertInstanceOf(Collection::class, $category->posts);
    }
}
