<?php

namespace Spatie\Analytics;

use Illuminate\Support\Carbon;

class TypeCaster
{
    public function castValue(string $key, string $value)
    {
        // return match ($key) {
        //     'date' => Carbon::createFromFormat('Ymd', $value),
        //     'visitors', 'pageViews', 'activeUsers', 'newUsers', 'screenPageViews',
        //     'active1DayUsers', 'active7DayUsers', 'active28DayUsers' => (int) $value,
        //     default => $value,
        // };

        if($key === 'date'){
            return Carbon::createFromFormat('Ymd', $value);
        }

        if(in_array($key, ['visitors', 'pageViews', 'activeUsers', 'newUsers', 'screenPageViews',
                'active1DayUsers', 'active7DayUsers', 'active28DayUsers'])){
            return (int) $value;
        }

        return $value;
    }
}
