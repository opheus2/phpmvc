<?php

namespace orpheusohms\phpmvc\Form;

use orpheusohms\phpmvc\Model;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute, $label = '')
    {
        return new InputField($model, $attribute, $label);
    }
}
