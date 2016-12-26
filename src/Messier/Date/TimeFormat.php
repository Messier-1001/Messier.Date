<?php
/**
 * @author         Messier 1001 <messier.1001+code@gmail.com>
 * @copyright  (c) 2016, Messier 1001
 * @package        Messier.DBLib
 * @since          2016-12-25
 * @subpackage     …
 * @version        0.1.0
 */


declare( strict_types = 1 );


namespace Messier\Date;


/**
 * The Messier\Date\TimeFormat enumeration.
 *
 * @since v0.1.0
 */
interface TimeFormat
{


   /**
    * 24 hour format 'H:i:s' e.g.: '21:24:00'
    */
   const FULL_24H  = 'H:i:s';
   /**
    * 24 hour short format 'H:i' e.g: '21:24'
    */
   const SHORT_24H = 'H:i';
   /**
    * 12 hour format 'h:i:s A' e.g.: '09:24:00 AM'
    */
   const FULL_12H  = 'h:i:s A';
   /**
    * 12 hour short format 'h:i A' e.g: '09:24 PM'
    */
   const SHORT_12H = 'H:i A';

}

