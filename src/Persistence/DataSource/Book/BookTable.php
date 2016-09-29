<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace PenPaper\Persistence\DataSource\Book;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class BookTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'rpg_books';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'bookid',
            'booktitle',
            'gamelineid',
            'systemid',
            'publisherid',
            'publisher2id',
            'productcode',
            'isbn',
            'isbn13',
            'pagecount',
            'copyright',
            'url',
            'image',
            'awards',
            'booknotes',
            'ogcdir',
            'rpgshopid',
            'drivethru',
            'submitter',
            'imagesubmitter',
            'monthid',
            'coverprice',
            'pdfprice',
            'shipdate',
            'incomplete',
            'bookupdated',
            'drivethrough_url',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'bookid' => (object) [
                'name' => 'bookid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => true,
            ],
            'booktitle' => (object) [
                'name' => 'booktitle',
                'type' => 'varchar',
                'size' => 200,
                'scale' => null,
                'notnull' => true,
                'default' => '',
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
            'systemid' => (object) [
                'name' => 'systemid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
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
            'publisher2id' => (object) [
                'name' => 'publisher2id',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'productcode' => (object) [
                'name' => 'productcode',
                'type' => 'varchar',
                'size' => 20,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'isbn' => (object) [
                'name' => 'isbn',
                'type' => 'varchar',
                'size' => 100,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'isbn13' => (object) [
                'name' => 'isbn13',
                'type' => 'varchar',
                'size' => 50,
                'scale' => null,
                'notnull' => true,
                'default' => '',
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
            'copyright' => (object) [
                'name' => 'copyright',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
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
            'image' => (object) [
                'name' => 'image',
                'type' => 'varchar',
                'size' => 50,
                'scale' => null,
                'notnull' => true,
                'default' => '',
                'autoinc' => false,
                'primary' => false,
            ],
            'awards' => (object) [
                'name' => 'awards',
                'type' => 'text',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'booknotes' => (object) [
                'name' => 'booknotes',
                'type' => 'text',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'ogcdir' => (object) [
                'name' => 'ogcdir',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'rpgshopid' => (object) [
                'name' => 'rpgshopid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'drivethru' => (object) [
                'name' => 'drivethru',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'submitter' => (object) [
                'name' => 'submitter',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'imagesubmitter' => (object) [
                'name' => 'imagesubmitter',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'monthid' => (object) [
                'name' => 'monthid',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'coverprice' => (object) [
                'name' => 'coverprice',
                'type' => 'decimal',
                'size' => 10,
                'scale' => 2,
                'notnull' => true,
                'default' => '0.00',
                'autoinc' => false,
                'primary' => false,
            ],
            'pdfprice' => (object) [
                'name' => 'pdfprice',
                'type' => 'decimal',
                'size' => 10,
                'scale' => 2,
                'notnull' => true,
                'default' => '0.00',
                'autoinc' => false,
                'primary' => false,
            ],
            'shipdate' => (object) [
                'name' => 'shipdate',
                'type' => 'date',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => '0000-00-00',
                'autoinc' => false,
                'primary' => false,
            ],
            'incomplete' => (object) [
                'name' => 'incomplete',
                'type' => 'tinyint',
                'size' => 2,
                'scale' => null,
                'notnull' => true,
                'default' => '0',
                'autoinc' => false,
                'primary' => false,
            ],
            'bookupdated' => (object) [
                'name' => 'bookupdated',
                'type' => 'date',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => '0000-00-00',
                'autoinc' => false,
                'primary' => false,
            ],
            'drivethrough_url' => (object) [
                'name' => 'drivethrough_url',
                'type' => 'varchar',
                'size' => 500,
                'scale' => null,
                'notnull' => true,
                'default' => null,
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
            'bookid',
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
            'bookid' => '0',
            'booktitle' => '',
            'gamelineid' => '0',
            'systemid' => '0',
            'publisherid' => '0',
            'publisher2id' => '0',
            'productcode' => '',
            'isbn' => '',
            'isbn13' => '',
            'pagecount' => '0',
            'copyright' => '0',
            'url' => '',
            'image' => '',
            'awards' => null,
            'booknotes' => null,
            'ogcdir' => '0',
            'rpgshopid' => '0',
            'drivethru' => '0',
            'submitter' => '0',
            'imagesubmitter' => '0',
            'monthid' => '0',
            'coverprice' => '0.00',
            'pdfprice' => '0.00',
            'shipdate' => '0000-00-00',
            'incomplete' => '0',
            'bookupdated' => '0000-00-00',
            'drivethrough_url' => null,
        ];
    }
}