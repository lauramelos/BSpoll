<?php

require_once dirname(__FILE__).'/../lib/resultsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/resultsGeneratorHelper.class.php';

/**
 * results actions.
 *
 * @package    limbo
 * @subpackage results
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class resultsActions extends autoResultsActions
{
  public function executeListExcel(sfWebRequest $request)
  {
    /*
      //Recuperamos los Filtros
      $this->processSort();
      $this->processFilters();
      $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/autorizaciones/filters');

      //Hacemos la Consulta
      $c = new Criteria();
      $this->addSortCriteria($c);
      $this->addFiltersCriteria($c);
      $autorizaciones = AutorizacionesPeer::doSelect($c);
*/
      
      $results = Doctrine::getTable('slides')->findAll();

      //Creamos el archivo temporal de exportación
      $file = "poll_result.csv";
      $fh = fopen($file,"w+") or die ("unable to open file");

      //Cabecera - Cambienla por sus necesidades
      $row = "\"Id\",\"S1\",\"S2\",\"S3\",\"S4\",\"S5\",\"S6\",\"S7\",\"S8\",\"S9\",\"S10\",\"S11\",\"S12\",\"S13\",\"S14\",\"S15\",\"S16\",\"S17\",\"S18\",\"S19\",\"S20\",\"S21\",\"S22\",\"S23\",\"S24\",\"R1\",\"R2\",\"R3\",\"R4\",\"R5\",\"R6\",\"R7\",\"R8\",\"Client\",\"Client poll\",\"Created at\",\"Updated at\"\n";
      
      
      
      
    /*  $row = "\"Codigo Ipad\","; $row .= "\"TimeId\",";
      $row .= "\"Vendedor\","; $row .= "\"Motivo\",";
      $row .= "\"Comentario\","; $row .= "\"Autorizado por\",";
      $row .= "\"Deteriorado\","; $row .= "\"Cod. Articulo\"\n";*/

      fwrite($fh,$row);

      //Procesamos cada línea
      $results = Doctrine::getTable('slides')->findAll();
      foreach($results as $result){
       $row = "\"".$result->getId()."\",\"".$result->getS1()."\",\"".$result->getS2()."\",\"".$result->getS3().
              "\",\"".$result->getS4()."\",\"".$result->getS5()."\",\"".$result->getS6()."\",\"".$result->getS7().
              "\",\"".$result->getS8()."\",\"".$result->getS9()."\",\"".$result->getS10()."\",\"".$result->getS11().
              "\",\"".$result->getS12()."\",\"".$result->getS13()."\",\"".$result->getS14()."\",\"".$result->getS15()."\",\"".$result->getS16()."\",\"".$result->getS17().
               "\",\"".$result->getS18()."\",\"".$result->getS19()."\",\"".$result->getS20()."\",\"".$result->getS21()."\",\"".$result->getS22()."\",\"".$result->getS23().
               "\",\"".$result->getS24()."\",\"".$result->getR1()."\",\"".$result->getR2()."\",\"".$result->getR3()."\",\"".$result->getR4()."\",\"".$result->getR5().
               "\",\"".$result->getR6()."\",\"".$result->getR7()."\",\"".$result->getR8()."\",\"".$result->getClientId()."\",\"".$result->getClientPollId()."\",\"".$result->getCreatedAt()."\",\"".$result->getUpdatedAt()."\"\n";


      /*$row = "\"".$aut->getCodigo()."\",";
      $row .= "\"".$this->getSucursalName($aut->getIdSucursal())."\",";
      $row .= "\"".$this->getVendedorName($aut->getIdVendedor())."\",";
      $row .= "\"".$this->getMotivoName($aut->getIdMotivo())."\",";
      $row .= "\"".$aut->getComentario()."\",";
      $row .= "\"".$aut->getUsuario()."\",";
      $row .= "\"".$aut->getDeteriorado()."\"";
      $row .= "\"".$aut->getCodArticulo()."\"\n";*/
      fwrite($fh,$row);
      }
      fclose($fh);

      //Enviamos la cabecera HTML para que ejecute la descarga y el browser lo identifique
      // como un elemento Excel

      header("Content-Type: application/vnd.ms-excel");
      header("Content-Type: application/force-download");
      header("Content-Transfer-Encoding: binary");
      header("Content-Disposition: attachment;filename=".$file );
      header("Content-Length: ".filesize($file));
      header("Pragma: no-cache");
      header("Expires: 0");
      readfile($file);

      //Tiramos la vista a NONE

      return sfView::NONE;
   }




}
