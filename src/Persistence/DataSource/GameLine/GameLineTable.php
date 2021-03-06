<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\GameLine;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class GameLineTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_gamelines';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'gamelineid',
            'gameline',
            'genre',
            'keywords',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'gamelineid' => (object) [
                'name' => 'gamelineid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'gameline' => (object) [
                'name' => 'gameline',
                'type' => 'varchar',
                'size' => 100,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'genre' => (object) [
                'name' => 'genre',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'keywords' => (object) [
                'name' => 'keywords',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
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
            'gamelineid',
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
            'gamelineid' => '0',
            'gameline' => '',
            'genre' => '',
            'keywords' => '',
        ];
    }
}
