<?php

namespace Echidna\MixinJs;

use Twig\TwigFunction;

class MixinJsFunction extends TwigFunction
{
    const FUNCTION_NAME = 'mixin_js';

    /**
     * @return string
     */
    public function getFunctionName(): string
    {
        return static::FUNCTION_NAME;
    }

    /**
     * @return callable
     */
    public function getCallable(): callable
    {
        return function () {
            return file_get_contents(__DIR__ . '/../Twig/mixin-js.twig');
        };
    }
}