<?php

namespace galaykosasha\query_builder;


use yii\base\BaseObject;

/**
 * The operator object representation
 *
 * @see http://mistic100.github.io/jQuery-QueryBuilder/#operators
 * @author Galayko Sasha <galaykosasha@gmail.com>
 */
class Operator extends BaseObject implements Optionable
{
    use OptionTrait;

    /**
     * @var string	Identifier of the operator
     */
    public $type;

    /**
     * @var int	The number of inputs displayed. Typical values are:
     * - 0 (is_null & similar operators)
     * - 1 (most operators)
     * - 2 (between operator)
     */
    public $nbInputs;

    /**
     * @var boolean	Inform the builder that each input can have multiple values. true for in, bot_in, false otherwise.
     */
    public $multiple;

    /**
     * @var array An array containing string, number, datetime.
     */
    public $applyTo;

} 