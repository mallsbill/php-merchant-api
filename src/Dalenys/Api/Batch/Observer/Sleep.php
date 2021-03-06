<?php

/**
 * Observer time delayer
 *
 * @package Dalenys\Batch
 * @author Jérémy Cohen Solal <jeremy@dalenys.com>
 */

/**
 * Use it for configuring some sleep time between each transactions
 */
class Dalenys_Api_Batch_Observer_Sleep implements SplObserver
{
    /**
     * The sleep value in msec
     *
     * @var int
     */
    protected $sleep;

    /**
     * Instanciate
     *
     * @param integer $msec Milliseconds
     */
    public function __construct($msec)
    {
        $this->sleep = $msec;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     */
    public function update(SplSubject $subject)
    {
        usleep($this->sleep * 1000);
    }
}
