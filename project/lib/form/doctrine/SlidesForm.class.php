<?php

/**
 * Slides form.
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SlidesForm extends BaseSlidesForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['client_poll_id']);
  }
}
