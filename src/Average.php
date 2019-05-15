<?php

namespace Service;

class Average
{

    public function mean(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }

}
