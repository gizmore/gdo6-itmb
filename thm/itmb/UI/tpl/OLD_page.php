<?php
use GDO\UI\GDT_Bar;
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?=GDT_Bar::make('top')->yieldHook('TopBar');?>
<?=$page->html?>
<?=GDT_Bar::make('bottom')->yieldHook('BottomBar');?>
</body>
</html>