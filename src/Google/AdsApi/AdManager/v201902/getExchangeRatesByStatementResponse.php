<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getExchangeRatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\ExchangeRatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\ExchangeRatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\ExchangeRatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\ExchangeRatePage $rval
     * @return \Google\AdsApi\AdManager\v201902\getExchangeRatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
