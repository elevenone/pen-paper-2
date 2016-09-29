<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\ComicTitle;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class ComicTitleTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_comic_titles';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'comictitleid',
            'comictitle',
            'publisherid',
            'gamelineid',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'comictitleid' => (object) [
                'name' => 'comictitleid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'comictitle' => (object) [
                'name' => 'comictitle',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'publisherid' => (object) [
                'name' => 'publisherid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'gamelineid' => (object) [
                'name' => 'gamelineid',
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
            'comictitleid',
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
            'comictitleid' => '0',
            'comictitle' => '',
            'publisherid' => '0',
            'gamelineid' => '0',
        ];
    }
}