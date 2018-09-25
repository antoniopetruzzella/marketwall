<?php /* Smarty version Smarty-3.1.11, created on 2018-06-14 10:40:39
         compiled from "C:\xampp\htdocs\mediagg\contenuti\50\50.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21605b17b6e95f4d82-71448743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4284e2bac250a88e07cc8093ef811321bd62742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mediagg\\contenuti\\50\\50.tpl',
      1 => 1528965510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21605b17b6e95f4d82-71448743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b17b6e97c1cf4_81818160',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b17b6e97c1cf4_81818160')) {function content_5b17b6e97c1cf4_81818160($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\unico/components/com_gglms/libraries/smarty/smarty/plugins\\modifier.date_format.php';
?>
<style type="text/css">

    #container #attestato div {
    }

</style>
<style>

    #attestato {
        position: absolute;
        top:15%;
        text-align:left;
        width: 80%;
    }
    h1 {
        color: navy;
        font-family: times;
        font-size: 24pt;

    }
    p {
        color: #000;
        font-family: times;
        font-size: 9pt;
        padding: 5pt;
    }






</style>

<table>
    <tr><td style="width: 95%" valign="top">
    <table>
    <tr ><td style="width: 75%"></td><td style="width: 25%"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/logo.jpg" height="52" /></td></tr>
    <tr><td style="width: 100%"><p><h1>

                <!-- BLOCCO TESTO MODIFICABILE-->

                ATTESTATO DI PARTECIPAZIONE DOPO PROVA DI VERIFICA

                <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    </h1></p></td></tr>
    <tr><td style="width: 75%;"><p>

                <!-- BLOCCO TESTO MODIFICABILE-->

                Si certifica che

                <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    <i><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['cognome'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nome'];?>
</strong> </i></p></td><td style="width: 25%"></td></tr>
    <tr><td style="width: 75%"><b><p>

                <!-- BLOCCO TESTO MODIFICABILE-->

                ha frequentato il corso di formazione “……………….”

                <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    </p></b></td><td style="width: 25%"></td></tr>
    <tr><td style="width: 95%;" align="right"><p><b>

               <!-- BLOCCO TESTO MODIFICABILE-->

                e ha superato con

               <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    <u><!-- INIZIO BLOCCO SOTTOLINEATO-->

               <!-- BLOCCO TESTO MODIFICABILE-->

               esito positivo

               <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    </u><!--FINE BLOCCO SOTTOLINEATO-->

               <!-- BLOCCO TESTO MODIFICABILE-->

              la verifica di apprendimento di fine corso

              <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    </b></p></td></tr>


    <tr><td style="width: 100%"><h4><i><p>

             <!-- BLOCCO TESTO MODIFICABILE-->
                   Contenuti: " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                   in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p></i></h4></td></tr>

            <!-- FINE BLOCCO TITOLO MODIFICABILE-->
    <tr><td style="width: 50%;" align="left">
    <b><!--INZIO BLOCCO GRASSETTO-->
            <!-- BLOCCO TESTO MODIFICABILE-->

                Durata del corso/ Ore di partecipazione:

        <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    </b><!-- FINE BLOCCO GRASSETTO-->

            <!-- BLOCCO TESTO MODIFICABILE-->

                7,5/ 3

           <!-- FINE BLOCCO TITOLO MODIFICABILE-->


    </td><td style="width: 50%;padding: 10px;" align="right">

    <b><!--INZIO BLOCCO GRASSETTO-->

            <!-- BLOCCO TESTO MODIFICABILE-->

                 Ente formatore/Docenza

            <!-- FINE BLOCCO TITOLO MODIFICABILE-->

    </b><!-- FINE BLOCCO GRASSETTO-->

            <!-- BLOCCO TESTO MODIFICABILE-->

                 Società/Docente

            <!-- FINE BLOCCO TITOLO MODIFICABILE-->


    </td></tr>

    <tr><td style="width: 50%"><table>
    <tr><td style="width: 75%;"><p></p></td><td  style="width: 25%"></td></tr>
    <tr><td style="width: 75%;"><p>

            <!-- BLOCCO TESTO MODIFICABILE-->

                Il Delegato del Legale Rappresentante

            <!-- FINE BLOCCO TITOLO MODIFICABILE-->

            </p></td><td  style="width: 25%"></td></tr>
    <tr><td style="width: 66%;"><img id="firma" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/FIRMA_LOMBARDI.jpg" width="165" height="55" /></td></tr>
    </table></td><td style="width: 50%" align="right"><img id="filigrana" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/filigrana.jpg" height="200px"/></td></tr>
    <tr><td style="width: 75%;"></td><td style="width: 25%"> Data:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['data_superamento'],"%d/%m/%y");?>
</td></tr>
    <tr><td style="width: 25%;"><img id="accredia" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/accredia.jpg" height="27px" /><img id="certificazione_qualita" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/certificazione_qualita.jpg" height="30px"/>
    </td><td style="width: 75%"></td></tr>
    </table>
    </td><td style="width: 5%"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['content_path'];?>
/linea_a_destra.jpg" height="300px"/></td></tr>
 </table>



<!-- ABILITARE LA SEGUENTE RIGA PER VISUALIZZARE LE VARIABILI -->
<!--<?php echo var_dump($_smarty_tpl->tpl_vars['data']->value);?>
-->

<?php }} ?>