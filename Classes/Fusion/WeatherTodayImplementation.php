<?php

namespace Ttree\LearnNeosCustomFusion\Fusion;

use Neos\Flow\Utility\Now;
use Neos\Fusion\FusionObjects\TemplateImplementation;

class WeatherTodayImplementation extends TemplateImplementation
{
    public function getData(): array
    {
        return [
            'today' => new Now()
        ];
    }
}
