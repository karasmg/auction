<?php

/**
 *
 * @author Ivan Teleshun <teleshun.ivan@gmail.com>
 * @link http://www.molotoksoftware.com/
 * @copyright 2016 MolotokSoftware
 * @license GNU General Public License, version 3
 */

/**
 * 
 * This file is part of MolotokSoftware.
 *
 * MolotokSoftware is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * MolotokSoftware is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with MolotokSoftware.  If not, see <http://www.gnu.org/licenses/>.
 */


$this->pageTitle = 'Атрибуты';
$this->header_info = array(
    'icon' => 'icon-list-alt icon-2x',
    'title' => 'Атрибуты',
);

$this->breadcrumbs = array(
    array(
        'icon' => 'icon-folder-open',
        'label' => 'Каталог',
        'url' => array('/catalog/category/index'),
    ),
    array(
        'icon' => 'icon-list-alt',
        'label' => 'Атрибуты',
        'url' => '',
    ),
);
?>


<div class="container-fluid padded-mini">
    <div class="row-fluid">
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="icon-plus"></i> Добавить
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo Yii::app()->createUrl(
                        '/catalog/attribute/create',
                        array('type' => 'common')
                    ); ?>">
                        <i class="icon-exchange"></i> Атрибут</a>
                </li>

             <!--   <li>
                    <a href="<?php echo Yii::app()->createUrl(
                        '/catalog/attribute/create',
                        array('type' => 'dependet')
                    ); ?>">
                        <i class="icon-random"></i> Зависимый атрибут</a>
                </li> -->
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid padded">
    <div class="box">
        <div class="box-header">
            <span class="title">Атрибуты</span>
        </div>
        <div class="box-content">
            <?php
            $this->renderPartial(
                '_table_attributes',
                array(
                    'model' => $model
                )
            );
            ?>
        </div>
    </div>
</div>
