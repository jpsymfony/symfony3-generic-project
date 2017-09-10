<?php

namespace AppBundle\Services;

class Be2bill extends AbstractPaymentService
{
    /**
     * @param string $url
     * @param array $parameters
     * @param $displaySubmitBtn
     * @param $message
     *
     * @return string
     */
    public function getHtml($url, $parameters, $displaySubmitBtn, $message)
    {
        return 'Be2BillServiceForm';
    }

    /**
     * @inheritdoc
     */
    public function addFail()
    {
        // send mail and log error
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Be2bill';
    }
}