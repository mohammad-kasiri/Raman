<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'        => Str::random(10),
            'label'       => Str::random(10),
            'description' => Str::random(10)
        ];
    }

    public function fullAdmin()
    {
        return $this->state(function (array $attributes) {
            return [
                'name'        => 'full admin',
                'label'       => 'مدیر ارشد',
                'description' => 'تمامی دسترسی ها را دارد'
            ];
        });
    }
}
