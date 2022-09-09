<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $category_name = $this->faker->words(rand(1,3), true);
        $category_slug =Str::slug($category_name, '-');
        $category_status = ['active', 'passive', 'draft'];
        return [
            'category_name'=>$category_name,
            'category_slug'=>$category_slug,
            'category_status'=>$category_status[rand(0,2)],
        ];
    }
}
