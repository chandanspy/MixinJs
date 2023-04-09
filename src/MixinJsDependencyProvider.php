<?php

namespace Echidna\MixinJs;

use Spryker\Service\Container\Exception\FrozenServiceException;
use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class MixinJsDependencyProvider extends AbstractBundleDependencyProvider
{
    public const TWIG_EXTENSIONS = 'TWIG_EXTENSIONS';

    /**
     * @throws FrozenServiceException
     */
    public function provideCommunicationLayerDependencies(Container $container): void
    {
        $container->set(static::TWIG_EXTENSIONS, function () {
            return [
                new MixinJsTwigExtensionPlugin(MixinJsTwigExtensionPlugin::class)
            ];
        });
    }

}