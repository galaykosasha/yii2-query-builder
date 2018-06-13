<?php

namespace galaykosasha\query_builder;


use yii\base\BaseObject;

/**
 * The icon object representation
 *
 * @see http://mistic100.github.io/jQuery-QueryBuilder/#icons
 * @author Galayko Sasha <galaykosasha@gmail.com>
 */
class Icon extends BaseObject implements Optionable
{
    use OptionTrait;

    /**
     * @var string Add group icon
     */
    public $addGroup;

    /**
     * @var string Add rule icon
     */
    public $addRule;

    /**
     * @var string Remove group icon
     */
    public $removeGroup;

    /**
     * @var string Remove rule icon
     */
    public $removeRule;

    /**
     * @var string Error icon
     */
    public $error;

} 