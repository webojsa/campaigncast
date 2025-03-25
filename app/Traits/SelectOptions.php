<?php

namespace App\Traits;

use App\Models\Country;

trait SelectOptions
{
    public function countryOptions(bool $allOption = false, bool $isActive = true, bool $isEu = false): array{
        $where = [];
        if($isActive)
            $where[] = ['active', '=', 1];
        if($isEu)
            $where[] = ['isEU', '=', 1];

        $options = [];
        if($allOption)
            $options = [null => 'All'];
        $countryOptions =  Country::where($where)->orderBy('title_eng', 'asc')->pluck('title_eng','code2')->toArray();
        $options = array_merge($options, $countryOptions);

        return $options;
    }
}
