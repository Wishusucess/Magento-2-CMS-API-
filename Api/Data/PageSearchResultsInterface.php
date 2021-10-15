<?php
/**
*
* Developer: Hemant Singh Magento Certified Developer
* Category:  Wishusucess_CmsApi
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\CmsApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface PageSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Wishusucess\CmsApi\Api\Data\PageInterface[]
     */
    public function getItems();

    /**
     * @param \Wishusucess\CmsApi\Api\Data\PageInterface[] $items
     * @return PageSearchResultsInterface
     */
    public function setItems(array $items);
}
