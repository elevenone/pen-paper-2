<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\PublisherLine;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class PublisherLineTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_publisherlines';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'publisherlineid',
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
            'publisherlineid' => (object) [
                'name' => 'publisherlineid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
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
            'publisherlineid',
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
            'publisherlineid' => '0',
            'publisherid' => '0',
            'gamelineid' => '0',
        ];
    }
}
