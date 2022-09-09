<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $post_title = $this->faker->sentence(rand(2,10));
        $post_slug  = Str::slug($post_title, '-');
        $post_status = ['active', 'passive', 'draft'];
        $post_image = $this->faker->imageUrl();
        $post_description =$this->faker->text(1500,3000);
        $category_id = rand(1,6);

        return [
            'post_title'=>$post_title,
            'post_slug'=>$post_slug,
            'post_description'=>$post_description,
            'post_image'=>$post_image,
            'post_status'=>$post_status[rand(0,2)],
            'category_id'=>$category_id,
        ];
    }
}
