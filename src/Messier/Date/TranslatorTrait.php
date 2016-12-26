<?php
/**
 * Created by PhpStorm.
 * User: messier
 * Date: 26.12.16
 * Time: 10:50
 */

namespace Messier\Date;


use Messier\Translation\Locale;
use Messier\Translation\Source\ArraySource;
use Messier\Translation\Translator;


trait TranslatorTrait
{


   protected function getTranslator( string $folder ) : Translator
   {

      if ( Locale::HasGlobalInstance() )
      {
         // Use the global Locale instance
         $locale = Locale::GetGlobalInstance();
      }
      else
      {
         // Get a new Locale instance that defaults to 'en'
         $locale = Locale::Create( new Locale( 'en' ) );
      }

      $source = ArraySource::LoadFromFolder( $folder, $locale, false );

      return new Translator( $source );

   }

}

