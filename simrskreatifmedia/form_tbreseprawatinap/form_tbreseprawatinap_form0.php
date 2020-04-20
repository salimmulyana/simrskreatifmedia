<?php
class form_tbreseprawatinap_form extends form_tbreseprawatinap_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Resep Inap"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Resep Inap"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
header("X-XSS-Protection: 1; mode=block");
?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/calculator/jquery.calculator.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/calculator/jquery.plugin.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/calculator/jquery.calculator.js"></SCRIPT>
<?php
switch ($_SESSION['scriptcase']['str_lang']) {
        case 'ca':
        case 'da':
        case 'de':
        case 'es':
        case 'fr':
        case 'hr':
        case 'it':
        case 'nl':
        case 'no':
        case 'pl':
        case 'ru':
//        case 'sr':
        case 'sl':
        case 'uk':
                $tmpCalcLocale = $_SESSION['scriptcase']['str_lang'];
                break;
        case 'pt_br':
                $tmpCalcLocale = 'pt-BR';
                break;
        case 'tr':
                $tmpCalcLocale = 'ar';
                break;
        case 'zh_cn':
                $tmpCalcLocale = 'zh-CN';
                break;
//        case 'zh_hk':
//                $tmpCalcLocale = 'zh-TW';
//                break;
        default:
                $tmpCalcLocale = '';
                break;
}
if ('' != $tmpCalcLocale) {
        echo " <SCRIPT type=\"text/javascript\" src=\"{$this->Ini->path_prod}/third/jquery_plugin/calculator/jquery.calculator-$tmpCalcLocale.js\"></SCRIPT>\r\n";
}
?>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_desc ?>'], 
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_asc ?>']{opacity:1!important;} 
   .scFormLabelOddMult a img{opacity:0;transition:all .2s;} 
   .scFormLabelOddMult:HOVER a img{opacity:1;transition:all .2s;} 
 </style>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_trandate_ button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<?php
