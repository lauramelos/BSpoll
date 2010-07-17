<?php

/**
 * Slides form base class.
 *
 * @method Slides getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSlidesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      's1'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's2'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's3'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's4'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's5'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's6'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's7'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's8'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's9'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's10'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's11'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's12'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's13'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's14'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's15'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's16'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's17'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's18'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's19'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's20'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's21'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's22'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's23'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      's24'            => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10))),
      'r1'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r2'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r3'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r4'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r5'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r6'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r7'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'r8'             => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4))),
      'client_id'      => new sfWidgetFormInputText(),
      'client_poll_id' => new sfWidgetFormDate(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      's1'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's2'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's3'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's4'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's5'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's6'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's7'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's8'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's9'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's10'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's11'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's12'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's13'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's14'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's15'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's16'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's17'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's18'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's19'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's20'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's21'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's22'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's23'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      's24'            => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10), 'required' => false)),
      'r1'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r2'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r3'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r4'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r5'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r6'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r7'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'r8'             => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4), 'required' => false)),
      'client_id'      => new sfValidatorString(array('max_length' => 255)),
      'client_poll_id' => new sfValidatorDate(),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('slides[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Slides';
  }

}
