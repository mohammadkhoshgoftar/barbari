<?php

namespace Modules\Core\app\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DatePickerComponent extends Component
{
    public string $id;
    public string $name;
    public string $inputClass;
    public mixed $value;
    public string $label;
    public string $placeholder;
    public string $options;
    public string $enable;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $name, string $inputClass, string $label, string $placeholder, $value = null,$options = null,$enable = true)
    {
        $this->id = $id;
        $this->name = $name;
        $this->inputClass = $inputClass;
        $this->value = $value;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->enable = $enable;
        $this->options = $options === null ? '{
            initialValue: false
        }' : $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('core::components.date-picker-component', [
            'id' => $this->id,
            'name' => $this->name,
            'label' => $this->label,
            'inputClass' => $this->inputClass,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'options' => $this->options,
            'enable' => $this->enable,
        ]);
    }
}
