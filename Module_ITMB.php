<?php
namespace GDO\ITMB;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Headline;
use GDO\UI\GDT_Link;

/**
 * Website for my little company.
 * Depends on JQueryMobile theme.
 * @author gizmore
 * @version 6.10.3
 * @since 6.4.0
 */
final class Module_ITMB extends GDO_Module
{
    public $module_license = "Properitary";
    public function isSiteModule() { return true; }
	public function getTheme() { return 'itmb'; }
	public function onLoadLanguage() { return $this->loadLanguage('lang/itmb'); }
	public function getDependencies()
	{
	    return ['JQueryMobile', 'Contact', 'FontRoboto', 'News', 'Forum', 'PM',
	        'Login', 'Register', 'Admin', 'Account', 'Avatar', 'Perf',
	        'Address', 'ActivationAlert', 'Recovery', 'CKEditor', 'Mibbit',
	    ];
	}
	
	public function onInitSidebar()
	{
	    $link = GDT_Link::make('itmb_h1')->href(href('ITMB', 'Home'));
	    GDT_Page::$INSTANCE->topNav->addField(GDT_Headline::make()->level(1)->textRaw($link->render()));
	}

	public function onIncludeScripts()
	{
	    $this->addCSS('css/itmb-gdo6.css');
	}
	
}
