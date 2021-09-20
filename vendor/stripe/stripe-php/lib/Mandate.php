<?php
/* 
 *  This is the default license template.
 *  
 *  File: Mandate.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

// File generated from our OpenAPI spec

namespace Stripe;

/**
 * A Mandate is a record of the permission a customer has given you to debit their
 * payment method.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \Stripe\StripeObject $customer_acceptance
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \Stripe\StripeObject $multi_use
 * @property string|\Stripe\PaymentMethod $payment_method ID of the payment method associated with this mandate.
 * @property \Stripe\StripeObject $payment_method_details
 * @property \Stripe\StripeObject $single_use
 * @property string $status The status of the mandate, which indicates whether it can be used to initiate a payment.
 * @property string $type The type of the mandate.
 */
class Mandate extends ApiResource
{
    const OBJECT_NAME = 'mandate';

    use ApiOperations\Retrieve;
}
