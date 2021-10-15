<?php
/**
*
* Developer: Hemant Singh Magento Certified Developer
* Category:  Wishusucess_CmsApi
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\CmsApi\Api;

interface PageManagerInterface
{
    /**
     * @param int $pageId
     * @return \Magento\Cms\Api\Data\PageInterface
     */
    public function getById($pageId);

    /**
     * @param string $identifier
     * @param int $storeId
     * @return \Magento\Cms\Api\Data\PageInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByIdentifier($identifier, $storeId = null);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Wishusucess\CmsApi\Api\Data\PageSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
