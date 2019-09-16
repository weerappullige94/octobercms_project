<?php

namespace Tharanga\Movies;

use Backend\Classes\ReportWidgetBase;

class MyWidget extends ReportWidgetBase {

        public function render(){
            $notes=array("Volvo","BMW","Toyota");
            return $this->makePartial('notes', [ 'notes' => $notes ]);
            //return "hello";
        }

}
