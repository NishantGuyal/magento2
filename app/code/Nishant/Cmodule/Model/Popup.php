<?php

namespace Nishant\Cmodule\Model;

use Magento\Framework\Model\AbstractModel;
use Nishant\Cmodule\Api\Data\PopupInterface;
use Nishant\Cmodule\Model\ResourceModel\Popup as PopupResource;

class Popup extends AbstractModel implements PopupInterface
{
    public const POPUP_ID = 'popup_id';
    public const NAME = 'name';
    public const CONTENT = 'content';
    public const CREATED_AT = 'created_at';
    public const POPUP_TIMEOUT = 'popup_timeout';

    protected $_eventPrefix = 'nishant_cmodule_popup';

    protected $_eventObject = 'popup';

    protected $_idFieldName = self::POPUP_ID;
    
    protected function _construct()
    {
        $this->_init(PopupResource::class);
    }

    public function getPopupId(): int
    {
        return (int) $this->getData(self::POPUP_ID);
    }

    public function setPopupId(int $popupId)
    {
        $this->setData(self::POPUP_ID, $popupId);
    }

    public function getName(): string
    {
        return (string) $this->getData(self::NAME);
    }

    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
    }

    public function getContent(): string
    {
        return (string) $this->getData(self::CONTENT);
    }

    public function setContent(string $content)
    {
        $this->setData(self::CONTENT, $content);
    }

    public function getCreatedAt(): string
    {
        return (string) $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getPopupTimeout(): int
    {
        return (int) $this->getData(self::POPUP_TIMEOUT);
    }

    public function setPopupTimeout(int $popupTimeout)
    {
        $this->setData(self::POPUP_TIMEOUT, $popupTimeout);
    }
}
