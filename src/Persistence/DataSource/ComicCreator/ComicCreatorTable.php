<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\ComicCreator;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class ComicCreatorTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_comiccreators';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'comiccreatorid',
            'creatorid',
            'comicid',
            'creditid',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'comiccreatorid' => (object) [
                'name' => 'comiccreatorid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'creatorid' => (object) [
                'name' => 'creatorid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'comicid' => (object) [
                'name' => 'comicid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'creditid' => (object) [
                'name' => 'creditid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getPrimaryKey()
    {
        return [
            'comiccreatorid',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getAutoinc()
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function getColDefaults()
    {
        return [
            'comiccreatorid' => '0',
            'creatorid' => '0',
            'comicid' => '0',
            'creditid' => '0',
        ];
    }
}