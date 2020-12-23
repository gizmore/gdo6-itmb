<?php
use GDO\UI\GDT_Accordeon;
use GDO\UI\GDT_ListItem;
use GDO\Core\GDO;
use GDO\DB\GDT_CreatedAt;
use GDO\DB\GDT_CreatedBy;
use GDO\UI\GDT_Container;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Headline;
use GDO\UI\GDT_Paragraph;

$accordion = GDT_Accordeon::make()->title('itmb_pricing_h2')->text('itmb_pricing_info');

$links = array(
    'PHP' => ['https://github.com/gizmore/gdo6', '2019-11-09 13:37:42.314', 'My own new PHP Framework'],
    'PHP ' => ['https://mettwitze.gizmore.org/', '2020-02-20 13:37:42.314', 'Demo site with the new framework'],
    'JS' => ['https://wanda.gizmore.org/wanda/credits', '2017-08-23 13:37:42.314', 'A demosite for my old framework / Hacking challenge, JS Scroller'],
    'Ruby' => ['https://github.com/gizmore/purple_ruby', '2014-09-13 13:37:42.314', 'Did some enhancements to ruburple/libpurple'],
    'Ruby ' => ['https://github.com/gizmore/ricer2', '2015-11-28 13:37:42.314', 'A highly modular chatbot in RubyOnRails'],
    'C++' => ['https://github.com/gizmore/yabfdbg', '2008-08-08 13:37:42.314', 'An interactive Brainfuck Debugger'],
    'Java' => ['https://github.com/gizmore/jpk', '2009-01-14 13:37:42.314', 'A Java Texteditor for simple editing and crypto tasks.'],
    'Hacking' => ['https://www.wechall.net/profile/gizmore', '2008-02-14 13:37:42.314', 'My profile on wechall.net, a site from hackers for hackers.'],
    'Hacking ' => ['https://packetstormsecurity.com/files/74743/Ilch-CMS-SQL-Injection.html', '2009-02-06 13:37:42.314', 'One of the very few security holes i reported.'],
    'Web development' => ['http://melanie-gobbo.de', '2012-07-13 13:37:42.314', 'A website i made for a friend with my old framework.'],
);

class Skill extends GDO
{
    public function gdoColumns()
    {
        return [
            GDT_CreatedAt::make('created'),
            GDT_CreatedBy::make('creator'),
        ];
    }
}

echo $accordion->renderCell();
?>
<!-- Begin List -->
<div class="gdt-list">
  <div class="ui-body ui-body-a list-title">
    <h3><?=t('itmb_pricing_skills_h2')?></h3>
  </div>
  <ul data-role="listview">
<?php
foreach ($links as $cat => $data)
{
    list ($url, $date, $info) = $data;
    $skill = Skill::blank([
        'created' => $date,
        'creator' => '2',
    ]);
    $catHeader = GDT_Headline::make()->level(2)->textRaw($cat);
    $li = GDT_ListItem::make()->gdo($skill)->creatorHeader($catHeader, 'day');
    $cont = GDT_Container::make()->vertical();
//     $cont->css('word-break', 'break-all');
//     $contH = GDT_Container::make()->horizontal();
//     $cont->addField(GDT_Headline::make()->level(4)->textRaw($cat));
    $cont->addField(GDT_Link::make()->href($url)->labelRaw(sprintf('(%s)', html($url))));
//     $cont->addField($contH);
    $cont->addField(GDT_Paragraph::make()->textRaw($info));
    $li->content($cont);
    echo $li->renderCell();
}
?>
  </ul>
</div>
<!-- End of List -->
