<?php

namespace Devall\Tabatadze\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface CompanySearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Devall\Tabatadze\Api\Data\HamburgerInterface[]
     */
    public function getItems();

    /**
     * @param \Devall\Tabatadze\Api\Data\CompanySearchResultInterfaceInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
