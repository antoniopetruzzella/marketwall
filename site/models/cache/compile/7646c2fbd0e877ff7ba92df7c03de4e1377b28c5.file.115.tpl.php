<?php /* Smarty version Smarty-3.1.11, created on 2018-06-06 12:50:06
         compiled from "C:\xampp\htdocs\mediagg\contenuti\115\115.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243355b17bc5e6f2644-53985447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7646c2fbd0e877ff7ba92df7c03de4e1377b28c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mediagg\\contenuti\\115\\115.tpl',
      1 => 1521045210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243355b17bc5e6f2644-53985447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b17bc5e8e66b5_45368898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b17bc5e8e66b5_45368898')) {function content_5b17bc5e8e66b5_45368898($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\unico/components/com_gglms/libraries/smarty/smarty/plugins\\modifier.date_format.php';
?><style type="text/css">
#container #attestato div {
}
</style>
<style>
    #container {
        text-align:center;
    }
    #attestato {
        margin: 0 auto;
        text-align:center;
    }
    h1 {
        color: navy;
        font-family: times;
        font-size: 24pt;
        text-align:center;
    }
    p {
        color: #000;
        font-family: times;
        font-size: 13pt;
        text-align:center;
    }
</style>
<div id="container">
    <div id="attestato">
              <div>
            <h1><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/header.png" height="52" /></h1>
            <h3 align="center">Programma nazionale per la formazione continua degli operatori della sanità</h3>
            <p>
                Premesso che la <strong>Commissione Nazionale per la Formazione Continua</strong> ha accreditato 
                il Provider standard <strong>GGALLERY Srl</strong> accreditamento n.39.<br />

                Premesso che il Provider ha organizzato l'evento formativo<strong>

         

                </strong>edizione n. 1 denominato <strong>SICUREZZA IN FARMACIA</strong> e tenutosi dal <strong>  15/09/2017</strong> al<strong> 14/09/2018</strong>,
                avente come obiettivi didattico/formativo generali:<em> Contenuti tecnico-professionali (conoscenze e competenze) specifici di ciascuna professione, di ciascuna specializzazione e di ciascuna attivit&agrave; ultraspecialistica, malattie rare</em>, assegnando all'evento stesso 
            </p>
          <p>N.<strong> 21 </strong>(ventuno) Crediti Formativi E.C.M.
          </p>

          <p>
                Il sottoscritto <strong>PAOLO MACRI'</strong><br />
                Rappresentante Legale del Provider<br />
            <br />
            Verificato l'apprendimento del participante, ATTESTA CHE</p>
            <p>
                il Dott./la Dott.ssa<br />
                <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['cognome'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nome'];?>
</strong><br /> 
                in qualità di farmacista<br />
                nato a <?php echo $_smarty_tpl->tpl_vars['data']->value['Luogodinascita'];?>
  <br />
                il <?php echo $_smarty_tpl->tpl_vars['data']->value['Datadinascita'];?>

                <br />
               <!-- iscritto all'Ordine Professionale di <?php echo $_smarty_tpl->tpl_vars['data']->value['Ordinedi'];?>
 num. 
            <?php echo $_smarty_tpl->tpl_vars['data']->value['NnumeroIscrizione'];?>
                -->
                <br />
              ha acquisito<br />
          N. 21 (ventuno) Crediti formativi per l'anno <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['data_superamento'],"%Y");?>
</p>
            <p>Genova, li <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['data_superamento'],"%d/%m/%y");?>
	</p>
            <p>
                IL RAPPRESENTANTE LEGALE DELL'ORGANIZZATORE<br />
                Dott. Paolo Macrì
            <p><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/FIRMA_PAOLO.jpg" width="165" height="55" /><p></div>
    </div>
</div>

<!-- ABILITARE LA SEGUENTE RIGA PER VISUALIZZARE LE VARIABILI -->
 <!--<?php echo var_dump($_smarty_tpl->tpl_vars['data']->value);?>
 --><?php }} ?>