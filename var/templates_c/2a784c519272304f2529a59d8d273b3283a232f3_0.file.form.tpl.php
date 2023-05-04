<?php
/* Smarty version 3.1.47, created on 2023-02-24 17:20:24
  from '/var/www/html/modules/instantmessaging/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f8a48069aca6_64956523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a784c519272304f2529a59d8d273b3283a232f3' => 
    array (
      0 => '/var/www/html/modules/instantmessaging/themes/default/form.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f8a48069aca6_64956523 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="90%"  border="0" cellpadding="6" align="center">
  <tr>
    <td width="200" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['imess1_img']->value;?>
" align="center">&nbsp;</td>
    <td><table class="tabForm" align="left" width="100%">
          <tr>
            <td><b>Spark</b><br>
              <?php echo $_smarty_tpl->tpl_vars['imess1_software_description']->value;?>
<br/> 
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manuf_description']->value;?>
</b><br>
              <i>"<?php echo $_smarty_tpl->tpl_vars['imess1_manufacturer_description']->value;?>
"</i><br>
              <b><?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
: </b><a href="http://www.igniterealtime.org/downloads/index.jsp#spark">http://www.igniterealtime.org/downloads/index.jsp#spark</a><br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manufacturer']->value;?>
:</b> <a href="http://www.igniterealtime.org">Ignite Realtime</a><br>
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
<?php }
}
