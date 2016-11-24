<?php
namespace PaulGibbs\WordpressBehatExtension\Context\Initialiser;

use Behat\Behat\Context\Context,
    Behat\Behat\Context\Initializer\ContextInitializer;

use PaulGibbs\WordpressBehatExtension\WordpressDriverManager,
    PaulGibbs\WordpressBehatExtension\Context\WordpressAwareInterface;

/**
 * Behat context initialiser.
 */
class WordpressAwareInitialiser implements ContextInitializer
{
    /**
     * WordPress driver manager.
     *
     * @var WordpressDriverManager
     */
    protected $wordpress;

    /**
     * WordPress context parameters.
     *
     * @var array
     */
    protected $parameters = [];


    /**
     * Constructor.
     *
     * @param WordpressDriverManager $wordpress
     * @param array                  $parameters
     */
    public function __construct(WordpressDriverManager $wordpress, $parameters)
    {
        $this->wordpress  = $wordpress;
        $this->parameters = $parameters;
    }

    /**
     * Prepare everything that the Context needs.
     *
     * @param Context $context
     */
    public function initializeContext(Context $context)
    {
        if (! $context instanceof WordpressAwareInterface) {
            return;
        }

        $context->setWordpress($this->wordpress);
        $context->setWordpressParameters($this->parameters);
    }
}
