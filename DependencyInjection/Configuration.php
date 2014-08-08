<?php

namespace Recognize\BootstrapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder,
	Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Recognize\BootstrapBundle\DependencyInjection
 * @author Nick Obermeijer <n.obermeijer@recognize.nl>
 */
class Configuration implements ConfigurationInterface {

	/**
	 * {@inheritDoc}
	 */
	public function getConfigTreeBuilder() {
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('recognize_bootstrap');

		return $treeBuilder;
	}

}
