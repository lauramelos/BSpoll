<?php

/**
 * BaseSlides
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property enum $s1
 * @property enum $s2
 * @property enum $s3
 * @property enum $s4
 * @property enum $s5
 * @property enum $s6
 * @property enum $s7
 * @property enum $s8
 * @property enum $s9
 * @property enum $s10
 * @property enum $s11
 * @property enum $s12
 * @property enum $s13
 * @property enum $s14
 * @property enum $s15
 * @property enum $s16
 * @property enum $s17
 * @property enum $s18
 * @property enum $s19
 * @property enum $s20
 * @property enum $s21
 * @property enum $s22
 * @property enum $s23
 * @property enum $s24
 * @property enum $r1
 * @property enum $r2
 * @property enum $r3
 * @property enum $r4
 * @property enum $r5
 * @property enum $r6
 * @property enum $r7
 * @property enum $r8
 * @property string $client_id
 * @property date $client_poll_id
 * 
 * @method integer getId()             Returns the current record's "id" value
 * @method enum    getS1()             Returns the current record's "s1" value
 * @method enum    getS2()             Returns the current record's "s2" value
 * @method enum    getS3()             Returns the current record's "s3" value
 * @method enum    getS4()             Returns the current record's "s4" value
 * @method enum    getS5()             Returns the current record's "s5" value
 * @method enum    getS6()             Returns the current record's "s6" value
 * @method enum    getS7()             Returns the current record's "s7" value
 * @method enum    getS8()             Returns the current record's "s8" value
 * @method enum    getS9()             Returns the current record's "s9" value
 * @method enum    getS10()            Returns the current record's "s10" value
 * @method enum    getS11()            Returns the current record's "s11" value
 * @method enum    getS12()            Returns the current record's "s12" value
 * @method enum    getS13()            Returns the current record's "s13" value
 * @method enum    getS14()            Returns the current record's "s14" value
 * @method enum    getS15()            Returns the current record's "s15" value
 * @method enum    getS16()            Returns the current record's "s16" value
 * @method enum    getS17()            Returns the current record's "s17" value
 * @method enum    getS18()            Returns the current record's "s18" value
 * @method enum    getS19()            Returns the current record's "s19" value
 * @method enum    getS20()            Returns the current record's "s20" value
 * @method enum    getS21()            Returns the current record's "s21" value
 * @method enum    getS22()            Returns the current record's "s22" value
 * @method enum    getS23()            Returns the current record's "s23" value
 * @method enum    getS24()            Returns the current record's "s24" value
 * @method enum    getR1()             Returns the current record's "r1" value
 * @method enum    getR2()             Returns the current record's "r2" value
 * @method enum    getR3()             Returns the current record's "r3" value
 * @method enum    getR4()             Returns the current record's "r4" value
 * @method enum    getR5()             Returns the current record's "r5" value
 * @method enum    getR6()             Returns the current record's "r6" value
 * @method enum    getR7()             Returns the current record's "r7" value
 * @method enum    getR8()             Returns the current record's "r8" value
 * @method string  getClientId()       Returns the current record's "client_id" value
 * @method date    getClientPollId()   Returns the current record's "client_poll_id" value
 * @method Slides  setId()             Sets the current record's "id" value
 * @method Slides  setS1()             Sets the current record's "s1" value
 * @method Slides  setS2()             Sets the current record's "s2" value
 * @method Slides  setS3()             Sets the current record's "s3" value
 * @method Slides  setS4()             Sets the current record's "s4" value
 * @method Slides  setS5()             Sets the current record's "s5" value
 * @method Slides  setS6()             Sets the current record's "s6" value
 * @method Slides  setS7()             Sets the current record's "s7" value
 * @method Slides  setS8()             Sets the current record's "s8" value
 * @method Slides  setS9()             Sets the current record's "s9" value
 * @method Slides  setS10()            Sets the current record's "s10" value
 * @method Slides  setS11()            Sets the current record's "s11" value
 * @method Slides  setS12()            Sets the current record's "s12" value
 * @method Slides  setS13()            Sets the current record's "s13" value
 * @method Slides  setS14()            Sets the current record's "s14" value
 * @method Slides  setS15()            Sets the current record's "s15" value
 * @method Slides  setS16()            Sets the current record's "s16" value
 * @method Slides  setS17()            Sets the current record's "s17" value
 * @method Slides  setS18()            Sets the current record's "s18" value
 * @method Slides  setS19()            Sets the current record's "s19" value
 * @method Slides  setS20()            Sets the current record's "s20" value
 * @method Slides  setS21()            Sets the current record's "s21" value
 * @method Slides  setS22()            Sets the current record's "s22" value
 * @method Slides  setS23()            Sets the current record's "s23" value
 * @method Slides  setS24()            Sets the current record's "s24" value
 * @method Slides  setR1()             Sets the current record's "r1" value
 * @method Slides  setR2()             Sets the current record's "r2" value
 * @method Slides  setR3()             Sets the current record's "r3" value
 * @method Slides  setR4()             Sets the current record's "r4" value
 * @method Slides  setR5()             Sets the current record's "r5" value
 * @method Slides  setR6()             Sets the current record's "r6" value
 * @method Slides  setR7()             Sets the current record's "r7" value
 * @method Slides  setR8()             Sets the current record's "r8" value
 * @method Slides  setClientId()       Sets the current record's "client_id" value
 * @method Slides  setClientPollId()   Sets the current record's "client_poll_id" value
 * 
 * @package    limbo
 * @subpackage model
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSlides extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('slides');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('s1', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s2', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s3', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s4', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s5', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s6', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s7', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s8', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s9', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s10', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s11', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s12', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s13', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s14', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s15', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s16', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s17', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s18', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s19', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s20', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s21', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s22', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s23', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('s24', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r1', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r2', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r3', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r4', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r5', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r6', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r7', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('r8', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
             ),
             'default' => 0,
             ));
        $this->hasColumn('client_id', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('client_poll_id', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));


        $this->setAttribute(Doctrine_Core::ATTR_EXPORT, Doctrine_Core::EXPORT_ALL);

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}