<?php
class form_tbobat_batch_form extends form_tbobat_batch_apl
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " tbobat"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " tbobat"); } ?></TITLE>
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
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['sc_redir_atualiz'] == 'ok')
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
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
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
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_pdf']))
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
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_tbobat_batch/form_tbobat_batch_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_tbobat_batch_sajax_js.php");
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
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo $this->Ini->Nm_lang['lang_othr_smry_info']?>]";
    nm_sumario = nm_sumario.replace("?start?", reg_ini);
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_tbobat_batch_jquery.php');

?>
var applicationKeys = "";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys.inc.js"></script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys_setup.js"></script>
<script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
<script type="text/javascript">
function process_hotkeys(hotkey)
{
    return false;
}

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

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
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   var fixedQuickSearchSize = {};
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     if ("boolean" == typeof fixedQuickSearchSize[sIdInput] && fixedQuickSearchSize[sIdInput]) {
       return;
     }
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     if (0 != oInput.height()) {
       oInput.css({
         'height': Math.max(oInput.height(), 16) + 'px',
       });
     }
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     fixedQuickSearchSize[sIdInput] = true;
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
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
 include_once("form_tbobat_batch_js0.php");
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
$_SESSION['scriptcase']['error_span_title']['form_tbobat_batch'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tbobat_batch'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " tbobat"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " tbobat"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['empty_filter'] = true;
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
   <?php if (isset($this->nmgp_cmp_hidden['namaitem_']) && $this->nmgp_cmp_hidden['namaitem_'] == 'off') { $sStyleHidden_namaitem_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['namaitem_']) || $this->nmgp_cmp_hidden['namaitem_'] == 'on') {
      if (!isset($this->nm_new_label['namaitem_'])) {
          $this->nm_new_label['namaitem_'] = "Nama Item"; } ?>

    <TD class="scFormLabelOddMult css_namaitem__label" id="hidden_field_label_namaitem_" style="<?php echo $sStyleHidden_namaitem_; ?>" > <?php echo $this->nm_new_label['namaitem_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['jenisbarang_']) && $this->nmgp_cmp_hidden['jenisbarang_'] == 'off') { $sStyleHidden_jenisbarang_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['jenisbarang_']) || $this->nmgp_cmp_hidden['jenisbarang_'] == 'on') {
      if (!isset($this->nm_new_label['jenisbarang_'])) {
          $this->nm_new_label['jenisbarang_'] = "Jenis Barang"; } ?>

    <TD class="scFormLabelOddMult css_jenisbarang__label" id="hidden_field_label_jenisbarang_" style="<?php echo $sStyleHidden_jenisbarang_; ?>" > <?php echo $this->nm_new_label['jenisbarang_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['kemasanbeli_']) && $this->nmgp_cmp_hidden['kemasanbeli_'] == 'off') { $sStyleHidden_kemasanbeli_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['kemasanbeli_']) || $this->nmgp_cmp_hidden['kemasanbeli_'] == 'on') {
      if (!isset($this->nm_new_label['kemasanbeli_'])) {
          $this->nm_new_label['kemasanbeli_'] = "Kemasan Beli"; } ?>

    <TD class="scFormLabelOddMult css_kemasanbeli__label" id="hidden_field_label_kemasanbeli_" style="<?php echo $sStyleHidden_kemasanbeli_; ?>" > <?php echo $this->nm_new_label['kemasanbeli_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['satuanterkecil_']) && $this->nmgp_cmp_hidden['satuanterkecil_'] == 'off') { $sStyleHidden_satuanterkecil_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['satuanterkecil_']) || $this->nmgp_cmp_hidden['satuanterkecil_'] == 'on') {
      if (!isset($this->nm_new_label['satuanterkecil_'])) {
          $this->nm_new_label['satuanterkecil_'] = "Satuan Terkecil"; } ?>

    <TD class="scFormLabelOddMult css_satuanterkecil__label" id="hidden_field_label_satuanterkecil_" style="<?php echo $sStyleHidden_satuanterkecil_; ?>" > <?php echo $this->nm_new_label['satuanterkecil_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['generik_']) && $this->nmgp_cmp_hidden['generik_'] == 'off') { $sStyleHidden_generik_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['generik_']) || $this->nmgp_cmp_hidden['generik_'] == 'on') {
      if (!isset($this->nm_new_label['generik_'])) {
          $this->nm_new_label['generik_'] = "Generik"; } ?>

    <TD class="scFormLabelOddMult css_generik__label" id="hidden_field_label_generik_" style="<?php echo $sStyleHidden_generik_; ?>" > <?php echo $this->nm_new_label['generik_'] ?><br /><input type="checkbox" class="sc-ui-checkbox-generik_-control" /> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['paten_']) && $this->nmgp_cmp_hidden['paten_'] == 'off') { $sStyleHidden_paten_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['paten_']) || $this->nmgp_cmp_hidden['paten_'] == 'on') {
      if (!isset($this->nm_new_label['paten_'])) {
          $this->nm_new_label['paten_'] = "Paten"; } ?>

    <TD class="scFormLabelOddMult css_paten__label" id="hidden_field_label_paten_" style="<?php echo $sStyleHidden_paten_; ?>" > <?php echo $this->nm_new_label['paten_'] ?><br /><input type="checkbox" class="sc-ui-checkbox-paten_-control" /> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['jenisobat_']) && $this->nmgp_cmp_hidden['jenisobat_'] == 'off') { $sStyleHidden_jenisobat_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['jenisobat_']) || $this->nmgp_cmp_hidden['jenisobat_'] == 'on') {
      if (!isset($this->nm_new_label['jenisobat_'])) {
          $this->nm_new_label['jenisobat_'] = "Jenis Obat"; } ?>

    <TD class="scFormLabelOddMult css_jenisobat__label" id="hidden_field_label_jenisobat_" style="<?php echo $sStyleHidden_jenisobat_; ?>" > <?php echo $this->nm_new_label['jenisobat_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['stokminimal_']) && $this->nmgp_cmp_hidden['stokminimal_'] == 'off') { $sStyleHidden_stokminimal_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['stokminimal_']) || $this->nmgp_cmp_hidden['stokminimal_'] == 'on') {
      if (!isset($this->nm_new_label['stokminimal_'])) {
          $this->nm_new_label['stokminimal_'] = "Stok Minimal"; } ?>

    <TD class="scFormLabelOddMult css_stokminimal__label" id="hidden_field_label_stokminimal_" style="<?php echo $sStyleHidden_stokminimal_; ?>" > <?php echo $this->nm_new_label['stokminimal_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['max_']) && $this->nmgp_cmp_hidden['max_'] == 'off') { $sStyleHidden_max_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['max_']) || $this->nmgp_cmp_hidden['max_'] == 'on') {
      if (!isset($this->nm_new_label['max_'])) {
          $this->nm_new_label['max_'] = "Max"; } ?>

    <TD class="scFormLabelOddMult css_max__label" id="hidden_field_label_max_" style="<?php echo $sStyleHidden_max_; ?>" > <?php echo $this->nm_new_label['max_'] ?> </TD>
   <?php } ?>





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
       $iStart = sizeof($this->form_vert_form_tbobat_batch);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_tbobat_batch = $this->form_vert_form_tbobat_batch;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_tbobat_batch))
   {
       $sc_seq_vert = 0;
   }
   foreach ($this->form_vert_form_tbobat_batch as $sc_seq_vert => $sc_lixo)
   {
       $this->loadRecordState($sc_seq_vert);
       $this->id_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['id_'];
       $this->kodeitem_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['kodeitem_'];
       $this->kemasan_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['kemasan_'];
       $this->keterangan_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['keterangan_'];
       $this->paket_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['paket_'];
       $this->aktif_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['aktif_'];
       $this->hargajual_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['hargajual_'];
       $this->hna_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['hna_'];
       $this->hargabeli_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['hargabeli_'];
       $this->id_fornas_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['id_fornas_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['namaitem_'] = true;
           $this->nmgp_cmp_readonly['jenisbarang_'] = true;
           $this->nmgp_cmp_readonly['kemasanbeli_'] = true;
           $this->nmgp_cmp_readonly['satuanterkecil_'] = true;
           $this->nmgp_cmp_readonly['generik_'] = true;
           $this->nmgp_cmp_readonly['paten_'] = true;
           $this->nmgp_cmp_readonly['jenisobat_'] = true;
           $this->nmgp_cmp_readonly['stokminimal_'] = true;
           $this->nmgp_cmp_readonly['max_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['namaitem_']) || $this->nmgp_cmp_readonly['namaitem_'] != "on") {$this->nmgp_cmp_readonly['namaitem_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['jenisbarang_']) || $this->nmgp_cmp_readonly['jenisbarang_'] != "on") {$this->nmgp_cmp_readonly['jenisbarang_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['kemasanbeli_']) || $this->nmgp_cmp_readonly['kemasanbeli_'] != "on") {$this->nmgp_cmp_readonly['kemasanbeli_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['satuanterkecil_']) || $this->nmgp_cmp_readonly['satuanterkecil_'] != "on") {$this->nmgp_cmp_readonly['satuanterkecil_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['generik_']) || $this->nmgp_cmp_readonly['generik_'] != "on") {$this->nmgp_cmp_readonly['generik_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['paten_']) || $this->nmgp_cmp_readonly['paten_'] != "on") {$this->nmgp_cmp_readonly['paten_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['jenisobat_']) || $this->nmgp_cmp_readonly['jenisobat_'] != "on") {$this->nmgp_cmp_readonly['jenisobat_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['stokminimal_']) || $this->nmgp_cmp_readonly['stokminimal_'] != "on") {$this->nmgp_cmp_readonly['stokminimal_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['max_']) || $this->nmgp_cmp_readonly['max_'] != "on") {$this->nmgp_cmp_readonly['max_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->namaitem_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['namaitem_']; 
       $namaitem_ = $this->namaitem_; 
       $sStyleHidden_namaitem_ = '';
       if (isset($sCheckRead_namaitem_))
       {
           unset($sCheckRead_namaitem_);
       }
       if (isset($this->nmgp_cmp_readonly['namaitem_']))
       {
           $sCheckRead_namaitem_ = $this->nmgp_cmp_readonly['namaitem_'];
       }
       if (isset($this->nmgp_cmp_hidden['namaitem_']) && $this->nmgp_cmp_hidden['namaitem_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['namaitem_']);
           $sStyleHidden_namaitem_ = 'display: none;';
       }
       $bTestReadOnly_namaitem_ = true;
       $sStyleReadLab_namaitem_ = 'display: none;';
       $sStyleReadInp_namaitem_ = '';
       if (isset($this->nmgp_cmp_readonly['namaitem_']) && $this->nmgp_cmp_readonly['namaitem_'] == 'on')
       {
           $bTestReadOnly_namaitem_ = false;
           unset($this->nmgp_cmp_readonly['namaitem_']);
           $sStyleReadLab_namaitem_ = '';
           $sStyleReadInp_namaitem_ = 'display: none;';
       }
       $this->jenisbarang_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['jenisbarang_']; 
       $jenisbarang_ = $this->jenisbarang_; 
       $sStyleHidden_jenisbarang_ = '';
       if (isset($sCheckRead_jenisbarang_))
       {
           unset($sCheckRead_jenisbarang_);
       }
       if (isset($this->nmgp_cmp_readonly['jenisbarang_']))
       {
           $sCheckRead_jenisbarang_ = $this->nmgp_cmp_readonly['jenisbarang_'];
       }
       if (isset($this->nmgp_cmp_hidden['jenisbarang_']) && $this->nmgp_cmp_hidden['jenisbarang_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['jenisbarang_']);
           $sStyleHidden_jenisbarang_ = 'display: none;';
       }
       $bTestReadOnly_jenisbarang_ = true;
       $sStyleReadLab_jenisbarang_ = 'display: none;';
       $sStyleReadInp_jenisbarang_ = '';
       if (isset($this->nmgp_cmp_readonly['jenisbarang_']) && $this->nmgp_cmp_readonly['jenisbarang_'] == 'on')
       {
           $bTestReadOnly_jenisbarang_ = false;
           unset($this->nmgp_cmp_readonly['jenisbarang_']);
           $sStyleReadLab_jenisbarang_ = '';
           $sStyleReadInp_jenisbarang_ = 'display: none;';
       }
       $this->kemasanbeli_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['kemasanbeli_']; 
       $kemasanbeli_ = $this->kemasanbeli_; 
       $sStyleHidden_kemasanbeli_ = '';
       if (isset($sCheckRead_kemasanbeli_))
       {
           unset($sCheckRead_kemasanbeli_);
       }
       if (isset($this->nmgp_cmp_readonly['kemasanbeli_']))
       {
           $sCheckRead_kemasanbeli_ = $this->nmgp_cmp_readonly['kemasanbeli_'];
       }
       if (isset($this->nmgp_cmp_hidden['kemasanbeli_']) && $this->nmgp_cmp_hidden['kemasanbeli_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['kemasanbeli_']);
           $sStyleHidden_kemasanbeli_ = 'display: none;';
       }
       $bTestReadOnly_kemasanbeli_ = true;
       $sStyleReadLab_kemasanbeli_ = 'display: none;';
       $sStyleReadInp_kemasanbeli_ = '';
       if (isset($this->nmgp_cmp_readonly['kemasanbeli_']) && $this->nmgp_cmp_readonly['kemasanbeli_'] == 'on')
       {
           $bTestReadOnly_kemasanbeli_ = false;
           unset($this->nmgp_cmp_readonly['kemasanbeli_']);
           $sStyleReadLab_kemasanbeli_ = '';
           $sStyleReadInp_kemasanbeli_ = 'display: none;';
       }
       $this->satuanterkecil_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['satuanterkecil_']; 
       $satuanterkecil_ = $this->satuanterkecil_; 
       $sStyleHidden_satuanterkecil_ = '';
       if (isset($sCheckRead_satuanterkecil_))
       {
           unset($sCheckRead_satuanterkecil_);
       }
       if (isset($this->nmgp_cmp_readonly['satuanterkecil_']))
       {
           $sCheckRead_satuanterkecil_ = $this->nmgp_cmp_readonly['satuanterkecil_'];
       }
       if (isset($this->nmgp_cmp_hidden['satuanterkecil_']) && $this->nmgp_cmp_hidden['satuanterkecil_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['satuanterkecil_']);
           $sStyleHidden_satuanterkecil_ = 'display: none;';
       }
       $bTestReadOnly_satuanterkecil_ = true;
       $sStyleReadLab_satuanterkecil_ = 'display: none;';
       $sStyleReadInp_satuanterkecil_ = '';
       if (isset($this->nmgp_cmp_readonly['satuanterkecil_']) && $this->nmgp_cmp_readonly['satuanterkecil_'] == 'on')
       {
           $bTestReadOnly_satuanterkecil_ = false;
           unset($this->nmgp_cmp_readonly['satuanterkecil_']);
           $sStyleReadLab_satuanterkecil_ = '';
           $sStyleReadInp_satuanterkecil_ = 'display: none;';
       }
       $this->generik_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['generik_']; 
       $generik_ = $this->generik_; 
       $sStyleHidden_generik_ = '';
       if (isset($sCheckRead_generik_))
       {
           unset($sCheckRead_generik_);
       }
       if (isset($this->nmgp_cmp_readonly['generik_']))
       {
           $sCheckRead_generik_ = $this->nmgp_cmp_readonly['generik_'];
       }
       if (isset($this->nmgp_cmp_hidden['generik_']) && $this->nmgp_cmp_hidden['generik_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['generik_']);
           $sStyleHidden_generik_ = 'display: none;';
       }
       $bTestReadOnly_generik_ = true;
       $sStyleReadLab_generik_ = 'display: none;';
       $sStyleReadInp_generik_ = '';
       if (isset($this->nmgp_cmp_readonly['generik_']) && $this->nmgp_cmp_readonly['generik_'] == 'on')
       {
           $bTestReadOnly_generik_ = false;
           unset($this->nmgp_cmp_readonly['generik_']);
           $sStyleReadLab_generik_ = '';
           $sStyleReadInp_generik_ = 'display: none;';
       }
       $this->paten_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['paten_']; 
       $paten_ = $this->paten_; 
       $sStyleHidden_paten_ = '';
       if (isset($sCheckRead_paten_))
       {
           unset($sCheckRead_paten_);
       }
       if (isset($this->nmgp_cmp_readonly['paten_']))
       {
           $sCheckRead_paten_ = $this->nmgp_cmp_readonly['paten_'];
       }
       if (isset($this->nmgp_cmp_hidden['paten_']) && $this->nmgp_cmp_hidden['paten_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['paten_']);
           $sStyleHidden_paten_ = 'display: none;';
       }
       $bTestReadOnly_paten_ = true;
       $sStyleReadLab_paten_ = 'display: none;';
       $sStyleReadInp_paten_ = '';
       if (isset($this->nmgp_cmp_readonly['paten_']) && $this->nmgp_cmp_readonly['paten_'] == 'on')
       {
           $bTestReadOnly_paten_ = false;
           unset($this->nmgp_cmp_readonly['paten_']);
           $sStyleReadLab_paten_ = '';
           $sStyleReadInp_paten_ = 'display: none;';
       }
       $this->jenisobat_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['jenisobat_']; 
       $jenisobat_ = $this->jenisobat_; 
       $sStyleHidden_jenisobat_ = '';
       if (isset($sCheckRead_jenisobat_))
       {
           unset($sCheckRead_jenisobat_);
       }
       if (isset($this->nmgp_cmp_readonly['jenisobat_']))
       {
           $sCheckRead_jenisobat_ = $this->nmgp_cmp_readonly['jenisobat_'];
       }
       if (isset($this->nmgp_cmp_hidden['jenisobat_']) && $this->nmgp_cmp_hidden['jenisobat_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['jenisobat_']);
           $sStyleHidden_jenisobat_ = 'display: none;';
       }
       $bTestReadOnly_jenisobat_ = true;
       $sStyleReadLab_jenisobat_ = 'display: none;';
       $sStyleReadInp_jenisobat_ = '';
       if (isset($this->nmgp_cmp_readonly['jenisobat_']) && $this->nmgp_cmp_readonly['jenisobat_'] == 'on')
       {
           $bTestReadOnly_jenisobat_ = false;
           unset($this->nmgp_cmp_readonly['jenisobat_']);
           $sStyleReadLab_jenisobat_ = '';
           $sStyleReadInp_jenisobat_ = 'display: none;';
       }
       $this->stokminimal_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['stokminimal_']; 
       $stokminimal_ = $this->stokminimal_; 
       $sStyleHidden_stokminimal_ = '';
       if (isset($sCheckRead_stokminimal_))
       {
           unset($sCheckRead_stokminimal_);
       }
       if (isset($this->nmgp_cmp_readonly['stokminimal_']))
       {
           $sCheckRead_stokminimal_ = $this->nmgp_cmp_readonly['stokminimal_'];
       }
       if (isset($this->nmgp_cmp_hidden['stokminimal_']) && $this->nmgp_cmp_hidden['stokminimal_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['stokminimal_']);
           $sStyleHidden_stokminimal_ = 'display: none;';
       }
       $bTestReadOnly_stokminimal_ = true;
       $sStyleReadLab_stokminimal_ = 'display: none;';
       $sStyleReadInp_stokminimal_ = '';
       if (isset($this->nmgp_cmp_readonly['stokminimal_']) && $this->nmgp_cmp_readonly['stokminimal_'] == 'on')
       {
           $bTestReadOnly_stokminimal_ = false;
           unset($this->nmgp_cmp_readonly['stokminimal_']);
           $sStyleReadLab_stokminimal_ = '';
           $sStyleReadInp_stokminimal_ = 'display: none;';
       }
       $this->max_ = $this->form_vert_form_tbobat_batch[$sc_seq_vert]['max_']; 
       $max_ = $this->max_; 
       $sStyleHidden_max_ = '';
       if (isset($sCheckRead_max_))
       {
           unset($sCheckRead_max_);
       }
       if (isset($this->nmgp_cmp_readonly['max_']))
       {
           $sCheckRead_max_ = $this->nmgp_cmp_readonly['max_'];
       }
       if (isset($this->nmgp_cmp_hidden['max_']) && $this->nmgp_cmp_hidden['max_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['max_']);
           $sStyleHidden_max_ = 'display: none;';
       }
       $bTestReadOnly_max_ = true;
       $sStyleReadLab_max_ = 'display: none;';
       $sStyleReadInp_max_ = '';
       if (isset($this->nmgp_cmp_readonly['max_']) && $this->nmgp_cmp_readonly['max_'] == 'on')
       {
           $bTestReadOnly_max_ = false;
           unset($this->nmgp_cmp_readonly['max_']);
           $sStyleReadLab_max_ = '';
           $sStyleReadInp_max_ = 'display: none;';
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
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_tbobat_batch_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_tbobat_batch_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_tbobat_batch_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_tbobat_batch_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_tbobat_batch_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_tbobat_batch_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['namaitem_']) && $this->nmgp_cmp_hidden['namaitem_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="namaitem_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($namaitem_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_namaitem__line" id="hidden_field_data_namaitem_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_namaitem_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_namaitem__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_namaitem_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["namaitem_"]) &&  $this->nmgp_cmp_readonly["namaitem_"] == "on") { 

 ?>
<input type="hidden" name="namaitem_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($namaitem_) . "\">" . $namaitem_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_namaitem_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-namaitem_<?php echo $sc_seq_vert ?> css_namaitem__line" style="<?php echo $sStyleReadLab_namaitem_; ?>"><?php echo $this->namaitem_; ?></span><span id="id_read_off_namaitem_<?php echo $sc_seq_vert ?>" class="css_read_off_namaitem_" style="white-space: nowrap;<?php echo $sStyleReadInp_namaitem_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_namaitem__obj" style="" id="id_sc_field_namaitem_<?php echo $sc_seq_vert ?>" type=text name="namaitem_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($namaitem_) ?>"
 size=50 maxlength=150 alt="{datatype: 'text', maxLength: 150, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_namaitem_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_namaitem_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['jenisbarang_']) && $this->nmgp_cmp_hidden['jenisbarang_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="jenisbarang_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->jenisbarang_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_jenisbarang__line" id="hidden_field_data_jenisbarang_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_jenisbarang_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_jenisbarang__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_jenisbarang_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["jenisbarang_"]) &&  $this->nmgp_cmp_readonly["jenisbarang_"] == "on") { 

$jenisbarang__look = "";
 if ($this->jenisbarang_ == "OBAT") { $jenisbarang__look .= "OBAT" ;} 
 if ($this->jenisbarang_ == "ALKES") { $jenisbarang__look .= "ALKES" ;} 
 if (empty($jenisbarang__look)) { $jenisbarang__look = $this->jenisbarang_; }
?>
<input type="hidden" name="jenisbarang_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisbarang_) . "\">" . $jenisbarang__look . ""; ?>
<?php } else { ?>
<?php

$jenisbarang__look = "";
 if ($this->jenisbarang_ == "OBAT") { $jenisbarang__look .= "OBAT" ;} 
 if ($this->jenisbarang_ == "ALKES") { $jenisbarang__look .= "ALKES" ;} 
 if (empty($jenisbarang__look)) { $jenisbarang__look = $this->jenisbarang_; }
?>
<span id="id_read_on_jenisbarang_<?php echo $sc_seq_vert ; ?>" class="css_jenisbarang__line"  style="<?php echo $sStyleReadLab_jenisbarang_; ?>"><?php echo $this->form_encode_input($jenisbarang__look); ?></span><span id="id_read_off_jenisbarang_<?php echo $sc_seq_vert ; ?>" class="css_read_off_jenisbarang_" style="white-space: nowrap; <?php echo $sStyleReadInp_jenisbarang_; ?>">
 <span id="idAjaxSelect_jenisbarang_<?php echo $sc_seq_vert ?>"><select class="sc-js-input scFormObjectOddMult css_jenisbarang__obj" style="" id="id_sc_field_jenisbarang_<?php echo $sc_seq_vert ?>" name="jenisbarang_<?php echo $sc_seq_vert ?>" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="OBAT" <?php  if ($this->jenisbarang_ == "OBAT") { echo " selected" ;} ?>>OBAT</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_jenisbarang_'][] = 'OBAT'; ?>
 <option  value="ALKES" <?php  if ($this->jenisbarang_ == "ALKES") { echo " selected" ;} ?>>ALKES</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_jenisbarang_'][] = 'ALKES'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_jenisbarang_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_jenisbarang_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['kemasanbeli_']) && $this->nmgp_cmp_hidden['kemasanbeli_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="kemasanbeli_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->kemasanbeli_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_kemasanbeli__line" id="hidden_field_data_kemasanbeli_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_kemasanbeli_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_kemasanbeli__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_kemasanbeli_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["kemasanbeli_"]) &&  $this->nmgp_cmp_readonly["kemasanbeli_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_'] = array(); 
    }

   $old_value_stokminimal_ = $this->stokminimal_;
   $old_value_max_ = $this->max_;
   $this->nm_tira_formatacao();


   $unformatted_value_stokminimal_ = $this->stokminimal_;
   $unformatted_value_max_ = $this->max_;

   $generik__val_str = "";
   if (!empty($this->generik_))
   {
       if (is_array($this->generik_))
       {
           $Tmp_array = $this->generik_;
       }
       else
       {
           $Tmp_array = explode(";", $this->generik_);
       }
       $generik__val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $generik__val_str)
          {
             $generik__val_str .= ", ";
          }
          $generik__val_str .= $Tmp_val_cmp;
       }
   }
   $paten__val_str = "";
   if (!empty($this->paten_))
   {
       if (is_array($this->paten_))
       {
           $Tmp_array = $this->paten_;
       }
       else
       {
           $Tmp_array = explode(";", $this->paten_);
       }
       $paten__val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $paten__val_str)
          {
             $paten__val_str .= ", ";
          }
          $paten__val_str .= $Tmp_val_cmp;
       }
   }
   $nm_comando = "SELECT satuanObat, satuanObat  FROM tbsatuan  ORDER BY satuanObat";

   $this->stokminimal_ = $old_value_stokminimal_;
   $this->max_ = $old_value_max_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_kemasanbeli_'][] = $rs->fields[0];
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
   $kemasanbeli__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->kemasanbeli__1))
          {
              foreach ($this->kemasanbeli__1 as $tmp_kemasanbeli_)
              {
                  if (trim($tmp_kemasanbeli_) === trim($cadaselect[1])) { $kemasanbeli__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->kemasanbeli_) === trim($cadaselect[1])) { $kemasanbeli__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="kemasanbeli_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($kemasanbeli_) . "\">" . $kemasanbeli__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_kemasanbeli_();
   $x = 0 ; 
   $kemasanbeli__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->kemasanbeli__1))
          {
              foreach ($this->kemasanbeli__1 as $tmp_kemasanbeli_)
              {
                  if (trim($tmp_kemasanbeli_) === trim($cadaselect[1])) { $kemasanbeli__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->kemasanbeli_) === trim($cadaselect[1])) { $kemasanbeli__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($kemasanbeli__look))
          {
              $kemasanbeli__look = $this->kemasanbeli_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_kemasanbeli_" . $sc_seq_vert . "\" class=\"css_kemasanbeli__line\" style=\"" .  $sStyleReadLab_kemasanbeli_ . "\">" . $this->form_encode_input($kemasanbeli__look) . "</span><span id=\"id_read_off_kemasanbeli_" . $sc_seq_vert . "\" class=\"css_read_off_kemasanbeli_\" style=\"white-space: nowrap; " . $sStyleReadInp_kemasanbeli_ . "\">";
   echo " <span id=\"idAjaxSelect_kemasanbeli_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_kemasanbeli__obj\" style=\"\" id=\"id_sc_field_kemasanbeli_" . $sc_seq_vert . "\" name=\"kemasanbeli_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->kemasanbeli_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->kemasanbeli_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_kemasanbeli_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_kemasanbeli_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['satuanterkecil_']) && $this->nmgp_cmp_hidden['satuanterkecil_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="satuanterkecil_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->satuanterkecil_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_satuanterkecil__line" id="hidden_field_data_satuanterkecil_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_satuanterkecil_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_satuanterkecil__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_satuanterkecil_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["satuanterkecil_"]) &&  $this->nmgp_cmp_readonly["satuanterkecil_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_'] = array(); 
    }

   $old_value_stokminimal_ = $this->stokminimal_;
   $old_value_max_ = $this->max_;
   $this->nm_tira_formatacao();


   $unformatted_value_stokminimal_ = $this->stokminimal_;
   $unformatted_value_max_ = $this->max_;

   $generik__val_str = "";
   if (!empty($this->generik_))
   {
       if (is_array($this->generik_))
       {
           $Tmp_array = $this->generik_;
       }
       else
       {
           $Tmp_array = explode(";", $this->generik_);
       }
       $generik__val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $generik__val_str)
          {
             $generik__val_str .= ", ";
          }
          $generik__val_str .= $Tmp_val_cmp;
       }
   }
   $paten__val_str = "";
   if (!empty($this->paten_))
   {
       if (is_array($this->paten_))
       {
           $Tmp_array = $this->paten_;
       }
       else
       {
           $Tmp_array = explode(";", $this->paten_);
       }
       $paten__val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $paten__val_str)
          {
             $paten__val_str .= ", ";
          }
          $paten__val_str .= $Tmp_val_cmp;
       }
   }
   $nm_comando = "SELECT satuanObat, satuanObat  FROM tbsatuan  ORDER BY satuanObat";

   $this->stokminimal_ = $old_value_stokminimal_;
   $this->max_ = $old_value_max_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_satuanterkecil_'][] = $rs->fields[0];
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
   $satuanterkecil__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->satuanterkecil__1))
          {
              foreach ($this->satuanterkecil__1 as $tmp_satuanterkecil_)
              {
                  if (trim($tmp_satuanterkecil_) === trim($cadaselect[1])) { $satuanterkecil__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->satuanterkecil_) === trim($cadaselect[1])) { $satuanterkecil__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="satuanterkecil_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($satuanterkecil_) . "\">" . $satuanterkecil__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_satuanterkecil_();
   $x = 0 ; 
   $satuanterkecil__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->satuanterkecil__1))
          {
              foreach ($this->satuanterkecil__1 as $tmp_satuanterkecil_)
              {
                  if (trim($tmp_satuanterkecil_) === trim($cadaselect[1])) { $satuanterkecil__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->satuanterkecil_) === trim($cadaselect[1])) { $satuanterkecil__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($satuanterkecil__look))
          {
              $satuanterkecil__look = $this->satuanterkecil_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_satuanterkecil_" . $sc_seq_vert . "\" class=\"css_satuanterkecil__line\" style=\"" .  $sStyleReadLab_satuanterkecil_ . "\">" . $this->form_encode_input($satuanterkecil__look) . "</span><span id=\"id_read_off_satuanterkecil_" . $sc_seq_vert . "\" class=\"css_read_off_satuanterkecil_\" style=\"white-space: nowrap; " . $sStyleReadInp_satuanterkecil_ . "\">";
   echo " <span id=\"idAjaxSelect_satuanterkecil_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_satuanterkecil__obj\" style=\"\" id=\"id_sc_field_satuanterkecil_" . $sc_seq_vert . "\" name=\"satuanterkecil_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->satuanterkecil_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->satuanterkecil_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_satuanterkecil_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_satuanterkecil_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['generik_']) && $this->nmgp_cmp_hidden['generik_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="generik_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->generik_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->generik__1 = explode(";", trim($this->generik_));
  } 
  else
  {
      if (empty($this->generik_))
      {
          $this->generik__1= array(); 
          $this->generik_= "0";
      } 
      else
      {
          $this->generik__1= $this->generik_; 
          $this->generik_= ""; 
          foreach ($this->generik__1 as $cada_generik_)
          {
             if (!empty($generik_))
             {
                 $this->generik_.= ";"; 
             } 
             $this->generik_.= $cada_generik_; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOddMult css_generik__line" id="hidden_field_data_generik_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_generik_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_generik__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_generik_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["generik_"]) &&  $this->nmgp_cmp_readonly["generik_"] == "on") { 

$generik__look = "";
 if ($this->generik_ == "1") { $generik__look .= "Ya" ;} 
 if (empty($generik__look)) { $generik__look = $this->generik_; }
?>
<input type="hidden" name="generik_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($generik_) . "\">" . $generik__look . ""; ?>
<?php } else { ?>

<?php

$generik__look = "";
 if ($this->generik_ == "1") { $generik__look .= "Ya" ;} 
 if (empty($generik__look)) { $generik__look = $this->generik_; }
?>
<span id="id_read_on_generik_<?php echo $sc_seq_vert ; ?>" class="css_generik__line" style="<?php echo $sStyleReadLab_generik_; ?>"><?php echo $this->form_encode_input($generik__look); ?></span><span id="id_read_off_generik_<?php echo $sc_seq_vert ; ?>" class="css_read_off_generik_ css_generik__line" style="<?php echo $sStyleReadInp_generik_; ?>"><?php echo "<div id=\"idAjaxCheckbox_generik_" . $sc_seq_vert . "\" style=\"display: inline-block\" class=\"css_generik__line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOddMult css_generik__line"><?php $tempOptionId = "id-opt-generik_" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-generik_ sc-ui-checkbox-generik_<?php echo $sc_seq_vert ?>" name="generik_<?php echo $sc_seq_vert ?>[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_generik_'][] = '1'; ?>
<?php  if (in_array("1", $this->generik__1))  { echo " checked" ;} ?> onClick="nm_check_insert(<?php echo $sc_seq_vert ?>);do_ajax_form_tbobat_batch_event_generik__onclick(<?php echo $sc_seq_vert ?>);" ><span></span>
<label for="<?php echo $tempOptionId ?>">Ya</label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_generik_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_generik_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['paten_']) && $this->nmgp_cmp_hidden['paten_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="paten_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->paten_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->paten__1 = explode(";", trim($this->paten_));
  } 
  else
  {
      if (empty($this->paten_))
      {
          $this->paten__1= array(); 
          $this->paten_= "0";
      } 
      else
      {
          $this->paten__1= $this->paten_; 
          $this->paten_= ""; 
          foreach ($this->paten__1 as $cada_paten_)
          {
             if (!empty($paten_))
             {
                 $this->paten_.= ";"; 
             } 
             $this->paten_.= $cada_paten_; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOddMult css_paten__line" id="hidden_field_data_paten_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_paten_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_paten__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_paten_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["paten_"]) &&  $this->nmgp_cmp_readonly["paten_"] == "on") { 

$paten__look = "";
 if ($this->paten_ == "1") { $paten__look .= "Ya" ;} 
 if (empty($paten__look)) { $paten__look = $this->paten_; }
?>
<input type="hidden" name="paten_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($paten_) . "\">" . $paten__look . ""; ?>
<?php } else { ?>

<?php

$paten__look = "";
 if ($this->paten_ == "1") { $paten__look .= "Ya" ;} 
 if (empty($paten__look)) { $paten__look = $this->paten_; }
?>
<span id="id_read_on_paten_<?php echo $sc_seq_vert ; ?>" class="css_paten__line" style="<?php echo $sStyleReadLab_paten_; ?>"><?php echo $this->form_encode_input($paten__look); ?></span><span id="id_read_off_paten_<?php echo $sc_seq_vert ; ?>" class="css_read_off_paten_ css_paten__line" style="<?php echo $sStyleReadInp_paten_; ?>"><?php echo "<div id=\"idAjaxCheckbox_paten_" . $sc_seq_vert . "\" style=\"display: inline-block\" class=\"css_paten__line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOddMult css_paten__line"><?php $tempOptionId = "id-opt-paten_" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-paten_ sc-ui-checkbox-paten_<?php echo $sc_seq_vert ?>" name="paten_<?php echo $sc_seq_vert ?>[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['Lookup_paten_'][] = '1'; ?>
<?php  if (in_array("1", $this->paten__1))  { echo " checked" ;} ?> onClick="nm_check_insert(<?php echo $sc_seq_vert ?>);do_ajax_form_tbobat_batch_event_paten__onclick(<?php echo $sc_seq_vert ?>);" ><span></span>
<label for="<?php echo $tempOptionId ?>">Ya</label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_paten_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_paten_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['jenisobat_']) && $this->nmgp_cmp_hidden['jenisobat_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="jenisobat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisobat_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_jenisobat__line" id="hidden_field_data_jenisobat_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_jenisobat_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_jenisobat__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_jenisobat_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["jenisobat_"]) &&  $this->nmgp_cmp_readonly["jenisobat_"] == "on") { 

 ?>
<input type="hidden" name="jenisobat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisobat_) . "\">" . $jenisobat_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_jenisobat_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-jenisobat_<?php echo $sc_seq_vert ?> css_jenisobat__line" style="<?php echo $sStyleReadLab_jenisobat_; ?>"><?php echo $this->jenisobat_; ?></span><span id="id_read_off_jenisobat_<?php echo $sc_seq_vert ?>" class="css_read_off_jenisobat_" style="white-space: nowrap;<?php echo $sStyleReadInp_jenisobat_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_jenisobat__obj" style="" id="id_sc_field_jenisobat_<?php echo $sc_seq_vert ?>" type=text name="jenisobat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($jenisobat_) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_jenisobat_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_jenisobat_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['stokminimal_']) && $this->nmgp_cmp_hidden['stokminimal_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="stokminimal_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($stokminimal_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_stokminimal__line" id="hidden_field_data_stokminimal_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_stokminimal_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_stokminimal__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_stokminimal_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["stokminimal_"]) &&  $this->nmgp_cmp_readonly["stokminimal_"] == "on") { 

 ?>
<input type="hidden" name="stokminimal_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($stokminimal_) . "\">" . $stokminimal_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_stokminimal_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-stokminimal_<?php echo $sc_seq_vert ?> css_stokminimal__line" style="<?php echo $sStyleReadLab_stokminimal_; ?>"><?php echo $this->stokminimal_; ?></span><span id="id_read_off_stokminimal_<?php echo $sc_seq_vert ?>" class="css_read_off_stokminimal_" style="white-space: nowrap;<?php echo $sStyleReadInp_stokminimal_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_stokminimal__obj" style="" id="id_sc_field_stokminimal_<?php echo $sc_seq_vert ?>" type=text name="stokminimal_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($stokminimal_) ?>"
 size=5 alt="{datatype: 'integer', maxLength: 5, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['stokminimal_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['stokminimal_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['stokminimal_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_stokminimal_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_stokminimal_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['max_']) && $this->nmgp_cmp_hidden['max_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="max_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($max_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_max__line" id="hidden_field_data_max_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_max_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_max__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_max_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["max_"]) &&  $this->nmgp_cmp_readonly["max_"] == "on") { 

 ?>
<input type="hidden" name="max_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($max_) . "\">" . $max_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_max_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-max_<?php echo $sc_seq_vert ?> css_max__line" style="<?php echo $sStyleReadLab_max_; ?>"><?php echo $this->max_; ?></span><span id="id_read_off_max_<?php echo $sc_seq_vert ?>" class="css_read_off_max_" style="white-space: nowrap;<?php echo $sStyleReadInp_max_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_max__obj" style="" id="id_sc_field_max_<?php echo $sc_seq_vert ?>" type=text name="max_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($max_) ?>"
 size=5 alt="{datatype: 'integer', maxLength: 5, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['max_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['max_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['max_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_max_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_max_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_namaitem_))
       {
           $this->nmgp_cmp_readonly['namaitem_'] = $sCheckRead_namaitem_;
       }
       if ('display: none;' == $sStyleHidden_namaitem_)
       {
           $this->nmgp_cmp_hidden['namaitem_'] = 'off';
       }
       if (isset($sCheckRead_jenisbarang_))
       {
           $this->nmgp_cmp_readonly['jenisbarang_'] = $sCheckRead_jenisbarang_;
       }
       if ('display: none;' == $sStyleHidden_jenisbarang_)
       {
           $this->nmgp_cmp_hidden['jenisbarang_'] = 'off';
       }
       if (isset($sCheckRead_kemasanbeli_))
       {
           $this->nmgp_cmp_readonly['kemasanbeli_'] = $sCheckRead_kemasanbeli_;
       }
       if ('display: none;' == $sStyleHidden_kemasanbeli_)
       {
           $this->nmgp_cmp_hidden['kemasanbeli_'] = 'off';
       }
       if (isset($sCheckRead_satuanterkecil_))
       {
           $this->nmgp_cmp_readonly['satuanterkecil_'] = $sCheckRead_satuanterkecil_;
       }
       if ('display: none;' == $sStyleHidden_satuanterkecil_)
       {
           $this->nmgp_cmp_hidden['satuanterkecil_'] = 'off';
       }
       if (isset($sCheckRead_generik_))
       {
           $this->nmgp_cmp_readonly['generik_'] = $sCheckRead_generik_;
       }
       if ('display: none;' == $sStyleHidden_generik_)
       {
           $this->nmgp_cmp_hidden['generik_'] = 'off';
       }
       if (isset($sCheckRead_paten_))
       {
           $this->nmgp_cmp_readonly['paten_'] = $sCheckRead_paten_;
       }
       if ('display: none;' == $sStyleHidden_paten_)
       {
           $this->nmgp_cmp_hidden['paten_'] = 'off';
       }
       if (isset($sCheckRead_jenisobat_))
       {
           $this->nmgp_cmp_readonly['jenisobat_'] = $sCheckRead_jenisobat_;
       }
       if ('display: none;' == $sStyleHidden_jenisobat_)
       {
           $this->nmgp_cmp_hidden['jenisobat_'] = 'off';
       }
       if (isset($sCheckRead_stokminimal_))
       {
           $this->nmgp_cmp_readonly['stokminimal_'] = $sCheckRead_stokminimal_;
       }
       if ('display: none;' == $sStyleHidden_stokminimal_)
       {
           $this->nmgp_cmp_hidden['stokminimal_'] = 'off';
       }
       if (isset($sCheckRead_max_))
       {
           $this->nmgp_cmp_readonly['max_'] = $sCheckRead_max_;
       }
       if ('display: none;' == $sStyleHidden_max_)
       {
           $this->nmgp_cmp_hidden['max_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_tbobat_batch = $guarda_form_vert_form_tbobat_batch;
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
 <div id="sc-id-fixedheaders-placeholder" style="display: none; position: fixed; top: 0; z-index: 500"></div>
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
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq()", "scBtnFn_sys_GridPermiteSeq()", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['qtline'] == "on")
      {
?> 
          <span class="<?php echo $this->css_css_toolbar_obj ?>" style="border: 0px;"><?php echo $this->Ini->Nm_lang['lang_btns_rows'] ?></span>
          <select class="scFormToolbarInput" name="nmgp_quant_linhas_b" onchange="document.F7.nmgp_max_line.value = this.value; document.F7.submit();"> 
<?php 
              $obj_sel = ($this->sc_max_reg == '10') ? " selected" : "";
?> 
           <option value="10" <?php echo $obj_sel ?>>10</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '20') ? " selected" : "";
?> 
           <option value="20" <?php echo $obj_sel ?>>20</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '50') ? " selected" : "";
?> 
           <option value="50" <?php echo $obj_sel ?>>50</option>
          </select>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-13", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R")
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
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['run_modal'])
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_tbobat_batch");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_tbobat_batch");
 parent.scAjaxDetailHeight("form_tbobat_batch", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_tbobat_batch", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_tbobat_batch", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['sc_modal'])
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
			do_ajax_form_tbobat_batch_add_new_line(); return false;
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
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-12").length && $("#sc_b_ini_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-13").length && $("#sc_b_ret_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-14").length && $("#sc_b_avc_b.sc-unique-btn-14").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-15").length && $("#sc_b_fim_b.sc-unique-btn-15").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbobat_batch']['buttonStatus'] = $this->nmgp_botoes;
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