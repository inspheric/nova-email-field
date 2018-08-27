<?php

namespace Inspheric\Fields;

use Laravel\Nova\Fields\Text;

class Email extends Text
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'email';

    /**
     * Whether the email should be displayed as a clickable mailto link.
     *
     * @param  bool $clickable
     * @return $this
     */
    public function clickable(bool $clickable = true)
    {
        return $this->withMeta(['clickable' => $clickable]);
    }
}
