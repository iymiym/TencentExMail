<?php

/*
 * This file is part of the icecho/easyexmail.
 *
 * (c) icecho <iymiym@icloud.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Icecho\EasyExMail\Base;

use Icecho\EasyExMail\Traits\Helper;

class Base
{
    use Helper;

    protected $accessToken;

    public function __construct(array $config)
    {
        $this->accessToken = $this->getAccessToken($config);
    }
}
