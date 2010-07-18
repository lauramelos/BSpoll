<?php

/**
 * poll actions.
 *
 * @package    limbo
 * @subpackage poll
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pollActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   
  }
  public function executeSurvey(sfWebRequest $request)
  {
    $this->surveys = array(
      array('title' => 'Survey 01', 'number' => 0),
      array('title' => 'Survey 02', 'number' => 1),
      array('title' => 'Survey 03', 'number' => 2),
      array('title' => 'Survey 04', 'number' => 3),
      array('title' => 'Survey 05', 'number' => 4),

      array('title' => 'Survey 06', 'number' => 5),
      array('title' => 'Survey 07', 'number' => 6),
      array('title' => 'Survey 08', 'number' => 7),
      array('title' => 'Survey 09', 'number' => 8),
      array('title' => 'Survey 10', 'number' => 9),

      array('title' => 'Survey 10', 'number' => 10),
      array('title' => 'Survey 11', 'number' => 11),
      array('title' => 'Survey 12', 'number' => 12),
      array('title' => 'Survey 13', 'number' => 13),
      array('title' => 'Survey 14', 'number' => 14),

      array('title' => 'Survey 05', 'number' => 15),
      array('title' => 'Survey 06', 'number' => 16),
      array('title' => 'Survey 07', 'number' => 17),
      array('title' => 'Survey 08', 'number' => 18),
      array('title' => 'Survey 09', 'number' => 19),

      array('title' => 'Survey 20', 'number' => 20),
      array('title' => 'Survey 21', 'number' => 21),
      array('title' => 'Survey 22', 'number' => 22),
      array('title' => 'Survey 23', 'number' => 23),
      array('title' => 'Survey 24', 'number' => 24)
      
    );
  }

  public function executeAdd(sfWebRequest $request)
  {

  }
  public function executeContact(sfWebRequest $request)
  {

  }
}
