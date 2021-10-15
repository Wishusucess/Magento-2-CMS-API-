<?php
/**
*
* Developer: Hemant Singh Magento Certified Developer
* Category:  Wishusucess_CmsApi
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\CmsApi\Api\Data;

interface BlockInterface extends \Magento\Cms\Api\Data\BlockInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const STORE_ID = 'store_id';
    /**#@-*/

    /**
     * @return int[]
     */
    public function getStoreId();

    /**
     * @param int[] $storeIds
     * @return BlockInterface
     */
    public function setStoreId(array $storeIds);
}
