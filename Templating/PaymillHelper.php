<?php

namespace Fm\PaymentPaymillBundle\Templating;

use Symfony\Component\Templating\Helper\Helper,
    Symfony\Component\Templating\EngineInterface;

class PaymillHelper extends Helper
{
    private $engine   = null;
    private $template = null;

    public function __construct (EngineInterface $engine, $template)
    {
        $this->engine   = $engine;
        $this->template = $template;
    }

    /**
     * Render the Paymill initialization markup.
     *
     * @return string
     */
    public function initialize ()
    {
        return $this->engine->render($this->template);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'paymill';
    }

}