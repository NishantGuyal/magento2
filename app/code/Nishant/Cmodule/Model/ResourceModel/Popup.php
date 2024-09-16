<?php
declare(strict_types=1);

namespace Nishant\Cmodule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Popup extends AbstractDb
{
    private const TABLE_NAME = 'nishant_cmodule_popup';
    private const PRIMARY_KEY = 'popup_id';

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}
