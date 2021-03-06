<?php

/**
 * Render interface
 *
 * @package Dalenys\Renderer
 * @author Jérémy Cohen Solal <jeremy@dalenys.com>
 */

/**
 * Render a payment form
 */
interface Dalenys_Api_Renderer_Renderable
{
    /**
     * Display a payment form
     *
     * @param array $params
     * @param array $options
     * @return string
     */
    public function render(array $params, array $options = array());
}
