<?php

return [
    'stripe' => [
        'code' => 'stripe',
        'title' => 'Stripe',
        'description' => 'Stripe',
        'image' => '/images/stripe.svg',
        'class' => 'Webkul\Stripe\Payment\Stripe',
        'active' => true,
        'sort' => 0,
        'payment_method_types' => explode(',', env('STRIPE_PAYMENT_METHOD_TYPES', 'card'))
    ],
];
