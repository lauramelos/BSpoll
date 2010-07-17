<?php

/**
 * Slides filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSlidesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      's1'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's2'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's3'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's4'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's5'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's6'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's7'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's8'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's9'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's10'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's11'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's12'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's13'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's14'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's15'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's16'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's17'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's18'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's19'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's20'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's21'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's22'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's23'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's24'            => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      'r1'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r2'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r3'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r4'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r5'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r6'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r7'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r8'             => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'client_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'client_poll_id' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      's1'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's2'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's3'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's4'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's5'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's6'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's7'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's8'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's9'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's10'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's11'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's12'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's13'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's14'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's15'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's16'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's17'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's18'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's19'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's20'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's21'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's22'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's23'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's24'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      'r1'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r2'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r3'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r4'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r5'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r6'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r7'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r8'             => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'client_id'      => new sfValidatorPass(array('required' => false)),
      'client_poll_id' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('slides_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Slides';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      's1'             => 'Enum',
      's2'             => 'Enum',
      's3'             => 'Enum',
      's4'             => 'Enum',
      's5'             => 'Enum',
      's6'             => 'Enum',
      's7'             => 'Enum',
      's8'             => 'Enum',
      's9'             => 'Enum',
      's10'            => 'Enum',
      's11'            => 'Enum',
      's12'            => 'Enum',
      's13'            => 'Enum',
      's14'            => 'Enum',
      's15'            => 'Enum',
      's16'            => 'Enum',
      's17'            => 'Enum',
      's18'            => 'Enum',
      's19'            => 'Enum',
      's20'            => 'Enum',
      's21'            => 'Enum',
      's22'            => 'Enum',
      's23'            => 'Enum',
      's24'            => 'Enum',
      'r1'             => 'Enum',
      'r2'             => 'Enum',
      'r3'             => 'Enum',
      'r4'             => 'Enum',
      'r5'             => 'Enum',
      'r6'             => 'Enum',
      'r7'             => 'Enum',
      'r8'             => 'Enum',
      'client_id'      => 'Text',
      'client_poll_id' => 'Date',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
