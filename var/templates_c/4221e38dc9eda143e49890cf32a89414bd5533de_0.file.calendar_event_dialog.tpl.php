<?php
/* Smarty version 3.1.47, created on 2023-02-24 18:02:58
  from '/var/www/html/modules/calendar/themes/default/calendar_event_dialog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f8ae7ac6cbf2_40344423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4221e38dc9eda143e49890cf32a89414bd5533de' => 
    array (
      0 => '/var/www/html/modules/calendar/themes/default/calendar_event_dialog.tpl',
      1 => 1674451779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f8ae7ac6cbf2_40344423 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" style="padding:10px;">
    <tr class="letra12" height="40px" >
        <td align="left" width="90px"><b><?php echo $_smarty_tpl->tpl_vars['event']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['event']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12" id="desc">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['description']->value['LABEL'];?>
: </b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['description']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12" height="40px">
        <td align="left" width="90px"><b><?php echo $_smarty_tpl->tpl_vars['date']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left" width="175px" colspan=2 nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['date']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left" width="90px"><b><?php echo $_smarty_tpl->tpl_vars['to']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left" width="175px" colspan=2 nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['to']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12" height="40px">
        <td align="left" width="90px"><b><?php echo $_smarty_tpl->tpl_vars['Color']->value;?>
: <span  class="required">*</span></b></td>
        <td align="left" width="175px" colspan=2 nowrap="nowrap">
<!-- Start of Ed Color Picker -->
<span id="colorSelector" style="padding-top: 11px; display: inline;">
</span>
<!-- End of Ed Color Picker -->
        </td>
    </tr>
    <tr id="rowReminderEvent">
        <td align="left" colspan="3">
            <div id="divReminder">
                <input id="CheckBoxRemi" type="checkbox" class="CheckBoxClass" />
                <label id="lblCheckBoxRemi" for="CheckBoxRemi" class="CheckBoxLabelClass"><?php echo $_smarty_tpl->tpl_vars['Call_alert']->value;?>
</label>
            </div>
        </td>
    </tr>
    <tr class="letra12 remin"  colspan="3">
        <td align="right" colspan="3"><div id="label_call"></td>
    </tr>
    <tr class="letra12 remin" height="40px" id="check">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['call_to']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['call_to']->value['INPUT'];?>
&nbsp;&nbsp;
            <span id="add_phone"><a href="#"><?php echo $_smarty_tpl->tpl_vars['add_phone']->value;?>
</a></span>
        </td>
    </tr>
    <tr class="letra12 remin subElemento" height="40px">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['ReminderTime']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['ReminderTime']->value['INPUT'];?>
&nbsp;&nbsp;</td>
    </tr>
    <tr class="letra12 remin subElemento" height="40px">
        <td align="left" colspan="3">
            <b><?php echo $_smarty_tpl->tpl_vars['tts']->value['LABEL'];?>
: <span  class="required">*</span>&nbsp;&nbsp;&nbsp;</b>
            <b><span class="counter">140</span></b>
            <a id="listenTTS" style="cursor: pointer;">
                <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/speaker.png" style="position: relative; right: 0px;" alt="<?php echo $_smarty_tpl->tpl_vars['Listen']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['Listen_here']->value;?>
"/>
            </a>
            <div><?php echo $_smarty_tpl->tpl_vars['tts']->value['INPUT'];?>
</div>
        </td>
    </tr>
    <tr id="rowNotificateEmail">
        <td align="left" colspan="3">
            <div id="divNotification">
                <input id="CheckBoxNoti" type="checkbox" class="CheckBoxClass" />
                <label id="lblCheckBoxNoti" for="CheckBoxNoti" class="CheckBoxLabelClass"><?php echo $_smarty_tpl->tpl_vars['Notification_Alert']->value;?>
</label>
            </div>
        </td>
    </tr>
    <tr class="letra12 notif" id="notification_email">
        <td align="left" colspan="3">
            <div>
                <b id="notification_email_label"><?php echo $_smarty_tpl->tpl_vars['notification_email']->value;?>
: <span  class="required">*</span></b>
            </div>
            <div class="ui-widget">
                <textarea id="tags" cols="48px" rows="2" style="margin:6px; color: #333333; width: 365px; height: 36px; "></textarea>
            </div>
        </td>
    </tr>
</table>
<div class="letra12 notif" id="email_to" align="center">
    <table id="grilla" width="90%" border="0">
	    <thead>
	       <tr>
	           <td>&nbsp;</td>
	           <td class="letra12" align="center" style="color:#666666; font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['LBL_CONTACT_NAME']->value;?>
</td>
               <td class="letra12" align="center" style="color:#666666; font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['LBL_CONTACT_EMAIL']->value;?>
</td>
               <td>&nbsp;</td>
	       </tr>
	    </thead>
	    <tbody>
	    </tbody>
    </table>
</div>
<?php echo '<script'; ?>
>
   $('#colorSelector').ed_colorpicker();
<?php echo '</script'; ?>
>
<?php }
}
