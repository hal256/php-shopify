<?php
/**
 * Created by PhpStorm.
 * User: hal
 * Date: 2019/01/05
 * Time: 20:51
 */

namespace PHPShopify;

/**
 * --------------------------------------------------------------------------
 * DraftOrder -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read Fulfillment $Fulfillment
 * @property-read Refund $Refund
 * @property-read Transaction $Transaction
 * @property-read Event $Event
 * @property-read Metafield $Metafield
 *
 * @method Fulfillment Fulfillment(integer $id = null)
 * @method Refund Refund(integer $id = null)
 * @method Transaction Transaction(integer $id = null)
 * @method Event Event(integer $id = null)
 * @method Metafield Metafield(integer $id = null)
 *
 * --------------------------------------------------------------------------
 * DraftOrder -> Custom actions
 * --------------------------------------------------------------------------
 * @method array close()     Close an DraftOrder
 * @method array open()         Re-open a closed DraftOrder
 * @method array cancel(array $data)  Cancel an DraftOrder
 *
 */
class DraftOrder
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'draft_order';

    /**
     * @inheritDoc
     */
    protected $childResource = array (
        'Fulfillment',
        'Refund',
        'Transaction',
        'Event',
        'Metafield',
    );

    /**
     * @inheritDoc
     */
    protected $customPostActions = array(
        'close',
        'open',
        'cancel',
    );
}