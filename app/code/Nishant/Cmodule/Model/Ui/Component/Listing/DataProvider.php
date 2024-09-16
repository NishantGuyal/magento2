<?php

namespace Nishant\Cmodule\Model\Ui\Component\Listing;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Nishant\Cmodule\Model\ResourceModel\Popup\CollectionFactory;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        string $name,
        string $primaryFieldName,
        string $requestFieldName,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $data);
    }

    public function getData()
    {
        return $this->collection->toArray();
    }
}