$miniCalculatorFA = $this->jqueryFAFile('calculator');
if ('' != $miniCalculatorFA) {
?>
<style type="text/css">
.css_read_off_diskon_ button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
 <style type="text/css">
  .scSpin_jumlah__obj {
   border: 0 !important;
   margin: 0 20px 0 0 !important;
  }
 </style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_tbreseprawatinap/form_tbreseprawatinap_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_tbreseprawatinap_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}

 function nm_field_disabled(Fields, Opt, Seq, Opcao) {
  if (Opcao != null) {
      opcao = Opcao;
  }
  else {
      opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  }
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     ini = 1;
     xx = document.F1.sc_contr_vert.value;
     if (Seq != null) 
     {
         ini = parseInt(Seq);
         xx  = ini + 1;
     }
     if (F_name == "biaya_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "biaya_" + ii;
            $('input[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('input[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('input[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
  }
 } // nm_field_disabled
 function nm_field_disabled_reset() {
  for (var i = 0; i < iAjaxNewLine; i++) {
    nm_field_disabled("biaya_=enabled", "", i);
  }
 } // nm_field_disabled_reset
<?php

include_once('form_tbreseprawatinap_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_tbreseprawatinap_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_tbreseprawatinap'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tbreseprawatinap'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="100%">
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-1", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-3", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-4", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterarsel", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-5", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluirsel", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = ($this->nmgp_botoes['sc_btn_0'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "sc_btn_0", "scBtnFn_sc_btn_0()", "scBtnFn_sc_btn_0()", "sc_sc_btn_0_top", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['id_']))
   {
       $this->nmgp_cmp_hidden['id_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['trancode_']))
   {
       $this->nmgp_cmp_hidden['trancode_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
$labelRowCount = 0;
?>
   <tr class="sc-ui-header-row" id="sc-id-fixed-headers-row-<?php echo $labelRowCount++ ?>">
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && ($this->nmgp_botoes['delete'] == "on" || $this->nmgp_botoes['update'] == "on")) { $Col_span = " colspan=2"; }
    if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['trancode_']) && $this->nmgp_cmp_hidden['trancode_'] == 'off') { $sStyleHidden_trancode_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['trancode_']) || $this->nmgp_cmp_hidden['trancode_'] == 'on') {
      if (!isset($this->nm_new_label['trancode_'])) {
          $this->nm_new_label['trancode_'] = "Kode Transaksi"; } ?>

    <TD class="scFormLabelOddMult css_trancode__label" id="hidden_field_label_trancode_" style="<?php echo $sStyleHidden_trancode_; ?>" > <?php echo $this->nm_new_label['trancode_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['item_']) && $this->nmgp_cmp_hidden['item_'] == 'off') { $sStyleHidden_item_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['item_']) || $this->nmgp_cmp_hidden['item_'] == 'on') {
      if (!isset($this->nm_new_label['item_'])) {
          $this->nm_new_label['item_'] = "Item"; } ?>

    <TD class="scFormLabelOddMult css_item__label" id="hidden_field_label_item_" style="<?php echo $sStyleHidden_item_; ?>" > <?php echo $this->nm_new_label['item_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['satuan_']) && $this->nmgp_cmp_hidden['satuan_'] == 'off') { $sStyleHidden_satuan_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['satuan_']) || $this->nmgp_cmp_hidden['satuan_'] == 'on') {
      if (!isset($this->nm_new_label['satuan_'])) {
          $this->nm_new_label['satuan_'] = "Satuan"; } ?>

    <TD class="scFormLabelOddMult css_satuan__label" id="hidden_field_label_satuan_" style="<?php echo $sStyleHidden_satuan_; ?>" > <?php echo $this->nm_new_label['satuan_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['stok_']) && $this->nmgp_cmp_hidden['stok_'] == 'off') { $sStyleHidden_stok_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['stok_']) || $this->nmgp_cmp_hidden['stok_'] == 'on') {
      if (!isset($this->nm_new_label['stok_'])) {
          $this->nm_new_label['stok_'] = "stok"; } ?>

    <TD class="scFormLabelOddMult css_stok__label" id="hidden_field_label_stok_" style="<?php echo $sStyleHidden_stok_; ?>" > <?php echo $this->nm_new_label['stok_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['jumlah_']) && $this->nmgp_cmp_hidden['jumlah_'] == 'off') { $sStyleHidden_jumlah_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['jumlah_']) || $this->nmgp_cmp_hidden['jumlah_'] == 'on') {
      if (!isset($this->nm_new_label['jumlah_'])) {
          $this->nm_new_label['jumlah_'] = "Jumlah"; } ?>

    <TD class="scFormLabelOddMult css_jumlah__label" id="hidden_field_label_jumlah_" style="<?php echo $sStyleHidden_jumlah_; ?>" > <?php echo $this->nm_new_label['jumlah_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['signa_']) && $this->nmgp_cmp_hidden['signa_'] == 'off') { $sStyleHidden_signa_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['signa_']) || $this->nmgp_cmp_hidden['signa_'] == 'on') {
      if (!isset($this->nm_new_label['signa_'])) {
          $this->nm_new_label['signa_'] = "Signa"; } ?>

    <TD class="scFormLabelOddMult css_signa__label" id="hidden_field_label_signa_" style="<?php echo $sStyleHidden_signa_; ?>" > <?php echo $this->nm_new_label['signa_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['jenisaturanpakai_']) && $this->nmgp_cmp_hidden['jenisaturanpakai_'] == 'off') { $sStyleHidden_jenisaturanpakai_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['jenisaturanpakai_']) || $this->nmgp_cmp_hidden['jenisaturanpakai_'] == 'on') {
      if (!isset($this->nm_new_label['jenisaturanpakai_'])) {
          $this->nm_new_label['jenisaturanpakai_'] = "Signa (Aturan Pakai)"; } ?>

    <TD class="scFormLabelOddMult css_jenisaturanpakai__label" id="hidden_field_label_jenisaturanpakai_" style="<?php echo $sStyleHidden_jenisaturanpakai_; ?>" > <?php echo $this->nm_new_label['jenisaturanpakai_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['biaya_']) && $this->nmgp_cmp_hidden['biaya_'] == 'off') { $sStyleHidden_biaya_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['biaya_']) || $this->nmgp_cmp_hidden['biaya_'] == 'on') {
      if (!isset($this->nm_new_label['biaya_'])) {
          $this->nm_new_label['biaya_'] = "Biaya"; } ?>

    <TD class="scFormLabelOddMult css_biaya__label" id="hidden_field_label_biaya_" style="<?php echo $sStyleHidden_biaya_; ?>" > <?php echo $this->nm_new_label['biaya_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['diskon_']) && $this->nmgp_cmp_hidden['diskon_'] == 'off') { $sStyleHidden_diskon_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['diskon_']) || $this->nmgp_cmp_hidden['diskon_'] == 'on') {
      if (!isset($this->nm_new_label['diskon_'])) {
          $this->nm_new_label['diskon_'] = "Diskon"; } ?>

    <TD class="scFormLabelOddMult css_diskon__label" id="hidden_field_label_diskon_" style="<?php echo $sStyleHidden_diskon_; ?>" > <?php echo $this->nm_new_label['diskon_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['trandate_']) && $this->nmgp_cmp_hidden['trandate_'] == 'off') { $sStyleHidden_trandate_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['trandate_']) || $this->nmgp_cmp_hidden['trandate_'] == 'on') {
      if (!isset($this->nm_new_label['trandate_'])) {
          $this->nm_new_label['trandate_'] = "Tgl Transaksi"; } ?>

    <TD class="scFormLabelOddMult css_trandate__label" id="hidden_field_label_trandate_" style="<?php echo $sStyleHidden_trandate_; ?>" > <?php echo $this->nm_new_label['trandate_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['strukresep_']) && $this->nmgp_cmp_hidden['strukresep_'] == 'off') { $sStyleHidden_strukresep_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['strukresep_']) || $this->nmgp_cmp_hidden['strukresep_'] == 'on') {
      if (!isset($this->nm_new_label['strukresep_'])) {
          $this->nm_new_label['strukresep_'] = "Struk Resep"; } ?>

    <TD class="scFormLabelOddMult css_strukresep__label" id="hidden_field_label_strukresep_" style="<?php echo $sStyleHidden_strukresep_; ?>" > <?php echo $this->nm_new_label['strukresep_'] ?> </TD>
   <?php } ?>

   <?php if ((!isset($this->nmgp_cmp_hidden['id_']) || $this->nmgp_cmp_hidden['id_'] == 'on') && ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir"))) { 
      if (!isset($this->nm_new_label['id_'])) {
          $this->nm_new_label['id_'] = "Id"; } ?>

    <TD class="scFormLabelOddMult css_id__label" id="hidden_field_label_id_" style="<?php echo $sStyleHidden_id_; ?>" > <?php echo $this->nm_new_label['id_'] ?> </TD>
   <?php }?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_tbreseprawatinap);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_tbreseprawatinap = $this->form_vert_form_tbreseprawatinap;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_tbreseprawatinap))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_']))
           {
               $this->nmgp_cmp_readonly['id_'] = 'on';
           }
   foreach ($this->form_vert_form_tbreseprawatinap as $sc_seq_vert => $sc_lixo)
   {
       $this->loadRecordState($sc_seq_vert);
       $this->kelas_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['kelas_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['trancode_'] = true;
           $this->nmgp_cmp_readonly['item_'] = true;
           $this->nmgp_cmp_readonly['satuan_'] = true;
           $this->nmgp_cmp_readonly['stok_'] = true;
           $this->nmgp_cmp_readonly['jumlah_'] = true;
           $this->nmgp_cmp_readonly['signa_'] = true;
           $this->nmgp_cmp_readonly['jenisaturanpakai_'] = true;
           $this->nmgp_cmp_readonly['biaya_'] = true;
           $this->nmgp_cmp_readonly['diskon_'] = true;
           $this->nmgp_cmp_readonly['trandate_'] = true;
           $this->nmgp_cmp_readonly['strukresep_'] = true;
           $this->nmgp_cmp_readonly['id_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['trancode_']) || $this->nmgp_cmp_readonly['trancode_'] != "on") {$this->nmgp_cmp_readonly['trancode_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['item_']) || $this->nmgp_cmp_readonly['item_'] != "on") {$this->nmgp_cmp_readonly['item_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['satuan_']) || $this->nmgp_cmp_readonly['satuan_'] != "on") {$this->nmgp_cmp_readonly['satuan_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['stok_']) || $this->nmgp_cmp_readonly['stok_'] != "on") {$this->nmgp_cmp_readonly['stok_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['jumlah_']) || $this->nmgp_cmp_readonly['jumlah_'] != "on") {$this->nmgp_cmp_readonly['jumlah_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['signa_']) || $this->nmgp_cmp_readonly['signa_'] != "on") {$this->nmgp_cmp_readonly['signa_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['jenisaturanpakai_']) || $this->nmgp_cmp_readonly['jenisaturanpakai_'] != "on") {$this->nmgp_cmp_readonly['jenisaturanpakai_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['biaya_']) || $this->nmgp_cmp_readonly['biaya_'] != "on") {$this->nmgp_cmp_readonly['biaya_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['diskon_']) || $this->nmgp_cmp_readonly['diskon_'] != "on") {$this->nmgp_cmp_readonly['diskon_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['trandate_']) || $this->nmgp_cmp_readonly['trandate_'] != "on") {$this->nmgp_cmp_readonly['trandate_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['strukresep_']) || $this->nmgp_cmp_readonly['strukresep_'] != "on") {$this->nmgp_cmp_readonly['strukresep_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['id_']) || $this->nmgp_cmp_readonly['id_'] != "on") {$this->nmgp_cmp_readonly['id_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->trancode_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['trancode_']; 
       $trancode_ = $this->trancode_; 
       if (!isset($this->nmgp_cmp_hidden['trancode_']))
       {
           $this->nmgp_cmp_hidden['trancode_'] = 'off';
       }
       $sStyleHidden_trancode_ = '';
       if (isset($sCheckRead_trancode_))
       {
           unset($sCheckRead_trancode_);
       }
       if (isset($this->nmgp_cmp_readonly['trancode_']))
       {
           $sCheckRead_trancode_ = $this->nmgp_cmp_readonly['trancode_'];
       }
       if (isset($this->nmgp_cmp_hidden['trancode_']) && $this->nmgp_cmp_hidden['trancode_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['trancode_']);
           $sStyleHidden_trancode_ = 'display: none;';
       }
       $bTestReadOnly_trancode_ = true;
       $sStyleReadLab_trancode_ = 'display: none;';
       $sStyleReadInp_trancode_ = '';
       if (isset($this->nmgp_cmp_readonly['trancode_']) && $this->nmgp_cmp_readonly['trancode_'] == 'on')
       {
           $bTestReadOnly_trancode_ = false;
           unset($this->nmgp_cmp_readonly['trancode_']);
           $sStyleReadLab_trancode_ = '';
           $sStyleReadInp_trancode_ = 'display: none;';
       }
       $this->item_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['item_']; 
       $item_ = $this->item_; 
       $sStyleHidden_item_ = '';
       if (isset($sCheckRead_item_))
       {
           unset($sCheckRead_item_);
       }
       if (isset($this->nmgp_cmp_readonly['item_']))
       {
           $sCheckRead_item_ = $this->nmgp_cmp_readonly['item_'];
       }
       if (isset($this->nmgp_cmp_hidden['item_']) && $this->nmgp_cmp_hidden['item_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['item_']);
           $sStyleHidden_item_ = 'display: none;';
       }
       $bTestReadOnly_item_ = true;
       $sStyleReadLab_item_ = 'display: none;';
       $sStyleReadInp_item_ = '';
       if (isset($this->nmgp_cmp_readonly['item_']) && $this->nmgp_cmp_readonly['item_'] == 'on')
       {
           $bTestReadOnly_item_ = false;
           unset($this->nmgp_cmp_readonly['item_']);
           $sStyleReadLab_item_ = '';
           $sStyleReadInp_item_ = 'display: none;';
       }
       $this->satuan_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['satuan_']; 
       $satuan_ = $this->satuan_; 
       $sStyleHidden_satuan_ = '';
       if (isset($sCheckRead_satuan_))
       {
           unset($sCheckRead_satuan_);
       }
       if (isset($this->nmgp_cmp_readonly['satuan_']))
       {
           $sCheckRead_satuan_ = $this->nmgp_cmp_readonly['satuan_'];
       }
       if (isset($this->nmgp_cmp_hidden['satuan_']) && $this->nmgp_cmp_hidden['satuan_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['satuan_']);
           $sStyleHidden_satuan_ = 'display: none;';
       }
       $bTestReadOnly_satuan_ = true;
       $sStyleReadLab_satuan_ = 'display: none;';
       $sStyleReadInp_satuan_ = '';
       if (isset($this->nmgp_cmp_readonly['satuan_']) && $this->nmgp_cmp_readonly['satuan_'] == 'on')
       {
           $bTestReadOnly_satuan_ = false;
           unset($this->nmgp_cmp_readonly['satuan_']);
           $sStyleReadLab_satuan_ = '';
           $sStyleReadInp_satuan_ = 'display: none;';
       }
       $this->stok_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['stok_']; 
       $stok_ = $this->stok_; 
       $sStyleHidden_stok_ = '';
       if (isset($sCheckRead_stok_))
       {
           unset($sCheckRead_stok_);
       }
       if (isset($this->nmgp_cmp_readonly['stok_']))
       {
           $sCheckRead_stok_ = $this->nmgp_cmp_readonly['stok_'];
       }
       if (isset($this->nmgp_cmp_hidden['stok_']) && $this->nmgp_cmp_hidden['stok_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['stok_']);
           $sStyleHidden_stok_ = 'display: none;';
       }
       $bTestReadOnly_stok_ = true;
       $sStyleReadLab_stok_ = 'display: none;';
       $sStyleReadInp_stok_ = '';
       if (isset($this->nmgp_cmp_readonly['stok_']) && $this->nmgp_cmp_readonly['stok_'] == 'on')
       {
           $bTestReadOnly_stok_ = false;
           unset($this->nmgp_cmp_readonly['stok_']);
           $sStyleReadLab_stok_ = '';
           $sStyleReadInp_stok_ = 'display: none;';
       }
       $this->jumlah_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['jumlah_']; 
       $jumlah_ = $this->jumlah_; 
       $sStyleHidden_jumlah_ = '';
       if (isset($sCheckRead_jumlah_))
       {
           unset($sCheckRead_jumlah_);
       }
       if (isset($this->nmgp_cmp_readonly['jumlah_']))
       {
           $sCheckRead_jumlah_ = $this->nmgp_cmp_readonly['jumlah_'];
       }
       if (isset($this->nmgp_cmp_hidden['jumlah_']) && $this->nmgp_cmp_hidden['jumlah_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['jumlah_']);
           $sStyleHidden_jumlah_ = 'display: none;';
       }
       $bTestReadOnly_jumlah_ = true;
       $sStyleReadLab_jumlah_ = 'display: none;';
       $sStyleReadInp_jumlah_ = '';
       if (isset($this->nmgp_cmp_readonly['jumlah_']) && $this->nmgp_cmp_readonly['jumlah_'] == 'on')
       {
           $bTestReadOnly_jumlah_ = false;
           unset($this->nmgp_cmp_readonly['jumlah_']);
           $sStyleReadLab_jumlah_ = '';
           $sStyleReadInp_jumlah_ = 'display: none;';
       }
       $this->signa_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['signa_']; 
       $signa_ = $this->signa_; 
       $sStyleHidden_signa_ = '';
       if (isset($sCheckRead_signa_))
       {
           unset($sCheckRead_signa_);
       }
       if (isset($this->nmgp_cmp_readonly['signa_']))
       {
           $sCheckRead_signa_ = $this->nmgp_cmp_readonly['signa_'];
       }
       if (isset($this->nmgp_cmp_hidden['signa_']) && $this->nmgp_cmp_hidden['signa_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['signa_']);
           $sStyleHidden_signa_ = 'display: none;';
       }
       $bTestReadOnly_signa_ = true;
       $sStyleReadLab_signa_ = 'display: none;';
       $sStyleReadInp_signa_ = '';
       if (isset($this->nmgp_cmp_readonly['signa_']) && $this->nmgp_cmp_readonly['signa_'] == 'on')
       {
           $bTestReadOnly_signa_ = false;
           unset($this->nmgp_cmp_readonly['signa_']);
           $sStyleReadLab_signa_ = '';
           $sStyleReadInp_signa_ = 'display: none;';
       }
       $this->jenisaturanpakai_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['jenisaturanpakai_']; 
       $jenisaturanpakai_ = $this->jenisaturanpakai_; 
       $sStyleHidden_jenisaturanpakai_ = '';
       if (isset($sCheckRead_jenisaturanpakai_))
       {
           unset($sCheckRead_jenisaturanpakai_);
       }
       if (isset($this->nmgp_cmp_readonly['jenisaturanpakai_']))
       {
           $sCheckRead_jenisaturanpakai_ = $this->nmgp_cmp_readonly['jenisaturanpakai_'];
       }
       if (isset($this->nmgp_cmp_hidden['jenisaturanpakai_']) && $this->nmgp_cmp_hidden['jenisaturanpakai_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['jenisaturanpakai_']);
           $sStyleHidden_jenisaturanpakai_ = 'display: none;';
       }
       $bTestReadOnly_jenisaturanpakai_ = true;
       $sStyleReadLab_jenisaturanpakai_ = 'display: none;';
       $sStyleReadInp_jenisaturanpakai_ = '';
       if (isset($this->nmgp_cmp_readonly['jenisaturanpakai_']) && $this->nmgp_cmp_readonly['jenisaturanpakai_'] == 'on')
       {
           $bTestReadOnly_jenisaturanpakai_ = false;
           unset($this->nmgp_cmp_readonly['jenisaturanpakai_']);
           $sStyleReadLab_jenisaturanpakai_ = '';
           $sStyleReadInp_jenisaturanpakai_ = 'display: none;';
       }
       $this->biaya_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['biaya_']; 
       $biaya_ = $this->biaya_; 
       $sStyleHidden_biaya_ = '';
       if (isset($sCheckRead_biaya_))
       {
           unset($sCheckRead_biaya_);
       }
       if (isset($this->nmgp_cmp_readonly['biaya_']))
       {
           $sCheckRead_biaya_ = $this->nmgp_cmp_readonly['biaya_'];
       }
       if (isset($this->nmgp_cmp_hidden['biaya_']) && $this->nmgp_cmp_hidden['biaya_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['biaya_']);
           $sStyleHidden_biaya_ = 'display: none;';
       }
       $bTestReadOnly_biaya_ = true;
       $sStyleReadLab_biaya_ = 'display: none;';
       $sStyleReadInp_biaya_ = '';
       if (isset($this->nmgp_cmp_readonly['biaya_']) && $this->nmgp_cmp_readonly['biaya_'] == 'on')
       {
           $bTestReadOnly_biaya_ = false;
           unset($this->nmgp_cmp_readonly['biaya_']);
           $sStyleReadLab_biaya_ = '';
           $sStyleReadInp_biaya_ = 'display: none;';
       }
       $this->diskon_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['diskon_']; 
       $diskon_ = $this->diskon_; 
       $sStyleHidden_diskon_ = '';
       if (isset($sCheckRead_diskon_))
       {
           unset($sCheckRead_diskon_);
       }
       if (isset($this->nmgp_cmp_readonly['diskon_']))
       {
           $sCheckRead_diskon_ = $this->nmgp_cmp_readonly['diskon_'];
       }
       if (isset($this->nmgp_cmp_hidden['diskon_']) && $this->nmgp_cmp_hidden['diskon_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['diskon_']);
           $sStyleHidden_diskon_ = 'display: none;';
       }
       $bTestReadOnly_diskon_ = true;
       $sStyleReadLab_diskon_ = 'display: none;';
       $sStyleReadInp_diskon_ = '';
       if (isset($this->nmgp_cmp_readonly['diskon_']) && $this->nmgp_cmp_readonly['diskon_'] == 'on')
       {
           $bTestReadOnly_diskon_ = false;
           unset($this->nmgp_cmp_readonly['diskon_']);
           $sStyleReadLab_diskon_ = '';
           $sStyleReadInp_diskon_ = 'display: none;';
       }
       $this->trandate_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['trandate_'] . ' ' . $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['trandate__hora']; 
       $trandate_ = $this->trandate_; 
       $this->trandate__hora = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['trandate__hora']; 
       $trandate__hora = $this->trandate__hora; 
       $sStyleHidden_trandate_ = '';
       if (isset($sCheckRead_trandate_))
       {
           unset($sCheckRead_trandate_);
       }
       if (isset($this->nmgp_cmp_readonly['trandate_']))
       {
           $sCheckRead_trandate_ = $this->nmgp_cmp_readonly['trandate_'];
       }
       if (isset($this->nmgp_cmp_hidden['trandate_']) && $this->nmgp_cmp_hidden['trandate_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['trandate_']);
           $sStyleHidden_trandate_ = 'display: none;';
       }
       $bTestReadOnly_trandate_ = true;
       $sStyleReadLab_trandate_ = 'display: none;';
       $sStyleReadInp_trandate_ = '';
       if (isset($this->nmgp_cmp_readonly['trandate_']) && $this->nmgp_cmp_readonly['trandate_'] == 'on')
       {
           $bTestReadOnly_trandate_ = false;
           unset($this->nmgp_cmp_readonly['trandate_']);
           $sStyleReadLab_trandate_ = '';
           $sStyleReadInp_trandate_ = 'display: none;';
       }
       $this->strukresep_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['strukresep_']; 
       $strukresep_ = $this->strukresep_; 
       $sStyleHidden_strukresep_ = '';
       if (isset($sCheckRead_strukresep_))
       {
           unset($sCheckRead_strukresep_);
       }
       if (isset($this->nmgp_cmp_readonly['strukresep_']))
       {
           $sCheckRead_strukresep_ = $this->nmgp_cmp_readonly['strukresep_'];
       }
       if (isset($this->nmgp_cmp_hidden['strukresep_']) && $this->nmgp_cmp_hidden['strukresep_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['strukresep_']);
           $sStyleHidden_strukresep_ = 'display: none;';
       }
       $bTestReadOnly_strukresep_ = true;
       $sStyleReadLab_strukresep_ = 'display: none;';
       $sStyleReadInp_strukresep_ = '';
       if (isset($this->nmgp_cmp_readonly['strukresep_']) && $this->nmgp_cmp_readonly['strukresep_'] == 'on')
       {
           $bTestReadOnly_strukresep_ = false;
           unset($this->nmgp_cmp_readonly['strukresep_']);
           $sStyleReadLab_strukresep_ = '';
           $sStyleReadInp_strukresep_ = 'display: none;';
       }
       $this->id_ = $this->form_vert_form_tbreseprawatinap[$sc_seq_vert]['id_']; 
       $id_ = $this->id_; 
       if (!isset($this->nmgp_cmp_hidden['id_']))
       {
           $this->nmgp_cmp_hidden['id_'] = 'off';
       }
       $sStyleHidden_id_ = '';
       if (isset($sCheckRead_id_))
       {
           unset($sCheckRead_id_);
       }
       if (isset($this->nmgp_cmp_readonly['id_']))
       {
           $sCheckRead_id_ = $this->nmgp_cmp_readonly['id_'];
       }
       if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['id_']);
           $sStyleHidden_id_ = 'display: none;';
       }
       $bTestReadOnly_id_ = true;
       $sStyleReadLab_id_ = 'display: none;';
       $sStyleReadInp_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_"]) &&  $this->nmgp_cmp_readonly["id_"] == "on"))
       {
           $bTestReadOnly_id_ = false;
           unset($this->nmgp_cmp_readonly['id_']);
           $sStyleReadLab_id_ = '';
           $sStyleReadInp_id_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>" > <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && ($this->nmgp_botoes['delete'] == "on" || $this->nmgp_botoes['update'] == "on")) {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl) || !empty($this->nm_todas_criticas)) { echo " checked ";} ?> class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['delete'] == "off") {
        $sDisplayDelete = 'display: none';
    }
    else {
        $sDisplayDelete = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayDelete. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['update'] == "off") {
        $sDisplayUpdate = 'display: none';
    }
    else {
        $sDisplayUpdate = '';
    }
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayUpdate. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = $sDisplayUpdate;
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_tbreseprawatinap_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_tbreseprawatinap_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_tbreseprawatinap_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_tbreseprawatinap_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_tbreseprawatinap_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_tbreseprawatinap_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['trancode_']) && $this->nmgp_cmp_hidden['trancode_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="trancode_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($trancode_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_trancode__line" id="hidden_field_data_trancode_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_trancode_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_trancode__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_trancode_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["trancode_"]) &&  $this->nmgp_cmp_readonly["trancode_"] == "on") { 

 ?>
<input type="hidden" name="trancode_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($trancode_) . "\">" . $trancode_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_trancode_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-trancode_<?php echo $sc_seq_vert ?> css_trancode__line" style="<?php echo $sStyleReadLab_trancode_; ?>"><?php echo $this->trancode_; ?></span><span id="id_read_off_trancode_<?php echo $sc_seq_vert ?>" class="css_read_off_trancode_" style="white-space: nowrap;<?php echo $sStyleReadInp_trancode_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_trancode__obj" style="" id="id_sc_field_trancode_<?php echo $sc_seq_vert ?>" type=text name="trancode_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($trancode_) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_trancode_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_trancode_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['item_']) && $this->nmgp_cmp_hidden['item_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="item_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->item_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_item__line" id="hidden_field_data_item_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_item_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_item__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_item_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["item_"]) &&  $this->nmgp_cmp_readonly["item_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_'] = array(); 
    }

   $old_value_jumlah_ = $this->jumlah_;
   $old_value_biaya_ = $this->biaya_;
   $old_value_diskon_ = $this->diskon_;
   $old_value_trandate_ = $this->trandate_;
   $old_value_trandate__hora = $this->trandate__hora;
   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_jumlah_ = $this->jumlah_;
   $unformatted_value_biaya_ = $this->biaya_;
   $unformatted_value_diskon_ = $this->diskon_;
   $unformatted_value_trandate_ = $this->trandate_;
   $unformatted_value_trandate__hora = $this->trandate__hora;
   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT kodeItem, namaItem FROM tbobat where aktif = 'Y' ORDER BY kodeItem, namaItem";

   $this->jumlah_ = $old_value_jumlah_;
   $this->biaya_ = $old_value_biaya_;
   $this->diskon_ = $old_value_diskon_;
   $this->trandate_ = $old_value_trandate_;
   $this->trandate__hora = $old_value_trandate__hora;
   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $item__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->item__1))
          {
              foreach ($this->item__1 as $tmp_item_)
              {
                  if (trim($tmp_item_) === trim($cadaselect[1])) { $item__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->item_) === trim($cadaselect[1])) { $item__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="item_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($item_) . "\">" . $item__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_item_();
   $x = 0 ; 
   $item__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->item__1))
          {
              foreach ($this->item__1 as $tmp_item_)
              {
                  if (trim($tmp_item_) === trim($cadaselect[1])) { $item__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->item_) === trim($cadaselect[1])) { $item__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($item__look))
          {
              $item__look = $this->item_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_item_" . $sc_seq_vert . "\" class=\"css_item__line\" style=\"" .  $sStyleReadLab_item_ . "\">" . $this->form_encode_input($item__look) . "</span><span id=\"id_read_off_item_" . $sc_seq_vert . "\" class=\"css_read_off_item_\" style=\"white-space: nowrap; " . $sStyleReadInp_item_ . "\">";
   echo " <span id=\"idAjaxSelect_item_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_item__obj\" style=\"\" id=\"id_sc_field_item_" . $sc_seq_vert . "\" name=\"item_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_item_'][] = ''; 
   echo "  <option value=\"\"> </option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->item_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->item_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_item_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_item_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['satuan_']) && $this->nmgp_cmp_hidden['satuan_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="satuan_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->satuan_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_satuan__line" id="hidden_field_data_satuan_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_satuan_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_satuan__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_satuan_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["satuan_"]) &&  $this->nmgp_cmp_readonly["satuan_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_'] = array(); 
    }

   $old_value_jumlah_ = $this->jumlah_;
   $old_value_biaya_ = $this->biaya_;
   $old_value_diskon_ = $this->diskon_;
   $old_value_trandate_ = $this->trandate_;
   $old_value_trandate__hora = $this->trandate__hora;
   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_jumlah_ = $this->jumlah_;
   $unformatted_value_biaya_ = $this->biaya_;
   $unformatted_value_diskon_ = $this->diskon_;
   $unformatted_value_trandate_ = $this->trandate_;
   $unformatted_value_trandate__hora = $this->trandate__hora;
   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT satuanTerkecil FROM tbobat where kodeItem = '$this->item_'";

   $this->jumlah_ = $old_value_jumlah_;
   $this->biaya_ = $old_value_biaya_;
   $this->diskon_ = $old_value_diskon_;
   $this->trandate_ = $old_value_trandate_;
   $this->trandate__hora = $old_value_trandate__hora;
   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_satuan_'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $satuan__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->satuan__1))
          {
              foreach ($this->satuan__1 as $tmp_satuan_)
              {
                  if (trim($tmp_satuan_) === trim($cadaselect[1])) { $satuan__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->satuan_) === trim($cadaselect[1])) { $satuan__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="satuan_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($satuan_) . "\">" . $satuan__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_satuan_();
   $x = 0 ; 
   $satuan__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->satuan__1))
          {
              foreach ($this->satuan__1 as $tmp_satuan_)
              {
                  if (trim($tmp_satuan_) === trim($cadaselect[1])) { $satuan__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->satuan_) === trim($cadaselect[1])) { $satuan__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($satuan__look))
          {
              $satuan__look = $this->satuan_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_satuan_" . $sc_seq_vert . "\" class=\"css_satuan__line\" style=\"" .  $sStyleReadLab_satuan_ . "\">" . $this->form_encode_input($satuan__look) . "</span><span id=\"id_read_off_satuan_" . $sc_seq_vert . "\" class=\"css_read_off_satuan_\" style=\"white-space: nowrap; " . $sStyleReadInp_satuan_ . "\">";
   echo " <span id=\"idAjaxSelect_satuan_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_satuan__obj\" style=\"\" id=\"id_sc_field_satuan_" . $sc_seq_vert . "\" name=\"satuan_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->satuan_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->satuan_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_satuan_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_satuan_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['stok_']) && $this->nmgp_cmp_hidden['stok_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="stok_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->stok_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_stok__line" id="hidden_field_data_stok_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_stok_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOddMult css_stok__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_stok_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["stok_"]) &&  $this->nmgp_cmp_readonly["stok_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_'] = array(); 
    }

   $old_value_jumlah_ = $this->jumlah_;
   $old_value_biaya_ = $this->biaya_;
   $old_value_diskon_ = $this->diskon_;
   $old_value_trandate_ = $this->trandate_;
   $old_value_trandate__hora = $this->trandate__hora;
   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_jumlah_ = $this->jumlah_;
   $unformatted_value_biaya_ = $this->biaya_;
   $unformatted_value_diskon_ = $this->diskon_;
   $unformatted_value_trandate_ = $this->trandate_;
   $unformatted_value_trandate__hora = $this->trandate__hora;
   $unformatted_value_id_ = $this->id_;

   $nm_comando = "select sum(currentStock) from tbstockobat where kodeItem = '$this->item_' group by kodeItem";

   $this->jumlah_ = $old_value_jumlah_;
   $this->biaya_ = $old_value_biaya_;
   $this->diskon_ = $old_value_diskon_;
   $this->trandate_ = $old_value_trandate_;
   $this->trandate__hora = $old_value_trandate__hora;
   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['Lookup_stok_'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $stok__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->stok__1))
          {
              foreach ($this->stok__1 as $tmp_stok_)
              {
                  if (trim($tmp_stok_) === trim($cadaselect[1])) { $stok__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->stok_) === trim($cadaselect[1])) { $stok__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="stok_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($stok_) . "\">" . $stok__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_stok_();
   $x = 0 ; 
   $stok__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->stok__1))
          {
              foreach ($this->stok__1 as $tmp_stok_)
              {
                  if (trim($tmp_stok_) === trim($cadaselect[1])) { $stok__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->stok_) === trim($cadaselect[1])) { $stok__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($stok__look))
          {
              $stok__look = $this->stok_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_stok_" . $sc_seq_vert . "\" class=\"css_stok__line\" style=\"" .  $sStyleReadLab_stok_ . "\">" . $this->form_encode_input($stok__look) . "</span><span id=\"id_read_off_stok_" . $sc_seq_vert . "\" class=\"css_read_off_stok_\" style=\"white-space: nowrap; " . $sStyleReadInp_stok_ . "\">";
   echo " <span id=\"idAjaxSelect_stok_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_stok__obj\" style=\"\" id=\"id_sc_field_stok_" . $sc_seq_vert . "\" name=\"stok_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->stok_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->stok_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_stok_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_stok_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['jumlah_']) && $this->nmgp_cmp_hidden['jumlah_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="jumlah_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jumlah_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_jumlah__line" id="hidden_field_data_jumlah_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_jumlah_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_jumlah__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_jumlah_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["jumlah_"]) &&  $this->nmgp_cmp_readonly["jumlah_"] == "on") { 

 ?>
<input type="hidden" name="jumlah_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jumlah_) . "\">" . $jumlah_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_jumlah_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-jumlah_<?php echo $sc_seq_vert ?> css_jumlah__line" style="<?php echo $sStyleReadLab_jumlah_; ?>"><?php echo $this->jumlah_; ?></span><span id="id_read_off_jumlah_<?php echo $sc_seq_vert ?>" class="css_read_off_jumlah_" style="white-space: nowrap;<?php echo $sStyleReadInp_jumlah_; ?>">
 <input class="sc-js-input scFormObjectOddMult scFormObjectOddMultSpin scSpin_jumlah__obj css_jumlah__obj" style="" id="id_sc_field_jumlah_<?php echo $sc_seq_vert ?>" type=text name="jumlah_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jumlah_) ?>"
 size=5 alt="{datatype: 'integer', maxLength: 5, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['jumlah_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['jumlah_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['jumlah_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_jumlah_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_jumlah_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['signa_']) && $this->nmgp_cmp_hidden['signa_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="signa_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($signa_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_signa__line" id="hidden_field_data_signa_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_signa_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_signa__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_signa_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["signa_"]) &&  $this->nmgp_cmp_readonly["signa_"] == "on") { 

 ?>
<input type="hidden" name="signa_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($signa_) . "\">" . $signa_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_signa_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-signa_<?php echo $sc_seq_vert ?> css_signa__line" style="<?php echo $sStyleReadLab_signa_; ?>"><?php echo $this->signa_; ?></span><span id="id_read_off_signa_<?php echo $sc_seq_vert ?>" class="css_read_off_signa_" style="white-space: nowrap;<?php echo $sStyleReadInp_signa_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_signa__obj" style="" id="id_sc_field_signa_<?php echo $sc_seq_vert ?>" type=text name="signa_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($signa_) ?>"
 size=5 maxlength=15 alt="{datatype: 'text', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_signa_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_signa_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['jenisaturanpakai_']) && $this->nmgp_cmp_hidden['jenisaturanpakai_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="jenisaturanpakai_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisaturanpakai_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_jenisaturanpakai__line" id="hidden_field_data_jenisaturanpakai_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_jenisaturanpakai_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_jenisaturanpakai__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_jenisaturanpakai_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["jenisaturanpakai_"]) &&  $this->nmgp_cmp_readonly["jenisaturanpakai_"] == "on") { 

 ?>
<input type="hidden" name="jenisaturanpakai_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisaturanpakai_) . "\">" . $jenisaturanpakai_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_jenisaturanpakai_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-jenisaturanpakai_<?php echo $sc_seq_vert ?> css_jenisaturanpakai__line" style="<?php echo $sStyleReadLab_jenisaturanpakai_; ?>"><?php echo $this->jenisaturanpakai_; ?></span><span id="id_read_off_jenisaturanpakai_<?php echo $sc_seq_vert ?>" class="css_read_off_jenisaturanpakai_" style="white-space: nowrap;<?php echo $sStyleReadInp_jenisaturanpakai_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_jenisaturanpakai__obj" style="" id="id_sc_field_jenisaturanpakai_<?php echo $sc_seq_vert ?>" type=text name="jenisaturanpakai_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisaturanpakai_) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_jenisaturanpakai_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_jenisaturanpakai_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['biaya_']) && $this->nmgp_cmp_hidden['biaya_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="biaya_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($biaya_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_biaya__line" id="hidden_field_data_biaya_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_biaya_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOddMult css_biaya__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_biaya_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["biaya_"]) &&  $this->nmgp_cmp_readonly["biaya_"] == "on") { 

 ?>
<input type="hidden" name="biaya_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($biaya_) . "\">" . $biaya_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_biaya_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-biaya_<?php echo $sc_seq_vert ?> css_biaya__line" style="<?php echo $sStyleReadLab_biaya_; ?>"><?php echo $this->biaya_; ?></span><span id="id_read_off_biaya_<?php echo $sc_seq_vert ?>" class="css_read_off_biaya_" style="white-space: nowrap;<?php echo $sStyleReadInp_biaya_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_biaya__obj" style="" id="id_sc_field_biaya_<?php echo $sc_seq_vert ?>" type=text name="biaya_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($biaya_) ?>"
 size=8 alt="{datatype: 'currency', currencySymbol: '<?php echo $this->field_config['biaya_']['symbol_mon']; ?>', currencyPosition: '<?php echo ((1 == $this->field_config['biaya_']['format_pos'] || 3 == $this->field_config['biaya_']['format_pos']) ? 'left' : 'right'); ?>', maxLength: 8, precision: 0, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['biaya_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['biaya_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['biaya_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['biaya_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_biaya_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_biaya_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['diskon_']) && $this->nmgp_cmp_hidden['diskon_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="diskon_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($diskon_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_diskon__line" id="hidden_field_data_diskon_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_diskon_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_diskon__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_diskon_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["diskon_"]) &&  $this->nmgp_cmp_readonly["diskon_"] == "on") { 

 ?>
<input type="hidden" name="diskon_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($diskon_) . "\">" . $diskon_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_diskon_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-diskon_<?php echo $sc_seq_vert ?> css_diskon__line" style="<?php echo $sStyleReadLab_diskon_; ?>"><?php echo $this->diskon_; ?></span><span id="id_read_off_diskon_<?php echo $sc_seq_vert ?>" class="css_read_off_diskon_" style="white-space: nowrap;<?php echo $sStyleReadInp_diskon_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_diskon__obj" style="" id="id_sc_field_diskon_<?php echo $sc_seq_vert ?>" type=text name="diskon_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($diskon_) ?>"
 size=3 alt="{datatype: 'integer', maxLength: 3, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['diskon_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['diskon_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['diskon_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
<span class="css_diskon__label scFormDataHelpOddMult">&nbsp;%
</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_diskon_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_diskon_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['trandate_']) && $this->nmgp_cmp_hidden['trandate_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="trandate_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($trandate_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_trandate__line" id="hidden_field_data_trandate_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_trandate_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_trandate__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_trandate_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["trandate_"]) &&  $this->nmgp_cmp_readonly["trandate_"] == "on") { 

 ?>
<input type="hidden" name="trandate_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($trandate_) . "\">" . $trandate_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_trandate_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-trandate_<?php echo $sc_seq_vert ?> css_trandate__line" style="<?php echo $sStyleReadLab_trandate_; ?>"><?php echo $trandate_; ?></span><span id="id_read_off_trandate_<?php echo $sc_seq_vert ?>" class="css_read_off_trandate_" style="white-space: nowrap;<?php echo $sStyleReadInp_trandate_; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOddMult css_trandate__obj" style="" id="id_sc_field_trandate_<?php echo $sc_seq_vert ?>" type=text name="trandate_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($trandate_) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['trandate_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['trandate_']['date_format']; ?>', timeSep: '<?php echo $this->field_config['trandate_']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['trandate_']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_trandate_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_trandate_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->trandate_ = $old_dt_trandate_;
?>

   <?php if (isset($this->nmgp_cmp_hidden['strukresep_']) && $this->nmgp_cmp_hidden['strukresep_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="strukresep_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($strukresep_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_strukresep__line" id="hidden_field_data_strukresep_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_strukresep_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_strukresep__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_strukresep_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["strukresep_"]) &&  $this->nmgp_cmp_readonly["strukresep_"] == "on") { 

 ?>
<input type="hidden" name="strukresep_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($strukresep_) . "\">" . $strukresep_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_strukresep_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-strukresep_<?php echo $sc_seq_vert ?> css_strukresep__line" style="<?php echo $sStyleReadLab_strukresep_; ?>"><?php echo $this->strukresep_; ?></span><span id="id_read_off_strukresep_<?php echo $sc_seq_vert ?>" class="css_read_off_strukresep_" style="white-space: nowrap;<?php echo $sStyleReadInp_strukresep_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_strukresep__obj" style="" id="id_sc_field_strukresep_<?php echo $sc_seq_vert ?>" type=text name="strukresep_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($strukresep_) ?>"
 size=15 maxlength=15 alt="{datatype: 'text', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_strukresep_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_strukresep_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOddMult css_id__line" id="hidden_field_data_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_id_<?php echo $sc_seq_vert ?>" class="css_id__line" style="<?php echo $sStyleReadLab_id_; ?>"><?php echo $this->form_encode_input($this->id_); ?></span><span id="id_read_off_id_<?php echo $sc_seq_vert ?>" class="css_read_off_id_" style="<?php echo $sStyleReadInp_id_; ?>"><input type="hidden" id="id_sc_field_id_<?php echo $sc_seq_vert ?>" name="id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($id_) . "\">"?>
<span id="id_ajax_label_id_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_trancode_))
       {
           $this->nmgp_cmp_readonly['trancode_'] = $sCheckRead_trancode_;
       }
       if ('display: none;' == $sStyleHidden_trancode_)
       {
           $this->nmgp_cmp_hidden['trancode_'] = 'off';
       }
       if (isset($sCheckRead_item_))
       {
           $this->nmgp_cmp_readonly['item_'] = $sCheckRead_item_;
       }
       if ('display: none;' == $sStyleHidden_item_)
       {
           $this->nmgp_cmp_hidden['item_'] = 'off';
       }
       if (isset($sCheckRead_satuan_))
       {
           $this->nmgp_cmp_readonly['satuan_'] = $sCheckRead_satuan_;
       }
       if ('display: none;' == $sStyleHidden_satuan_)
       {
           $this->nmgp_cmp_hidden['satuan_'] = 'off';
       }
       if (isset($sCheckRead_stok_))
       {
           $this->nmgp_cmp_readonly['stok_'] = $sCheckRead_stok_;
       }
       if ('display: none;' == $sStyleHidden_stok_)
       {
           $this->nmgp_cmp_hidden['stok_'] = 'off';
       }
       if (isset($sCheckRead_jumlah_))
       {
           $this->nmgp_cmp_readonly['jumlah_'] = $sCheckRead_jumlah_;
       }
       if ('display: none;' == $sStyleHidden_jumlah_)
       {
           $this->nmgp_cmp_hidden['jumlah_'] = 'off';
       }
       if (isset($sCheckRead_signa_))
       {
           $this->nmgp_cmp_readonly['signa_'] = $sCheckRead_signa_;
       }
       if ('display: none;' == $sStyleHidden_signa_)
       {
           $this->nmgp_cmp_hidden['signa_'] = 'off';
       }
       if (isset($sCheckRead_jenisaturanpakai_))
       {
           $this->nmgp_cmp_readonly['jenisaturanpakai_'] = $sCheckRead_jenisaturanpakai_;
       }
       if ('display: none;' == $sStyleHidden_jenisaturanpakai_)
       {
           $this->nmgp_cmp_hidden['jenisaturanpakai_'] = 'off';
       }
       if (isset($sCheckRead_biaya_))
       {
           $this->nmgp_cmp_readonly['biaya_'] = $sCheckRead_biaya_;
       }
       if ('display: none;' == $sStyleHidden_biaya_)
       {
           $this->nmgp_cmp_hidden['biaya_'] = 'off';
       }
       if (isset($sCheckRead_diskon_))
       {
           $this->nmgp_cmp_readonly['diskon_'] = $sCheckRead_diskon_;
       }
       if ('display: none;' == $sStyleHidden_diskon_)
       {
           $this->nmgp_cmp_hidden['diskon_'] = 'off';
       }
       if (isset($sCheckRead_trandate_))
       {
           $this->nmgp_cmp_readonly['trandate_'] = $sCheckRead_trandate_;
       }
       if ('display: none;' == $sStyleHidden_trandate_)
       {
           $this->nmgp_cmp_hidden['trandate_'] = 'off';
       }
       if (isset($sCheckRead_strukresep_))
       {
           $this->nmgp_cmp_readonly['strukresep_'] = $sCheckRead_strukresep_;
       }
       if ('display: none;' == $sStyleHidden_strukresep_)
       {
           $this->nmgp_cmp_hidden['strukresep_'] = 'off';
       }
       if (isset($sCheckRead_id_))
       {
           $this->nmgp_cmp_readonly['id_'] = $sCheckRead_id_;
       }
       if ('display: none;' == $sStyleHidden_id_)
       {
           $this->nmgp_cmp_hidden['id_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_tbreseprawatinap = $guarda_form_vert_form_tbreseprawatinap;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div>
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_tbreseprawatinap");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_tbreseprawatinap");
 parent.scAjaxDetailHeight("form_tbreseprawatinap", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_tbreseprawatinap", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_tbreseprawatinap", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
			do_ajax_form_tbreseprawatinap_add_new_line(); return false;
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-6").length && $("#sc_b_del_t.sc-unique-btn-6").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sc_btn_0() {
		if ($("#sc_sc_btn_0_top").length && $("#sc_sc_btn_0_top").is(":visible")) {
			sc_btn_sc_btn_0()
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-11").length && $("#sc_b_sai_t.sc-unique-btn-11").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbreseprawatinap']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
<?php 
 } 
} 
?> 