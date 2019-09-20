<?php
/**
 *
 *          ..::..
 *     ..::::::::::::..
 *   ::'''''':''::'''''::
 *   ::..  ..:  :  ....::
 *   ::::  :::  :  :   ::
 *   ::::  :::  :  ''' ::
 *   ::::..:::..::.....::
 *     ''::::::::::::''
 *          ''::''
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) Total Internet Group B.V. https://tig.nl/copyright
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */

namespace TIG\GLS\Model\Shipment;

use Magento\Framework\Model\AbstractModel;

class Label extends AbstractModel
{
    /** @var string */
    // @codingStandardsIgnoreLine
    protected $_idFieldName = 'entity_id';

    const GLS_SHIPMENT_LABEL_SHIPMENT_ID        = 'shipment_id';
    const GLS_SHIPMENT_LABEL_UNIT_ID            = 'unit_id';
    const GLS_SHIPMENT_LABEL_UNIT_NO            = 'unit_no';
    const GLS_SHIPMENT_LABEL_UNIQUE_NO          = 'unique_no';
    const GLS_SHIPMENT_LABEL_CONFIRMED          = 'confirmed';
    const GLS_SHIPMENT_LABEL_LABEL              = 'label';
    const GLS_SHIPMENT_LABEL_UNIT_TRACKING_LINK = 'unit_tracking_link';

    public function _construct()
    {
        $this->_init("\TIG\GLS\Model\ResourceModel\Shipment\Label");
    }
}
