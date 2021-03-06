<?php

namespace Omnipay\WechatPay\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class BaseAbstractResponse
 * @package Omnipay\WechatPay\Message
 */
abstract class BaseAbstractResponse extends AbstractResponse
{

    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        $data = $this->getData();

        return isset($data['result_code']) && $data['result_code'] == 'SUCCESS';
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        $data= $this->getData();

        return isset($data['err_code_des'])? $data['err_code_des'] : NULL;
    }
}
