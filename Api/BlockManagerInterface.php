<?php
/**
*
* Developer: Hemant Singh Magento Certified Developer
* Category:  Wishusucess_CmsApi
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\CmsApi\Api;

interface BlockManagerInterface
{
    /**
     * @param int $blockId
     * @return \Magento\Cms\Api\Data\BlockInterface
     */
    public function getById($blockId);

    /**
     * @param string $identifier
     * @param int $storeId
     * @return \Magento\Cms\Api\Data\BlockInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByIdentifier($identifier, $storeId = null);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Wishusucess\CmsApi\Api\Data\BlockSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
