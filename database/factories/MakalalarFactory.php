<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MakalalarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $makala_title = $this->faker->sentence(rand(2,10));
        $makala_slug  = Str::slug($makala_title, '-');
        $makala_status = ['active', 'passive', 'draft'];
        $makala_image = $this->faker->imageUrl();
        $makala_decription =$this->faker->text(1500, 3000);

        return [
            'makala_title'=>$makala_title,
            'makala_slug'=>$makala_slug,
            'makala_image'=>$makala_image,
            'makala_description'=>$makala_decription,
            'makala_status'=>$makala_status[rand(0,2)],
        ];
    }
}
