<?php
use GDO\UI\GDT_Image;
use GDO\ITMB\Module_ITMB;
use GDO\UI\GDT_Bar;
use GDO\UI\GDT_Link;

$m = Module_ITMB::instance();
?>
<h2><?=t('itmb_home_h2')?></h2>

<?=GDT_Image::make()->src($m->wwwPath('img/logo.png'))->addClass('itmb-home-logo')->render()?>

<p><?=t('itmb_home_info', [sitename()])?></p>

<?php
$cont = GDT_Bar::make()->vertical()->wrap(false);
$cont->addField(GDT_Link::make('link_pricing')->href($m->href('Pricing')));

echo $cont->render();
