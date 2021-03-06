<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\ShortFictionCreator;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class ShortFictionCreatorTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_shortfictioncreators';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'shortfictioncreatorid',
            'shortfictionid',
            'creatorid',
            'creditid',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'shortfictioncreatorid' => (object) [
                'name' => 'shortfictioncreatorid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'shortfictionid' => (object) [
                'name' => 'shortfictionid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
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
            'shortfictioncreatorid',
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
            'shortfictioncreatorid' => '0',
            'shortfictionid' => '0',
            'creatorid' => '0',
            'creditid' => '0',
        ];
    }
}
