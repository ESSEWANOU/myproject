<?php
namespace App\Utilities;
use DateTime;
class date

{
   public function isWeekend()
   {
   	// return date('N')>=6;
   	return (new DateTime)->format('N')>=6;
   }
}
