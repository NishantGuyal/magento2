<?php
namespace Nishant\Popup\Model\ResourceModel\Popup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\Model\ResourceModel\Db\Collection\CollectionFactory as AbstractCollectionFactory;

class CollectionFactory extends AbstractCollectionFactory
{
    public function __construct(
        Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollectionFactory $collectionFactory
    ) {
        parent::__construct($collectionFactory);
    }
}
