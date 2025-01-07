<?php

use Faker\Factory as Faker;

if (!function_exists('faker')) {
    function faker()
    {
        return Faker::create();
    }
}
