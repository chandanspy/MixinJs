<?php

namespace Echidna\MixinJs;

use Spryker\Yves\Kernel\AbstractPlugin;
use Twig\TwigFunction;

class MixinJsTwigExtensionPlugin extends AbstractPlugin
{


    public function getFunctions(): array
    {
        return [
            new TwigFunction('mixin_js', function () {
                return file_get_contents(__DIR__ . '/../Twig/mixin-js.twig');
            }),
        ];
    }
}