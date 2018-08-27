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
    public $component = 'email-field';

    /**
     * Whether the email should be displayed as a clickable
     * mailto link on the detail page.
     *
     * @param  bool $clickable
     * @return $this
     */
    public function clickable(bool $clickable = true)
    {
        return $this->withMeta(['clickable' => $clickable]);
    }

    /**
     * Whether the email should be displayed as a clickable
     * mailto link on the index page.
     *
     * @param  bool $clickable
     * @return $this
     */
    public function clickableOnIndex(bool $clickable = true)
    {
        return $this->withMeta(['clickableOnIndex' => $clickable]);
    }
}
