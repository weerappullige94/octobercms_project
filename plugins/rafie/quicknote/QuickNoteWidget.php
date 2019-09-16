<?php
namespace RAFIE\quicknote\Movies;

use Backend\Classes\ReportWidgetBase;
use Backend\Facades\BackendAuth;

class QuickNoteWidget extends ReportWidgetBase{

public function render(){
$notes = BackendAuth::getUser()->notes;

return "hello";
}
}