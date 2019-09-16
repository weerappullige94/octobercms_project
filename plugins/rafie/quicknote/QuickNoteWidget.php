<?php
namespace RAFIE\quicknote\Movies;

use Backend\Classes\ReportWidgetBase;
class QuickNoteWidget extends ReportWidgetBase{

public function render(){
$notes = BackendAuth::getUser()->notes;

return $this->makePartial('notes', [ 'notes' => $notes ]);
}
}