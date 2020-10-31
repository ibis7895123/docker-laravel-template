<?php

namespace App\Services;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckFormData
{
    public static function checkGender(int $gender)
    {
        $genderString = $gender === 0 ? '男性': '女性';
        return $genderString;
    }
    public static function checkAge(int $age)
    {
        $ageString = '';
        if ($age === 1) {
            $ageString = '~19歳';
        } elseif ($age === 2) {
            $ageString = '20歳~29歳';
        } elseif ($age === 3) {
            $ageString = '30歳~39歳';
        } elseif ($age === 4) {
            $ageString = '40歳~49歳';
        } elseif ($age === 5) {
            $ageString = '50歳~59歳';
        } elseif ($age === 6) {
            $ageString = '60歳~';
        }
        return $ageString;
    }
}
