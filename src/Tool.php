<?php

namespace PhpJunior\NovaLogViewer;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool as BaseTool;

class Tool extends BaseTool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-log-viewer', __DIR__.'/../dist/js/tool.js');
        // Not needed until css is written.
        // Nova::style('nova-log-viewer', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation(): \Illuminate\View\View|string
    {
        return view('nova-log-viewer::navigation');
    }
}
