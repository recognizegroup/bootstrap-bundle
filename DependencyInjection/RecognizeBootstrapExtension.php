<?php
namespace Recognize\BootstrapBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder,
	Symfony\Component\DependencyInjection\Loader\XmlFileLoader,
	Symfony\Component\HttpKernel\DependencyInjection\Extension,
	Symfony\Component\Config\FileLocator;

/**
 * Class RecognizeBootstrapExtension
 * @package Recognize\BootstrapBundle\DependencyInjection
 * @author Nick Obermeijer <n.obermeijer@recognize.nl>
 */
class RecognizeBootstrapExtension extends Extension {

	/**
	* @param array $configs
	* @param ContainerBuilder $container
	*/
	public function load(array $configs, ContainerBuilder $container) {
		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);

		$loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
		$loader->load('services.xml');
	}

	/**
	* @return string
	*/
	public function getAlias() {
		return 'recognize_bootstrap';
	}

}
