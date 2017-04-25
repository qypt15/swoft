<?php

namespace swoft;

use DI\Container;
use DI\ContainerBuilder;
use DI\Definition\Source\DefinitionSource;
use swoft\helpers\BeanFactory;

/**
 *
 *
 * @uses      SwoftInitializer
 * @version   2017年04月25日
 * @author    lilin <lilin@ugirls.com>
 * @copyright Copyright 2010-2016 北京尤果网文化传媒有限公司
 * @license   PHP Version 5.x {@link http://www.php.net/license/3_0.txt}
 */
class SwoftInitializer
{

    /**
     * Add definitions to the container.
     *
     * @param string|array|DefinitionSource $definitions Can be an array of definitions, the
     *                                                   name of a file containing definitions
     *                                                   or a DefinitionSource object.
     *
     * @return Container
     */
    public function init($definitions)
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAnnotations(true);
        $containerBuilder->addDefinitions($definitions);
        $container = $containerBuilder->build();
        $container = $this->annotationBeans($container);
        BeanFactory::setContainer($container);

        return $container;
    }

    /**
     * Initializer annotation beans
     *
     * @param Container $container
     *
     * @return Container
     */
    private function annotationBeans($container)
    {
        return $container;
    }
}