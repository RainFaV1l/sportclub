<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BirthdateInRange implements ValidationRule
{
    protected int $minAge = 0;
    protected int $maxAge = 100;

    public function __construct($minAge, $maxAge)
    {
        if(!empty($minAge)) $this->minAge = $minAge;
        if(!empty($maxAge)) $this->maxAge = $maxAge;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $birthdate = Carbon::parse($value);
        $minDate = Carbon::now()->subYears($this->maxAge);
        $maxDate = Carbon::now()->subYears($this->minAge);

        if($birthdate > Carbon::now()) {
            $fail('Извините, но вы выбрали некорректную дату!');
        }

        if(!$birthdate->between($minDate, $maxDate)) {
            $error = ' ';
            if($this->minAge != 0) {
                $error .= 'Минимальный возраст: ' . $this->minAge . ' лет. ';
            }
            if($this->maxAge != 100) {
                $error .= 'Максимальный возраст: ' . $this->maxAge . ' лет. ';
            }
            $fail('Извините, но вы не проходите возрастные рамки для данной секции!' . $error);
        }
    }
}
