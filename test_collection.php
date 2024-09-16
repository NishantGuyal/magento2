<?php
require 'app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

/** @var \Nishant\Cmodule\Model\ResourceModel\Popup\Collection $collection */
$collection = $objectManager->create(\Nishant\Cmodule\Model\ResourceModel\Popup\Collection::class);
$collection->load();

echo '<pre>';
print_r($collection->getData());
echo '</pre>';
