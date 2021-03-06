<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\ComicSpecial;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class ComicSpecialTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_comicspecials';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'comicspecialid',
            'comicspecialtitle',
            'comictitleid',
            'copyrightyear',
            'pagecount',
            'comicspecialnotes',
            'comicspecialcover',
            'comicspecialurl',
            'submitterid',
            'coversubmitterid',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'comicspecialid' => (object) [
                'name' => 'comicspecialid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'comicspecialtitle' => (object) [
                'name' => 'comicspecialtitle',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'comictitleid' => (object) [
                'name' => 'comictitleid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'copyrightyear' => (object) [
                'name' => 'copyrightyear',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'pagecount' => (object) [
                'name' => 'pagecount',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'comicspecialnotes' => (object) [
                'name' => 'comicspecialnotes',
                'type' => 'text',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'comicspecialcover' => (object) [
                'name' => 'comicspecialcover',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'comicspecialurl' => (object) [
                'name' => 'comicspecialurl',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'submitterid' => (object) [
                'name' => 'submitterid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'coversubmitterid' => (object) [
                'name' => 'coversubmitterid',
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
            'comicspecialid',
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
            'comicspecialid' => '0',
            'comicspecialtitle' => '',
            'comictitleid' => '0',
            'copyrightyear' => '0',
            'pagecount' => '0',
            'comicspecialnotes' => null,
            'comicspecialcover' => '',
            'comicspecialurl' => '',
            'submitterid' => '0',
            'coversubmitterid' => '0',
        ];
    }
}
