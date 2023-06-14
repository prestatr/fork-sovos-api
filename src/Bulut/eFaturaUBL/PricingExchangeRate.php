<?php

namespace Bulut\eFaturaUBL;

class PricingExchangeRate
{
    /**
     * Kaynak para birim kodu girilir. Örnek: EUR
     *
     * @var string
     */
    public $SourceCurrencyCode;

    /**
     * Hedef para birim kodu girilir. Örnek: TRY
     *
     * @var string
     */
    public $TargetCurrencyCode;

    /**
     * Kur bilgisi girilir. Noktadan önce en fazla 15, noktadan sonra (kuruş) en fazla 4 haneli olmalıdır. Örnek: 25.5762
     *
     * @var string
     */
    public $CalculationRate;
}
