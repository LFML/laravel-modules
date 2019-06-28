<?php

namespace Laravel\Modules\Support;

use Illuminate\Support\Str;

class ModuleFunctions
{
    protected $module;
    protected $viewmodule;

    public function __construct($module, $rview = null)
    {
        $this->module = $module;
        $this->viewmodule = $rview ? $rview : Str::lower($module);
    }

    /**
     * @param null $view
     * @param array $data
     * @param array $mergeData
     * @return string
     */
    public function viewName($view)
    {
        if ($this->viewmodule != null & !empty($this->viewmodule)) {
            return $this->viewmodule . '::' . $view;
        } else {
            return $view;
        }
    }

    /**
     * @param null $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($view = null, $data = [], $mergeData = [])
    {
        return view($view ? $this->viewName($view) : $view, $data, $mergeData);
    }
}
