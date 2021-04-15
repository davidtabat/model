<?php

namespace Devall\Tabatadze\Model;

use Magento\Framework\Model\AbstractModel;
use Devall\Tabatadze\Api\Data\CompanyInterface;

class Company extends AbstractModel implements CompanyInterface
{
    const NAME = 'name';

    protected function _construct()
    {
        $this->_init(ResourceModel\Company::class);
    }

    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME);
    }
}
