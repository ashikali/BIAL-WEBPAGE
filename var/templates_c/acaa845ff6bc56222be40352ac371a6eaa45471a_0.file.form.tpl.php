<?php
/* Smarty version 3.1.47, created on 2023-03-06 13:57:02
  from '/var/www/html/modules/callcenter_config/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6405a3d6c0a323_88059487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acaa845ff6bc56222be40352ac371a6eaa45471a' => 
    array (
      0 => '/var/www/html/modules/callcenter_config/themes/default/form.tpl',
      1 => 1674451781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6405a3d6c0a323_88059487 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
<?php if (!$_smarty_tpl->tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']->value) {?>
    <tr class="moduleTitle">
        <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
        <td></td>
    </tr>
<?php }?>    
    <tr class="letra12">
        <td align="left"><input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
"></td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>
<table class="tabForm" width="100%"><tr>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $_smarty_tpl->tpl_vars['ASTERISK_CONNECT_PARAM']->value;?>
</b></td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_asthost']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_asthost']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astuser']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astuser']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_1']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_1']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_2']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_2']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_duracion_sesion']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_duracion_sesion']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_forzar_sobrecolocar']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_forzar_sobrecolocar']->value['INPUT'];?>
</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $_smarty_tpl->tpl_vars['DIALER_PARAM']->value;?>
</b></td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_llamada_corta']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_llamada_corta']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_tiempo_contestar']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_tiempo_contestar']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_qos']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_qos']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_originate']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_originate']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_inactivity']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_inactivity']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_debug']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_debug']->value['LABEL'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_allevents']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_allevents']->value['LABEL'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_overcommit']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_overcommit']->value['LABEL'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_predictivo']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_predictivo']->value['LABEL'];?>
</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $_smarty_tpl->tpl_vars['DIALER_STATUS_MESG']->value;?>
</b></td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['CURRENT_STATUS']->value;?>
: <b><?php echo $_smarty_tpl->tpl_vars['DIALER_STATUS']->value;?>
</b></td></tr>
<tr class="letra12"><td><input class="button" type="submit" name="dialer_action" value="<?php echo $_smarty_tpl->tpl_vars['DIALER_ACTION']->value;?>
"/></td></tr>
</table>
</td>
</tr></table>
<?php }
}
