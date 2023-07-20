<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{

    public $classes;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $classes = 'bg-blue-100 border-blue-400 text-blue-700';
                break;
    
            case 'danger':
                $classes = 'bg-red-100 border-red-400 text-red-700';
                break;
            
            default:
                $classes = 'bg-green-100 border-green-400 text-green-700';
                break;
        }
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
