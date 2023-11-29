<?php

namespace App;

class View
{
    private string $template;

    public function __construct($template)
    {
        $this->template = $template;
    }

    /**
     * @return void
     */
    public function render(): void
    {
        require_once getcwd() . '/views/' . $this->template . '.php';
    }
}