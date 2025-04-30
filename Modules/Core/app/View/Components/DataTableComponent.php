<?php

namespace Modules\Core\app\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTableComponent extends Component
{
    public $route;
    public $columns;
    public $table;
    /**
     * Create a new component instance.
     */
    public function __construct(string $route, array $columns,string $table='0')
    {
        $this->route = $route;
        $this->columns = $columns;
        $this->table = $table;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('core::components.data-table-component',[
            'route' => $this->route,
            'columns' => $this->columns,
            'table' => $this->table
        ]);
    }
}
