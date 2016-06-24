<?php

namespace Fazland\ElasticaBundle\Tests\Resetter;

use Fazland\ElasticaBundle\FazlandElasticaBundle;

class FazlandElasticaBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testCompilerPassesAreRegistered()
    {
        $container = $this
            ->getMock('Symfony\Component\DependencyInjection\ContainerBuilder');

        $container
            ->expects($this->atLeastOnce())
            ->method('addCompilerPass')
            ->with($this->isInstanceOf('Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface'));

        $bundle = new FazlandElasticaBundle();
        $bundle->build($container);
    }
}
