<?php

namespace common\components\Weather\parser;

interface WeatherDataParserInterface
{
    public function parse($response);
}