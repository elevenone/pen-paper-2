<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\Publisher;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class PublisherTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_publishers';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'publisherid',
            'publisher',
            'url',
            'publishernotes',
            'publisherimage',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'publisherid' => (object) [
                'name' => 'publisherid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'publisher' => (object) [
                'name' => 'publisher',
                'type' => 'varchar',
                'size' => 100,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'url' => (object) [
                'name' => 'url',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'publishernotes' => (object) [
                'name' => 'publishernotes',
                'type' => 'text',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'publisherimage' => (object) [
                'name' => 'publisherimage',
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
            'publisherid',
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
            'publisherid' => '0',
            'publisher' => '',
            'url' => '',
            'publishernotes' => null,
            'publisherimage' => '',
        ];
    }
}
