<?php
use Illuminate\Support\Facades\Facade;

class BsFormFacade extends Facade {
    protected static function getFacadeAccessor() { return 'BsForm'; }
}
