<?php

namespace Database\Factories;

use App\Models\Tipus;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParkolohelyFactory extends Factory
{
    protected $model = \App\Models\Parkolohely::class;

    public function definition()
    {
        static $hely_tipusa = 4;
        static $emelet = 1;
        static $count = 0;

        $count++;

        if ($count > 6 && $count <= 16) { //10
            $hely_tipusa = 3;
            $emelet = 1;
        } elseif($count > 16 && $count <= 19) {//3
            $hely_tipusa = 1;
            $emelet = 1;
        } elseif($count > 19 && $count <= 24) {//5
            $hely_tipusa = 2;
            $emelet = 1;
        } elseif($count > 24 && $count <= 30) {//6
            $hely_tipusa = 4;
            $emelet = 2;
        } elseif($count > 30 && $count <= 40) {//10
            $hely_tipusa = 3;
            $emelet = 2;
        } elseif($count > 40 && $count <= 43) {//3
            $hely_tipusa = 1;
            $emelet = 2;
        } elseif($count > 43 && $count <= 48) {//5
            $hely_tipusa = 2;
            $emelet = 2;
        } elseif($count > 48 && $count <= 54) {//6
            $hely_tipusa = 4;
            $emelet = 3;
        } elseif($count > 54 && $count <= 64) {//10
            $hely_tipusa = 3;
            $emelet = 3;
        } elseif($count > 64 && $count <= 67) {//3
            $hely_tipusa = 1;
            $emelet = 3;
        } elseif($count > 67 && $count <= 72) {//5
            $hely_tipusa = 2;
            $emelet = 3;
        }

        return [
            'hely_tipusa' => $hely_tipusa,
            'statusz' => fake()->randomElement(['s', 'f', 'n', 'b']), 
            'emelet' => $emelet,
        ];
    }
}
