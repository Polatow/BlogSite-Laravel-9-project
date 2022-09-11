<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habarlar>
 */
class HabarlarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
   $habar_title = $this->faker->sentence(rand(2,10));
   $habar_slug  = Str::slug($habar_title, '-');
   $habar_status = ['active', 'passive', 'draft'];
   $habar_image = $this->faker->imageUrl();
   $habar_description =$this->faker->text(1500,3000);
   $category_id = rand(1,6);

   return [
       'habar_title'=>$habar_title,
       'habar_slug'=>$habar_slug,
       'habar_description'=>$habar_description,
       'habar_image'=>$habar_image,
       'habar_status'=>$habar_status[rand(0,2)],
       'category_id'=>$category_id,
   ];

}
}