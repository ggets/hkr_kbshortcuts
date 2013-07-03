<?php
/* by hkr */
class hkr_kbshortcuts extends rcube_plugin {
  function init() {
    $this->include_stylesheet('hkr_kbshortcuts.css');
    $this->include_script('hkr_kbshortcuts.js');
    $this->add_hook('template_container', array($this, 'html'));
    $this->add_texts('localization', true);
  }
  function html($p) {
    if ($p['name']=="listcontrols") {
      $rcm=rcmail::get_instance();
      $this->load_config();
      $c = "";
      $c .= "<a id=\"hkr_kbshortcuts_btn\" href=\"#\" title=\"{$this->gettext("show")} {$this->gettext("quicklist")}\" onclick=\"return kbshortcuts_list();\">{$this->gettext("show")}</a>\n";
      $c .= "<div id=\"kbshortcuts_list\">";
      $c .= "<div><h4>".$this->gettext("mainkbs")."</h4>";
      $c .= "<div class=\"shortcut_key\">&lt;CTRL&gt;+&lt;SHIFT&gt;+B</div> ".$this->gettext("forwardmessage")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">j</div> ".$this->gettext("previousmessages")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">k</div> ".$this->gettext("nextmessages")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">p</div> ".$this->gettext("printmessage")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">r</div> ".$this->gettext("replytomessage")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">R</div> ".$this->gettext("replytoallmessage")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\"> </div> <br class=\"clear\" />";
      $c .= "</div>";
      $c .= "<div><h4>".$this->gettext("fnkeys")."</h4>";
      $c .= "<div class=\"shortcut_key\">F1</div> ".$this->gettext("help")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">F3</div> ".$this->gettext("quickfind")."<br class=\"clear\" />";
      $c .= "<div class=\"shortcut_key\">F5</div> ".$this->gettext("refresh")."<br class=\"clear\" />";
      $c .= "<div class='shortcut_key'> </div> <br class='clear' />";
      $c .= "</div>";
      $c .= "<div><h4>".$this->gettext("messagesdisplaying")."</h4>";
      $c .= "<div class='shortcut_key'>d</div> ".$this->gettext('deletemessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>c</div> ".$this->gettext('compose')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>f</div> ".$this->gettext('forwardmessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>j</div> ".$this->gettext('previousmessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>k</div> ".$this->gettext('nextmessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>p</div> ".$this->gettext('printmessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>r</div> ".$this->gettext('replytomessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'>R</div> ".$this->gettext('replytoallmessage')."<br class='clear' />";
      $c .= "<div class='shortcut_key'> </div> <br class='clear' />";
      $c .= "</div></div>";
      $p['content']=$c.$p['content'];
    }
    return $p;
  }
}
?>
