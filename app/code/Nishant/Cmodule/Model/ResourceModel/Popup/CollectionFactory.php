<?php

namespace Nishant\Cmodule\Model\ResourceModel\Popup;

use Magento\Framework\Model\ResourceModel\Db\CollectionFactory as BaseCollectionFactory;

class CollectionFactory
{
    protected $collectionFactory;

    public function __construct(
        BaseCollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    public function create()
    {
        return $this->collectionFactory->create(Collection::class);
    }
}
