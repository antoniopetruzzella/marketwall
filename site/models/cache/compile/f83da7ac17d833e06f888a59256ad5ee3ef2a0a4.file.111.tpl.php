<?php /* Smarty version Smarty-3.1.11, created on 2018-06-05 16:45:09
         compiled from "C:\xampp\htdocs\mediagg\images\unit\111\111.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255895b16a1651ef464-90994315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f83da7ac17d833e06f888a59256ad5ee3ef2a0a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mediagg\\images\\unit\\111\\111.tpl',
      1 => 1528209883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255895b16a1651ef464-90994315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b16a165327ca8_11155636',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b16a165327ca8_11155636')) {function content_5b16a165327ca8_11155636($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\unico/components/com_gglms/libraries/smarty/smarty/plugins\\modifier.date_format.php';
?><style type="text/css">
#container #attestato div {
}
</style>
<style>

    #attestato {

        text-align:left;
    }
    h1 {
        color: navy;
        font-family: times;
        font-size: 24pt;

    }
    p {
        color: #000;
        font-family: times;
        font-size: 13pt;

    }
</style>
<div id="container">
    <div id="attestato">

        <div><h1><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/header.png" height="52" /></h1></div>
        <div><h1>ATTESTATO DI PARTECIPAZIONE DOPO PROVA DI VERIFICA</h1></div>
        <div style="text-align: left">Si certifica che <i><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['cognome'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nome'];?>
</strong> </i></div>
        <div style="text-align: left"><b>ha frequentato il corso di formazione “……………….”</b></div>
        <div style="text-align: right"><b>e ha superato con <u>esito positivo</u> la verifica di apprendimento di fine corso</b> </div>
        <div style="text-align: justify; font-size: 9pt;"><i>
              Contenuti: " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
              in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</i></div>


        <div><b>Durata del corso/ Ore di partecipazione: </b>7,5/ 3 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Ente formatore/Docenza</b> Società/Docente</div>

          <div>Il Delegato del Legale Rappresentante</div>
        <div><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/FIRMA_LOMBARDI.jpg" width="165" height="55" /></div>
          <div style="text-align: right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['data_superamento'],"%d/%m/%y");?>
   </div>

    </div>
</div>

<!-- ABILITARE LA SEGUENTE RIGA PER VISUALIZZARE LE VARIABILI -->
<!--<?php echo var_dump($_smarty_tpl->tpl_vars['data']->value);?>
--><?php }} ?>