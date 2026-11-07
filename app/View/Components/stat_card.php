<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Ramsey\Uuid\Type\Integer;

class stat_card extends Component
{
    /**
     * Create a new component instance.
     */


     public string $title;
     public Integer $value;
    public function __construct($title , $value)
    {

        $this->title= $title ;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stat_card');
    }
}
