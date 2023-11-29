<?php

namespace App;

class PageController
{
    /**
     * Home page
     * @return void
     */
    public function index(): void
    {
        $view = new View('home');
        $view->render();
    }

    /**
     * Folder 1 page
     * @return void
     */
    public function folder1(): void
    {
        $view = new View('folder1');
        $view->render();
    }

    /**
     * Folder 2 page
     * @return void
     */
    public function folder2(): void
    {
        $view = new View('folder2');
        $view->render();
    }
}