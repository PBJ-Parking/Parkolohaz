<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $megrendelo_tipusa=fake()->randomElement(['M', 'C']);
        if ($megrendelo_tipusa=='C'){
        $adoszam=fake()->regexify('^[0-9]{8}-[0-9]-[0-9]{2}$');
    }else{$adoszam=null;}
        return [
            'name'=>fake('hu_HU')->name(),
            'telefonszam'=>fake()->numerify('+36 ## ### ####'),
            'cim'=>fake('hu_HU')->address(),
            'email'=>fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'=> static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'megrendelo_tipus'=> $megrendelo_tipusa,
            'adoszam'=>$adoszam,
            'admin_e'=>0,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
