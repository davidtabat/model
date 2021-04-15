<?php

namespace Devall\Tabatadze\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Devall\tabatadze\Api\Data\CompanyInterface;

interface CompanyRepositoryInterface
{
    /**
     * @param int $id
     * @return \Devall\Tabatadze\Api\Data\CompanyInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \Devall\Tabatdze\Api\Data\CompanyInterface $company
     * @return \Devall\Tabatadze\Api\Data\CompanyInterface
     */
    public function save(CompanyInterface $company);

    /**
     * @param \Devall\Tabatadze\Api\Data\CompanyInterface $company
     * @return void
     */
    public function delete(CompanyInterface $company);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Devall\Tabatadze\Api\Data\CompanySearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
