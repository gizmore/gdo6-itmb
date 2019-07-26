<?php
namespace GDO\ITMB;

use GDO\Core\GDO_Module;

final class Module_ITMB extends GDO_Module
{
	public function isSiteModule() { return true; }
	public function getThemes() { return ['itmb']; }
}
