<?php

namespace galaykosasha\query_builder;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [jquery QueryBuilder library](https://github.com/mistic100/jQuery-QueryBuilder)
 *
 * @author Galayko Sasha <galaykosasha@gmail.com>
 */
class QueryBuilderAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-querybuilder/dist';

    public $js = [
        'js/query-builder.standalone.min.js',
    ];

    public $css = [
        'css/query-builder.default.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'galaykosasha\query_builder\BootstrapAsset',
    ];

} 