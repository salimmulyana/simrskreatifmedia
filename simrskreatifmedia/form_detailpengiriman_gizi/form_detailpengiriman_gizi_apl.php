<?php
//
class form_detailpengiriman_gizi_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'navSummary'        => array(),
                                'navPage'           => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id_;
   var $pengiriman_id_;
   var $gelar_;
   var $gelar__1;
   var $nama_pasien_;
   var $kamar_kelas_;
   var $gizi_;
   var $gizi__1;
   var $diet_;
   var $mp_;
   var $mp__1;
   var $lh_;
   var $lh__1;
   var $ln_;
   var $ln__1;
   var $syr_;
   var $syr__1;
   var $ekstra_;
   var $ekstra__1;
   var $buah_;
   var $buah__1;
   var $bed_;
   var $tgl_lahir_;
   var $jadwal_;
   var $usia_;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_after_all_delete = false;
   var $sc_max_reg = 10; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_detailpengiriman_gizi = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = true;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['bed_']))
          {
              $this->bed_ = $this->NM_ajax_info['param']['bed_'];
          }
          if (isset($this->NM_ajax_info['param']['buah_']))
          {
              $this->buah_ = $this->NM_ajax_info['param']['buah_'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['diet_']))
          {
              $this->diet_ = $this->NM_ajax_info['param']['diet_'];
          }
          if (isset($this->NM_ajax_info['param']['ekstra_']))
          {
              $this->ekstra_ = $this->NM_ajax_info['param']['ekstra_'];
          }
          if (isset($this->NM_ajax_info['param']['gelar_']))
          {
              $this->gelar_ = $this->NM_ajax_info['param']['gelar_'];
          }
          if (isset($this->NM_ajax_info['param']['gizi_']))
          {
              $this->gizi_ = $this->NM_ajax_info['param']['gizi_'];
          }
          if (isset($this->NM_ajax_info['param']['id_']))
          {
              $this->id_ = $this->NM_ajax_info['param']['id_'];
          }
          if (isset($this->NM_ajax_info['param']['jadwal_']))
          {
              $this->jadwal_ = $this->NM_ajax_info['param']['jadwal_'];
          }
          if (isset($this->NM_ajax_info['param']['kamar_kelas_']))
          {
              $this->kamar_kelas_ = $this->NM_ajax_info['param']['kamar_kelas_'];
          }
          if (isset($this->NM_ajax_info['param']['lh_']))
          {
              $this->lh_ = $this->NM_ajax_info['param']['lh_'];
          }
          if (isset($this->NM_ajax_info['param']['ln_']))
          {
              $this->ln_ = $this->NM_ajax_info['param']['ln_'];
          }
          if (isset($this->NM_ajax_info['param']['mp_']))
          {
              $this->mp_ = $this->NM_ajax_info['param']['mp_'];
          }
          if (isset($this->NM_ajax_info['param']['nama_pasien_']))
          {
              $this->nama_pasien_ = $this->NM_ajax_info['param']['nama_pasien_'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['syr_']))
          {
              $this->syr_ = $this->NM_ajax_info['param']['syr_'];
          }
          if (isset($this->NM_ajax_info['param']['usia_']))
          {
              $this->usia_ = $this->NM_ajax_info['param']['usia_'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      $this->sc_conv_var['id'] = "id_";
      $this->sc_conv_var['pengiriman_id'] = "pengiriman_id_";
      $this->sc_conv_var['gelar'] = "gelar_";
      $this->sc_conv_var['nama_pasien'] = "nama_pasien_";
      $this->sc_conv_var['kamar_kelas'] = "kamar_kelas_";
      $this->sc_conv_var['gizi'] = "gizi_";
      $this->sc_conv_var['diet'] = "diet_";
      $this->sc_conv_var['mp'] = "mp_";
      $this->sc_conv_var['lh'] = "lh_";
      $this->sc_conv_var['ln'] = "ln_";
      $this->sc_conv_var['syr'] = "syr_";
      $this->sc_conv_var['ekstra'] = "ekstra_";
      $this->sc_conv_var['buah'] = "buah_";
      $this->sc_conv_var['bed'] = "bed_";
      $this->sc_conv_var['tgl_lahir'] = "tgl_lahir_";
      $this->sc_conv_var['jadwal'] = "jadwal_";
      $this->sc_conv_var['usia'] = "usia_";
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_detailpengiriman_gizi($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 if ($cadapar[0] == "id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "id = " . $this->id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
             }
             $ix++;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          elseif (empty($this->NM_where_filter))
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_detailpengiriman_gizi_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("id");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("id");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_detailpengiriman_gizi']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_detailpengiriman_gizi']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_detailpengiriman_gizi'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_detailpengiriman_gizi']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_detailpengiriman_gizi']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_detailpengiriman_gizi') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_detailpengiriman_gizi']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - detailpengiriman_gizi";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_detailpengiriman_gizi")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status      = "scFormInputErrorMult";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';



      $_SESSION['scriptcase']['error_icon']['form_detailpengiriman_gizi']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_detailpengiriman_gizi'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
          $this->nmgp_botoes['summary'] = "on";
      }
      else
      {
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "on";
      }
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_detailpengiriman_gizi']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_detailpengiriman_gizi'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_detailpengiriman_gizi'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_detailpengiriman_gizi", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_detailpengiriman_gizi_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_detailpengiriman_gizi_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_detailpengiriman_gizi/form_detailpengiriman_gizi_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_detailpengiriman_gizi_erro.class.php"); 
      }
      $this->Erro      = new form_detailpengiriman_gizi_erro();
      $this->Erro->Ini = $this->Ini;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg']) && strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg']) == "all")
      {
          $this->form_paginacao = "total";
      }
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao']))
         { 
             if ($this->id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- id_
      $this->field_config['id_']               = array();
      $this->field_config['id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_']['symbol_dec'] = '';
      $this->field_config['id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- pengiriman_id_
      $this->field_config['pengiriman_id_']               = array();
      $this->field_config['pengiriman_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['pengiriman_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pengiriman_id_']['symbol_dec'] = '';
      $this->field_config['pengiriman_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['pengiriman_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- tgl_lahir_
      $this->field_config['tgl_lahir_']                 = array();
      $this->field_config['tgl_lahir_']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['tgl_lahir_']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['tgl_lahir_']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'tgl_lahir_');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($this->nmgp_opcao == "change_qtd_line")
      {
          $this->NM_btn_navega = "N";
          if (strtolower($this->nmgp_max_line) == "all")
          {
              $this->nmgp_opcao = "inicio";
              $this->form_paginacao = "total";
          }
          else
          {
              $this->nmgp_opcao = "igual";
              $this->form_paginacao = "parcial";
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg'] = $this->nmgp_max_line;
      }
      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opc_edit'] = true;  
      $sc_contr_vert = $GLOBALS["sc_contr_vert"];
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = NM_utf8_urldecode($this->New_Line);
         $this->NM_close_db();
         form_detailpengiriman_gizi_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_detailpengiriman_gizi_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->id_)) { $this->nm_limpa_alfa($this->id_); }
         if (isset($this->gelar_)) { $this->nm_limpa_alfa($this->gelar_); }
         if (isset($this->nama_pasien_)) { $this->nm_limpa_alfa($this->nama_pasien_); }
         if (isset($this->kamar_kelas_)) { $this->nm_limpa_alfa($this->kamar_kelas_); }
         if (isset($this->gizi_)) { $this->nm_limpa_alfa($this->gizi_); }
         if (isset($this->diet_)) { $this->nm_limpa_alfa($this->diet_); }
         if (isset($this->mp_)) { $this->nm_limpa_alfa($this->mp_); }
         if (isset($this->lh_)) { $this->nm_limpa_alfa($this->lh_); }
         if (isset($this->ln_)) { $this->nm_limpa_alfa($this->ln_); }
         if (isset($this->syr_)) { $this->nm_limpa_alfa($this->syr_); }
         if (isset($this->ekstra_)) { $this->nm_limpa_alfa($this->ekstra_); }
         if (isset($this->buah_)) { $this->nm_limpa_alfa($this->buah_); }
         if (isset($this->bed_)) { $this->nm_limpa_alfa($this->bed_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'][$sc_seq_vert];
             $this->pengiriman_id_ = $this->nmgp_dados_form['pengiriman_id_']; 
             $this->tgl_lahir_ = $this->nmgp_dados_form['tgl_lahir_']; 
             if ($this->nmgp_opcao == "incluir"){$this->jadwal_ = $this->nmgp_dados_form['jadwal_'];} 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi']) || !is_array($this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi'][] = $this->Campos_Mens_erro;
                  }
                  $this->NM_gera_nav_page(); 
                  $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              }
         }
         else
         {
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
         }
         $this->NM_close_db();
		if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
		}
		if ('incluir' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmi']);
		}
		if ('excluir' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmd']);
		}
         form_detailpengiriman_gizi_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_gelar_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'gelar_');
          }
          if ('validate_nama_pasien_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nama_pasien_');
          }
          if ('validate_kamar_kelas_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'kamar_kelas_');
          }
          if ('validate_bed_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bed_');
          }
          if ('validate_diet_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'diet_');
          }
          if ('validate_gizi_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'gizi_');
          }
          if ('validate_mp_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mp_');
          }
          if ('validate_lh_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lh_');
          }
          if ('validate_ln_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ln_');
          }
          if ('validate_syr_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'syr_');
          }
          if ('validate_ekstra_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ekstra_');
          }
          if ('validate_buah_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'buah_');
          }
          if ('validate_jadwal_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'jadwal_');
          }
          if ('validate_usia_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'usia_');
          }
          if ('validate_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_');
          }
          form_detailpengiriman_gizi_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         if ($this->nmgp_opcao == "recarga" && !isset($GLOBALS["jadwal_" . $sc_seq_vert]))
         { 
             $GLOBALS["jadwal_" . $sc_seq_vert] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['jadwal_'];
         } 
         $this->gelar_ = $GLOBALS["gelar_" . $sc_seq_vert]; 
         $this->nama_pasien_ = $GLOBALS["nama_pasien_" . $sc_seq_vert]; 
         $this->kamar_kelas_ = $GLOBALS["kamar_kelas_" . $sc_seq_vert]; 
         $this->bed_ = $GLOBALS["bed_" . $sc_seq_vert]; 
         $this->diet_ = $GLOBALS["diet_" . $sc_seq_vert]; 
         $this->gizi_ = $GLOBALS["gizi_" . $sc_seq_vert]; 
         $this->mp_ = $GLOBALS["mp_" . $sc_seq_vert]; 
         $this->lh_ = $GLOBALS["lh_" . $sc_seq_vert]; 
         $this->ln_ = $GLOBALS["ln_" . $sc_seq_vert]; 
         $this->syr_ = $GLOBALS["syr_" . $sc_seq_vert]; 
         $this->ekstra_ = $GLOBALS["ekstra_" . $sc_seq_vert]; 
         $this->buah_ = $GLOBALS["buah_" . $sc_seq_vert]; 
         $this->jadwal_ = $GLOBALS["jadwal_" . $sc_seq_vert]; 
         $this->usia_ = $GLOBALS["usia_" . $sc_seq_vert]; 
         $this->id_ = $GLOBALS["id_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'][$sc_seq_vert];
             $this->pengiriman_id_ = $this->nmgp_dados_form['pengiriman_id_']; 
             $this->tgl_lahir_ = $this->nmgp_dados_form['tgl_lahir_']; 
             if ($this->nmgp_opcao == "incluir"){$this->jadwal_ = $this->nmgp_dados_form['jadwal_'];} 
         }
         if (isset($this->id_)) { $this->nm_limpa_alfa($this->id_); }
         if (isset($this->gelar_)) { $this->nm_limpa_alfa($this->gelar_); }
         if (isset($this->nama_pasien_)) { $this->nm_limpa_alfa($this->nama_pasien_); }
         if (isset($this->kamar_kelas_)) { $this->nm_limpa_alfa($this->kamar_kelas_); }
         if (isset($this->gizi_)) { $this->nm_limpa_alfa($this->gizi_); }
         if (isset($this->diet_)) { $this->nm_limpa_alfa($this->diet_); }
         if (isset($this->mp_)) { $this->nm_limpa_alfa($this->mp_); }
         if (isset($this->lh_)) { $this->nm_limpa_alfa($this->lh_); }
         if (isset($this->ln_)) { $this->nm_limpa_alfa($this->ln_); }
         if (isset($this->syr_)) { $this->nm_limpa_alfa($this->syr_); }
         if (isset($this->ekstra_)) { $this->nm_limpa_alfa($this->ekstra_); }
         if (isset($this->buah_)) { $this->nm_limpa_alfa($this->buah_); }
         if (isset($this->bed_)) { $this->nm_limpa_alfa($this->bed_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && in_array($sc_seq_vert, $sc_check_excl))
         {
             $this->nmgp_opcao = "excluir";
         }
         if ($this->nmgp_opcao == "incluir" && !in_array($sc_seq_vert, $sc_check_incl))
         { }
         else
         {
             if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['jadwal_']) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_disabled'][$sc_seq_vert]['jadwal_']))
             { 
                 $this->jadwal_ = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['jadwal_'];
             } 
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_disabled'] = array();
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
                 $this->Campos_Mens_erro = ""; 
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gelar_'] =  $this->gelar_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['nama_pasien_'] =  $this->nama_pasien_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['kamar_kelas_'] =  $this->kamar_kelas_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['bed_'] =  $this->bed_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['diet_'] =  $this->diet_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'] =  $this->gizi_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['mp_'] =  $this->mp_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['lh_'] =  $this->lh_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['ln_'] =  $this->ln_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['syr_'] =  $this->syr_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['ekstra_'] =  $this->ekstra_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['buah_'] =  $this->buah_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'] =  $this->jadwal_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['usia_'] =  $this->usia_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['pengiriman_id_'] =  $this->pengiriman_id_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['tgl_lahir_'] =  $this->tgl_lahir_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form") 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt) 
          { 
              $this->sc_after_all_update = true;
          }
          if ($this->sc_teve_excl) 
          { 
              $this->sc_after_all_delete = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_detailpengiriman_gizi_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_detailpengiriman_gizi);
          $this->NM_ajax_info['fldList']['id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['id_']);
          $this->NM_close_db();
          form_detailpengiriman_gizi_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (isset($this->jadwal_))
          { 
              $SV_jadwal_ = $this->jadwal_;
          } 
          $this->nm_tira_formatacao();
          if (isset($SV_jadwal_) && $this->nmgp_opcao != "recarga")
          { 
              $this->jadwal_ = $SV_jadwal_;
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_detailpengiriman_gizi_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_detailpengiriman_gizi']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_detailpengiriman_gizi.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - detailpengiriman_gizi") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_detailpengiriman_gizi_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_detailpengiriman_gizi"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'gelar_':
               return "Gelar";
               break;
           case 'nama_pasien_':
               return "Nama Pasien";
               break;
           case 'kamar_kelas_':
               return "Kamar Kelas";
               break;
           case 'bed_':
               return "Bed";
               break;
           case 'diet_':
               return "Diet";
               break;
           case 'gizi_':
               return "Gizi";
               break;
           case 'mp_':
               return "Mp";
               break;
           case 'lh_':
               return "Lh";
               break;
           case 'ln_':
               return "Ln";
               break;
           case 'syr_':
               return "Syr";
               break;
           case 'ekstra_':
               return "Ekstra";
               break;
           case 'buah_':
               return "Buah";
               break;
           case 'jadwal_':
               return "Jadwal";
               break;
           case 'usia_':
               return "Usia";
               break;
           case 'id_':
               return "Id";
               break;
           case 'pengiriman_id_':
               return "Pengiriman Id";
               break;
           case 'tgl_lahir_':
               return "Tgl Lahir";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi']) || !is_array($this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi']))
              {
                  $this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_detailpengiriman_gizi'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'gelar_' == $filtro)
        $this->ValidateField_gelar_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nama_pasien_' == $filtro)
        $this->ValidateField_nama_pasien_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'kamar_kelas_' == $filtro)
        $this->ValidateField_kamar_kelas_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bed_' == $filtro)
        $this->ValidateField_bed_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'diet_' == $filtro)
        $this->ValidateField_diet_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'gizi_' == $filtro)
        $this->ValidateField_gizi_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mp_' == $filtro)
        $this->ValidateField_mp_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'lh_' == $filtro)
        $this->ValidateField_lh_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ln_' == $filtro)
        $this->ValidateField_ln_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'syr_' == $filtro)
        $this->ValidateField_syr_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ekstra_' == $filtro)
        $this->ValidateField_ekstra_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'buah_' == $filtro)
        $this->ValidateField_buah_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'jadwal_' == $filtro)
        $this->ValidateField_jadwal_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'usia_' == $filtro)
        $this->ValidateField_usia_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_' == $filtro)
        $this->ValidateField_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_gelar_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->gelar_ == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'gelar_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_gelar_

    function ValidateField_nama_pasien_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      $this->nama_pasien_ = sc_strtoupper($this->nama_pasien_); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nama_pasien_) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Nama Pasien " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nama_pasien_']))
              {
                  $Campos_Erros['nama_pasien_'] = array();
              }
              $Campos_Erros['nama_pasien_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nama_pasien_']) || !is_array($this->NM_ajax_info['errList']['nama_pasien_']))
              {
                  $this->NM_ajax_info['errList']['nama_pasien_'] = array();
              }
              $this->NM_ajax_info['errList']['nama_pasien_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nama_pasien_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nama_pasien_

    function ValidateField_kamar_kelas_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->kamar_kelas_) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Kamar Kelas " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['kamar_kelas_']))
              {
                  $Campos_Erros['kamar_kelas_'] = array();
              }
              $Campos_Erros['kamar_kelas_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['kamar_kelas_']) || !is_array($this->NM_ajax_info['errList']['kamar_kelas_']))
              {
                  $this->NM_ajax_info['errList']['kamar_kelas_'] = array();
              }
              $this->NM_ajax_info['errList']['kamar_kelas_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'kamar_kelas_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_kamar_kelas_

    function ValidateField_bed_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bed_) > 3) 
          { 
              $hasError = true;
              $Campos_Crit .= "Bed " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 3 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bed_']))
              {
                  $Campos_Erros['bed_'] = array();
              }
              $Campos_Erros['bed_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 3 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bed_']) || !is_array($this->NM_ajax_info['errList']['bed_']))
              {
                  $this->NM_ajax_info['errList']['bed_'] = array();
              }
              $this->NM_ajax_info['errList']['bed_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 3 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'bed_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_bed_

    function ValidateField_diet_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->diet_) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "Diet " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['diet_']))
              {
                  $Campos_Erros['diet_'] = array();
              }
              $Campos_Erros['diet_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['diet_']) || !is_array($this->NM_ajax_info['errList']['diet_']))
              {
                  $this->NM_ajax_info['errList']['diet_'] = array();
              }
              $this->NM_ajax_info['errList']['diet_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'diet_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_diet_

    function ValidateField_gizi_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->gizi_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']) && !in_array($this->gizi_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['gizi_']))
                   {
                       $Campos_Erros['gizi_'] = array();
                   }
                   $Campos_Erros['gizi_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['gizi_']) || !is_array($this->NM_ajax_info['errList']['gizi_']))
                   {
                       $this->NM_ajax_info['errList']['gizi_'] = array();
                   }
                   $this->NM_ajax_info['errList']['gizi_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'gizi_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_gizi_

    function ValidateField_mp_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->mp_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']) && !in_array($this->mp_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['mp_']))
                   {
                       $Campos_Erros['mp_'] = array();
                   }
                   $Campos_Erros['mp_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['mp_']) || !is_array($this->NM_ajax_info['errList']['mp_']))
                   {
                       $this->NM_ajax_info['errList']['mp_'] = array();
                   }
                   $this->NM_ajax_info['errList']['mp_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'mp_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_mp_

    function ValidateField_lh_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->lh_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']) && !in_array($this->lh_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['lh_']))
                   {
                       $Campos_Erros['lh_'] = array();
                   }
                   $Campos_Erros['lh_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['lh_']) || !is_array($this->NM_ajax_info['errList']['lh_']))
                   {
                       $this->NM_ajax_info['errList']['lh_'] = array();
                   }
                   $this->NM_ajax_info['errList']['lh_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lh_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lh_

    function ValidateField_ln_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->ln_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']) && !in_array($this->ln_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['ln_']))
                   {
                       $Campos_Erros['ln_'] = array();
                   }
                   $Campos_Erros['ln_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['ln_']) || !is_array($this->NM_ajax_info['errList']['ln_']))
                   {
                       $this->NM_ajax_info['errList']['ln_'] = array();
                   }
                   $this->NM_ajax_info['errList']['ln_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ln_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ln_

    function ValidateField_syr_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->syr_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']) && !in_array($this->syr_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['syr_']))
                   {
                       $Campos_Erros['syr_'] = array();
                   }
                   $Campos_Erros['syr_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['syr_']) || !is_array($this->NM_ajax_info['errList']['syr_']))
                   {
                       $this->NM_ajax_info['errList']['syr_'] = array();
                   }
                   $this->NM_ajax_info['errList']['syr_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'syr_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_syr_

    function ValidateField_ekstra_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->ekstra_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']) && !in_array($this->ekstra_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['ekstra_']))
                   {
                       $Campos_Erros['ekstra_'] = array();
                   }
                   $Campos_Erros['ekstra_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['ekstra_']) || !is_array($this->NM_ajax_info['errList']['ekstra_']))
                   {
                       $this->NM_ajax_info['errList']['ekstra_'] = array();
                   }
                   $this->NM_ajax_info['errList']['ekstra_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ekstra_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ekstra_

    function ValidateField_buah_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->buah_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']) && !in_array($this->buah_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['buah_']))
                   {
                       $Campos_Erros['buah_'] = array();
                   }
                   $Campos_Erros['buah_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['buah_']) || !is_array($this->NM_ajax_info['errList']['buah_']))
                   {
                       $this->NM_ajax_info['errList']['buah_'] = array();
                   }
                   $this->NM_ajax_info['errList']['buah_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'buah_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_buah_

    function ValidateField_jadwal_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->jadwal_) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Jadwal " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['jadwal_']))
              {
                  $Campos_Erros['jadwal_'] = array();
              }
              $Campos_Erros['jadwal_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['jadwal_']) || !is_array($this->NM_ajax_info['errList']['jadwal_']))
              {
                  $this->NM_ajax_info['errList']['jadwal_'] = array();
              }
              $this->NM_ajax_info['errList']['jadwal_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'jadwal_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_jadwal_

    function ValidateField_usia_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->usia_) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Usia " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['usia_']))
              {
                  $Campos_Erros['usia_'] = array();
              }
              $Campos_Erros['usia_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['usia_']) || !is_array($this->NM_ajax_info['errList']['usia_']))
              {
                  $this->NM_ajax_info['errList']['usia_'] = array();
              }
              $this->NM_ajax_info['errList']['usia_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'usia_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_usia_

    function ValidateField_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->id_ === "" || is_null($this->id_))  
      { 
          $this->id_ = 0;
      } 
      nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->id_ != '')  
          { 
              $iTestSize = 15;
              if (strlen($this->id_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Id: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['id_']))
                  {
                      $Campos_Erros['id_'] = array();
                  }
                  $Campos_Erros['id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['id_']) || !is_array($this->NM_ajax_info['errList']['id_']))
                  {
                      $this->NM_ajax_info['errList']['id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->id_, 15, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Id; " ; 
                  if (!isset($Campos_Erros['id_']))
                  {
                      $Campos_Erros['id_'] = array();
                  }
                  $Campos_Erros['id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['id_']) || !is_array($this->NM_ajax_info['errList']['id_']))
                  {
                      $this->NM_ajax_info['errList']['id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['gelar_'] = $this->gelar_;
    $this->nmgp_dados_form['nama_pasien_'] = $this->nama_pasien_;
    $this->nmgp_dados_form['kamar_kelas_'] = $this->kamar_kelas_;
    $this->nmgp_dados_form['bed_'] = $this->bed_;
    $this->nmgp_dados_form['diet_'] = $this->diet_;
    $this->nmgp_dados_form['gizi_'] = $this->gizi_;
    $this->nmgp_dados_form['mp_'] = $this->mp_;
    $this->nmgp_dados_form['lh_'] = $this->lh_;
    $this->nmgp_dados_form['ln_'] = $this->ln_;
    $this->nmgp_dados_form['syr_'] = $this->syr_;
    $this->nmgp_dados_form['ekstra_'] = $this->ekstra_;
    $this->nmgp_dados_form['buah_'] = $this->buah_;
    $this->nmgp_dados_form['jadwal_'] = $this->jadwal_;
    $this->nmgp_dados_form['usia_'] = $this->usia_;
    $this->nmgp_dados_form['id_'] = $this->id_;
    $this->nmgp_dados_form['pengiriman_id_'] = $this->pengiriman_id_;
    $this->nmgp_dados_form['tgl_lahir_'] = $this->tgl_lahir_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['id_'] = $this->id_;
      nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      $this->Before_unformat['pengiriman_id_'] = $this->pengiriman_id_;
      nm_limpa_numero($this->pengiriman_id_, $this->field_config['pengiriman_id_']['symbol_grp']) ; 
      $this->Before_unformat['tgl_lahir_'] = $this->tgl_lahir_;
      nm_limpa_data($this->tgl_lahir_, $this->field_config['tgl_lahir_']['date_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "id_")
      {
          nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "pengiriman_id_")
      {
          nm_limpa_numero($this->pengiriman_id_, $this->field_config['pengiriman_id_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
      if ('' !== $this->id_ || (!empty($format_fields) && isset($format_fields['id_'])))
      {
          nmgp_Form_Num_Val($this->id_, $this->field_config['id_']['symbol_grp'], $this->field_config['id_']['symbol_dec'], "0", "S", $this->field_config['id_']['format_neg'], "", "", "-", $this->field_config['id_']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id_']['keyVal'] = form_detailpengiriman_gizi_pack_protect_string($this->nmgp_dados_form['id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['gelar_']) && $this->NM_ajax_changed['gelar_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['gelar_'] = $this->gelar_;
                  }
                  if (isset($this->NM_ajax_changed['nama_pasien_']) && $this->NM_ajax_changed['nama_pasien_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['nama_pasien_'] = $this->nama_pasien_;
                  }
                  if (isset($this->NM_ajax_changed['kamar_kelas_']) && $this->NM_ajax_changed['kamar_kelas_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['kamar_kelas_'] = $this->kamar_kelas_;
                  }
                  if (isset($this->NM_ajax_changed['bed_']) && $this->NM_ajax_changed['bed_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['bed_'] = $this->bed_;
                  }
                  if (isset($this->NM_ajax_changed['diet_']) && $this->NM_ajax_changed['diet_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['diet_'] = $this->diet_;
                  }
                  if (isset($this->NM_ajax_changed['gizi_']) && $this->NM_ajax_changed['gizi_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['gizi_'] = $this->gizi_;
                  }
                  if (isset($this->NM_ajax_changed['mp_']) && $this->NM_ajax_changed['mp_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['mp_'] = $this->mp_;
                  }
                  if (isset($this->NM_ajax_changed['lh_']) && $this->NM_ajax_changed['lh_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['lh_'] = $this->lh_;
                  }
                  if (isset($this->NM_ajax_changed['ln_']) && $this->NM_ajax_changed['ln_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['ln_'] = $this->ln_;
                  }
                  if (isset($this->NM_ajax_changed['syr_']) && $this->NM_ajax_changed['syr_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['syr_'] = $this->syr_;
                  }
                  if (isset($this->NM_ajax_changed['ekstra_']) && $this->NM_ajax_changed['ekstra_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['ekstra_'] = $this->ekstra_;
                  }
                  if (isset($this->NM_ajax_changed['buah_']) && $this->NM_ajax_changed['buah_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['buah_'] = $this->buah_;
                  }
                  if (isset($this->NM_ajax_changed['jadwal_']) && $this->NM_ajax_changed['jadwal_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['jadwal_'] = $this->jadwal_;
                  }
                  if (isset($this->NM_ajax_changed['usia_']) && $this->NM_ajax_changed['usia_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['usia_'] = $this->usia_;
                  }
                  if (isset($this->NM_ajax_changed['id_']) && $this->NM_ajax_changed['id_'])
                  {
                      $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['id_'] = $this->id_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['gelar_'] = $this->gelar_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['nama_pasien_'] = $this->nama_pasien_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['kamar_kelas_'] = $this->kamar_kelas_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['bed_'] = $this->bed_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['diet_'] = $this->diet_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['gizi_'] = $this->gizi_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['mp_'] = $this->mp_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['lh_'] = $this->lh_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['ln_'] = $this->ln_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['syr_'] = $this->syr_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['ekstra_'] = $this->ekstra_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['buah_'] = $this->buah_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['jadwal_'] = $this->jadwal_;
              $this->form_vert_form_detailpengiriman_gizi[$this->nmgp_refresh_row]['usia_'] = $this->usia_;
          }
          $this->NM_ajax_info['rsSize']            = sizeof($this->form_vert_form_detailpengiriman_gizi);
          $this->NM_ajax_info['buttonDisplayVert'] = array();
          foreach($this->form_vert_form_detailpengiriman_gizi as $sc_seq_vert => $aRecData)
          {
              $this->loadRecordState($sc_seq_vert);
              if ('navigate_form' == $this->NM_ajax_opcao) {
                  $this->NM_ajax_info['buttonDisplayVert'][] = array(
                      'seq'      => $sc_seq_vert,
                      'gridView' => true,
                      'delete'   => $this->nmgp_botoes['delete'],
                      'update'   => $this->nmgp_botoes['update'],
                  );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("gelar_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['gelar_']);
                  $aLookup = array();
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('AN.') => form_detailpengiriman_gizi_pack_protect_string("AN."));
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('TN.') => form_detailpengiriman_gizi_pack_protect_string("TN."));
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('NY.') => form_detailpengiriman_gizi_pack_protect_string("NY."));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gelar_'][] = 'AN.';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gelar_'][] = 'TN.';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gelar_'][] = 'NY.';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"gelar_\"";
          if (isset($this->NM_ajax_info['select_html']['gelar_']) && !empty($this->NM_ajax_info['select_html']['gelar_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['gelar_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['gelar_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['gelar_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['gelar_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['gelar_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['gelar_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['gelar_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nama_pasien_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['nama_pasien_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['nama_pasien_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("kamar_kelas_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['kamar_kelas_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['kamar_kelas_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bed_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['bed_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['bed_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("diet_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['diet_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['diet_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("gizi_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['gizi_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array(); 
}
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('') => form_detailpengiriman_gizi_pack_protect_string(' '));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT gizi FROM set_gizi where jadwal = '$this->jadwal_' ORDER BY gizi";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0]))));
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"gizi_\"";
          if (isset($this->NM_ajax_info['select_html']['gizi_']) && !empty($this->NM_ajax_info['select_html']['gizi_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['gizi_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['gizi_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['gizi_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['gizi_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['gizi_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['gizi_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['gizi_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mp_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['mp_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array(); 
}
   $this->gizi_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'];
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT mp, mp FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY mp";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"mp_\"";
          if (isset($this->NM_ajax_info['select_html']['mp_']) && !empty($this->NM_ajax_info['select_html']['mp_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['mp_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['mp_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['mp_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['mp_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['mp_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['mp_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['mp_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lh_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['lh_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array(); 
}
   $this->gizi_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'];
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT lh, lh FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY lh";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"lh_\"";
          if (isset($this->NM_ajax_info['select_html']['lh_']) && !empty($this->NM_ajax_info['select_html']['lh_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['lh_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['lh_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['lh_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['lh_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['lh_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['lh_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['lh_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ln_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['ln_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array(); 
}
   $this->gizi_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'];
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT ln, ln FROM set_gizi  where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY ln";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"ln_\"";
          if (isset($this->NM_ajax_info['select_html']['ln_']) && !empty($this->NM_ajax_info['select_html']['ln_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['ln_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['ln_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['ln_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['ln_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['ln_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['ln_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['ln_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("syr_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['syr_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array(); 
}
   $this->gizi_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'];
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT syr, syr FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY syr";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"syr_\"";
          if (isset($this->NM_ajax_info['select_html']['syr_']) && !empty($this->NM_ajax_info['select_html']['syr_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['syr_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['syr_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['syr_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['syr_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['syr_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['syr_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['syr_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ekstra_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['ekstra_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array(); 
}
   $this->gizi_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'];
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT ekstra, ekstra FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY ekstra";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"ekstra_\"";
          if (isset($this->NM_ajax_info['select_html']['ekstra_']) && !empty($this->NM_ajax_info['select_html']['ekstra_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['ekstra_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['ekstra_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['ekstra_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['ekstra_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['ekstra_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['ekstra_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['ekstra_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("buah_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['buah_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array(); 
}
   $this->gizi_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'];
   $this->jadwal_ = $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT buah, buah FROM set_gizi  where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY buah";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"buah_\"";
          if (isset($this->NM_ajax_info['select_html']['buah_']) && !empty($this->NM_ajax_info['select_html']['buah_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['buah_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['buah_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['buah_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['buah_' . $sc_seq_vert]['valList'][$i] = form_detailpengiriman_gizi_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['buah_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['buah_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['buah_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("jadwal_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['jadwal_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['jadwal_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("usia_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['usia_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['usia_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['id_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['id_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload_record($sc_seq_vert=0)
  {
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
          $_SESSION['scriptcase']['form_detailpengiriman_gizi']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_jadwal_ = $this->jadwal_;
}
 $check_sql = "SELECT jadwal"
   . " FROM pengiriman_gizi"
   . " WHERE id = '" . $this->pengiriman_id_  . "'";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;

$this->jadwal_  = $this->rs[0][0];

			  $birthDt = new DateTime($this->tgl_lahir_ );
			  $today = new DateTime('today');
			  $y = $today->diff($birthDt)->y;
			  $m = $today->diff($birthDt)->m;
			  $d = $today->diff($birthDt)->d;

$this->usia_  = $y . " TH " . $m . " BLN " . $d . " HR ";
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_jadwal_ != $this->jadwal_ || (isset($bFlagRead_jadwal_) && $bFlagRead_jadwal_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['jadwal_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['jadwal_' . $this->nmgp_refresh_row]['valList'] = array($this->jadwal_);
        $this->NM_ajax_changed['jadwal_'] = true;
    }
}
$_SESSION['scriptcase']['form_detailpengiriman_gizi']['contr_erro'] = 'off'; 
          }
  }
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if ($this->nmgp_opcao == "alterar")
      {
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['gelar_'] == $this->gelar_ &&
              $this->nmgp_dados_select['nama_pasien_'] == $this->nama_pasien_ &&
              $this->nmgp_dados_select['kamar_kelas_'] == $this->kamar_kelas_ &&
              $this->nmgp_dados_select['bed_'] == $this->bed_ &&
              $this->nmgp_dados_select['diet_'] == $this->diet_ &&
              $this->nmgp_dados_select['gizi_'] == $this->gizi_ &&
              $this->nmgp_dados_select['mp_'] == $this->mp_ &&
              $this->nmgp_dados_select['lh_'] == $this->lh_ &&
              $this->nmgp_dados_select['ln_'] == $this->ln_ &&
              $this->nmgp_dados_select['syr_'] == $this->syr_ &&
              $this->nmgp_dados_select['ekstra_'] == $this->ekstra_ &&
              $this->nmgp_dados_select['buah_'] == $this->buah_ &&
              $this->nmgp_dados_select['id_'] == $this->id_)
          { }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['gelar_'] = $this->gelar_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['nama_pasien_'] = $this->nama_pasien_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['kamar_kelas_'] = $this->kamar_kelas_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['bed_'] = $this->bed_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['diet_'] = $this->diet_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['gizi_'] = $this->gizi_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['mp_'] = $this->mp_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['lh_'] = $this->lh_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['ln_'] = $this->ln_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['syr_'] = $this->syr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['ekstra_'] = $this->ekstra_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['buah_'] = $this->buah_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['id_'] = $this->id_;
          }
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['gelar_'] = $this->gelar_;
      $NM_val_form['nama_pasien_'] = $this->nama_pasien_;
      $NM_val_form['kamar_kelas_'] = $this->kamar_kelas_;
      $NM_val_form['bed_'] = $this->bed_;
      $NM_val_form['diet_'] = $this->diet_;
      $NM_val_form['gizi_'] = $this->gizi_;
      $NM_val_form['mp_'] = $this->mp_;
      $NM_val_form['lh_'] = $this->lh_;
      $NM_val_form['ln_'] = $this->ln_;
      $NM_val_form['syr_'] = $this->syr_;
      $NM_val_form['ekstra_'] = $this->ekstra_;
      $NM_val_form['buah_'] = $this->buah_;
      $NM_val_form['jadwal_'] = $this->jadwal_;
      $NM_val_form['usia_'] = $this->usia_;
      $NM_val_form['id_'] = $this->id_;
      $NM_val_form['pengiriman_id_'] = $this->pengiriman_id_;
      $NM_val_form['tgl_lahir_'] = $this->tgl_lahir_;
      if ($this->id_ === "" || is_null($this->id_))  
      { 
          $this->id_ = 0;
      } 
      if ($this->pengiriman_id_ === "" || is_null($this->pengiriman_id_))  
      { 
          $this->pengiriman_id_ = 0;
          $this->sc_force_zero[] = 'pengiriman_id_';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->gelar__before_qstr = $this->gelar_;
          $this->gelar_ = substr($this->Db->qstr($this->gelar_), 1, -1); 
          if ($this->gelar_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->gelar_ = "null"; 
              $NM_val_null[] = "gelar_";
          } 
          $this->nama_pasien__before_qstr = $this->nama_pasien_;
          $this->nama_pasien_ = substr($this->Db->qstr($this->nama_pasien_), 1, -1); 
          if ($this->nama_pasien_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nama_pasien_ = "null"; 
              $NM_val_null[] = "nama_pasien_";
          } 
          $this->kamar_kelas__before_qstr = $this->kamar_kelas_;
          $this->kamar_kelas_ = substr($this->Db->qstr($this->kamar_kelas_), 1, -1); 
          if ($this->kamar_kelas_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->kamar_kelas_ = "null"; 
              $NM_val_null[] = "kamar_kelas_";
          } 
          $this->gizi__before_qstr = $this->gizi_;
          $this->gizi_ = substr($this->Db->qstr($this->gizi_), 1, -1); 
          if ($this->gizi_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->gizi_ = "null"; 
              $NM_val_null[] = "gizi_";
          } 
          $this->diet__before_qstr = $this->diet_;
          $this->diet_ = substr($this->Db->qstr($this->diet_), 1, -1); 
          if ($this->diet_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->diet_ = "null"; 
              $NM_val_null[] = "diet_";
          } 
          $this->mp__before_qstr = $this->mp_;
          $this->mp_ = substr($this->Db->qstr($this->mp_), 1, -1); 
          if ($this->mp_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mp_ = "null"; 
              $NM_val_null[] = "mp_";
          } 
          $this->lh__before_qstr = $this->lh_;
          $this->lh_ = substr($this->Db->qstr($this->lh_), 1, -1); 
          if ($this->lh_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lh_ = "null"; 
              $NM_val_null[] = "lh_";
          } 
          $this->ln__before_qstr = $this->ln_;
          $this->ln_ = substr($this->Db->qstr($this->ln_), 1, -1); 
          if ($this->ln_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ln_ = "null"; 
              $NM_val_null[] = "ln_";
          } 
          $this->syr__before_qstr = $this->syr_;
          $this->syr_ = substr($this->Db->qstr($this->syr_), 1, -1); 
          if ($this->syr_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->syr_ = "null"; 
              $NM_val_null[] = "syr_";
          } 
          $this->ekstra__before_qstr = $this->ekstra_;
          $this->ekstra_ = substr($this->Db->qstr($this->ekstra_), 1, -1); 
          if ($this->ekstra_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ekstra_ = "null"; 
              $NM_val_null[] = "ekstra_";
          } 
          $this->buah__before_qstr = $this->buah_;
          $this->buah_ = substr($this->Db->qstr($this->buah_), 1, -1); 
          if ($this->buah_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->buah_ = "null"; 
              $NM_val_null[] = "buah_";
          } 
          $this->bed__before_qstr = $this->bed_;
          $this->bed_ = substr($this->Db->qstr($this->bed_), 1, -1); 
          if ($this->bed_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->bed_ = "null"; 
              $NM_val_null[] = "bed_";
          } 
          if ($this->tgl_lahir_ == "")  
          { 
              $this->tgl_lahir_ = "null"; 
              $NM_val_null[] = "tgl_lahir_";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_detailpengiriman_gizi_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "gelar = '$this->gelar_', nama_pasien = '$this->nama_pasien_', kamar_kelas = '$this->kamar_kelas_', gizi = '$this->gizi_', diet = '$this->diet_', mp = '$this->mp_', lh = '$this->lh_', ln = '$this->ln_', syr = '$this->syr_', ekstra = '$this->ekstra_', buah = '$this->buah_', bed = '$this->bed_'"; 
              } 
              if (isset($NM_val_form['pengiriman_id_']) && $NM_val_form['pengiriman_id_'] != $this->nmgp_dados_select['pengiriman_id_']) 
              { 
                  $SC_fields_update[] = "pengiriman_id = $this->pengiriman_id_"; 
              } 
              if (isset($NM_val_form['tgl_lahir_']) && $NM_val_form['tgl_lahir_'] != $this->nmgp_dados_select['tgl_lahir_']) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $SC_fields_update[] = "tgl_lahir = #$this->tgl_lahir_#"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $SC_fields_update[] = "tgl_lahir = EXTEND('" . $this->tgl_lahir_ . "', YEAR TO DAY)"; 
                  } 
                  else
                  { 
                      $SC_fields_update[] = "tgl_lahir = " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ""; 
                  } 
              } 
              $aDoNotUpdate = array();
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE id = $this->id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE id = $this->id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE id = $this->id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE id = $this->id_ ";  
              }  
              else  
              {
                  $comando .= " WHERE id = $this->id_ ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_detailpengiriman_gizi_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->gelar_ = $this->gelar__before_qstr;
              $this->nama_pasien_ = $this->nama_pasien__before_qstr;
              $this->kamar_kelas_ = $this->kamar_kelas__before_qstr;
              $this->gizi_ = $this->gizi__before_qstr;
              $this->diet_ = $this->diet__before_qstr;
              $this->mp_ = $this->mp__before_qstr;
              $this->lh_ = $this->lh__before_qstr;
              $this->ln_ = $this->ln__before_qstr;
              $this->syr_ = $this->syr__before_qstr;
              $this->ekstra_ = $this->ekstra__before_qstr;
              $this->buah_ = $this->buah__before_qstr;
              $this->bed_ = $this->bed__before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['db_changed'] = true;

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['id_'])) { $this->id_ = $NM_val_form['id_']; }
              elseif (isset($this->id_)) { $this->nm_limpa_alfa($this->id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['gelar_'])) { $this->gelar_ = $NM_val_form['gelar_']; }
              elseif (isset($this->gelar_)) { $this->nm_limpa_alfa($this->gelar_); }
              if     (isset($NM_val_form) && isset($NM_val_form['nama_pasien_'])) { $this->nama_pasien_ = $NM_val_form['nama_pasien_']; }
              elseif (isset($this->nama_pasien_)) { $this->nm_limpa_alfa($this->nama_pasien_); }
              if     (isset($NM_val_form) && isset($NM_val_form['kamar_kelas_'])) { $this->kamar_kelas_ = $NM_val_form['kamar_kelas_']; }
              elseif (isset($this->kamar_kelas_)) { $this->nm_limpa_alfa($this->kamar_kelas_); }
              if     (isset($NM_val_form) && isset($NM_val_form['gizi_'])) { $this->gizi_ = $NM_val_form['gizi_']; }
              elseif (isset($this->gizi_)) { $this->nm_limpa_alfa($this->gizi_); }
              if     (isset($NM_val_form) && isset($NM_val_form['diet_'])) { $this->diet_ = $NM_val_form['diet_']; }
              elseif (isset($this->diet_)) { $this->nm_limpa_alfa($this->diet_); }
              if     (isset($NM_val_form) && isset($NM_val_form['mp_'])) { $this->mp_ = $NM_val_form['mp_']; }
              elseif (isset($this->mp_)) { $this->nm_limpa_alfa($this->mp_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lh_'])) { $this->lh_ = $NM_val_form['lh_']; }
              elseif (isset($this->lh_)) { $this->nm_limpa_alfa($this->lh_); }
              if     (isset($NM_val_form) && isset($NM_val_form['ln_'])) { $this->ln_ = $NM_val_form['ln_']; }
              elseif (isset($this->ln_)) { $this->nm_limpa_alfa($this->ln_); }
              if     (isset($NM_val_form) && isset($NM_val_form['syr_'])) { $this->syr_ = $NM_val_form['syr_']; }
              elseif (isset($this->syr_)) { $this->nm_limpa_alfa($this->syr_); }
              if     (isset($NM_val_form) && isset($NM_val_form['ekstra_'])) { $this->ekstra_ = $NM_val_form['ekstra_']; }
              elseif (isset($this->ekstra_)) { $this->nm_limpa_alfa($this->ekstra_); }
              if     (isset($NM_val_form) && isset($NM_val_form['buah_'])) { $this->buah_ = $NM_val_form['buah_']; }
              elseif (isset($this->buah_)) { $this->nm_limpa_alfa($this->buah_); }
              if     (isset($NM_val_form) && isset($NM_val_form['bed_'])) { $this->bed_ = $NM_val_form['bed_']; }
              elseif (isset($this->bed_)) { $this->nm_limpa_alfa($this->bed_); }
              $this->nm_proc_onload_record($this->nmgp_refresh_row);

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('gelar_', 'nama_pasien_', 'kamar_kelas_', 'bed_', 'diet_', 'gizi_', 'mp_', 'lh_', 'ln_', 'syr_', 'ekstra_', 'buah_', 'jadwal_', 'usia_', 'id_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['gelar_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['nama_pasien_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['kamar_kelas_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['bed_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['diet_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['gizi_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['mp_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['lh_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ln_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['syr_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ekstra_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['buah_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['jadwal_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['usia_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES ($this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', #$this->tgl_lahir_#)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', EXTEND('$this->tgl_lahir_', YEAR TO DAY))"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir) VALUES (" . $NM_seq_auto . "$this->pengiriman_id_, '$this->gelar_', '$this->nama_pasien_', '$this->kamar_kelas_', '$this->gizi_', '$this->diet_', '$this->mp_', '$this->lh_', '$this->ln_', '$this->syr_', '$this->ekstra_', '$this->buah_', '$this->bed_', " . $this->Ini->date_delim . $this->tgl_lahir_ . $this->Ini->date_delim1 . ")"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_detailpengiriman_gizi_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_detailpengiriman_gizi_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->id_ =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select .currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $str_tabela = "SYSIBM.SYSDUMMY1"; 
                  if($this->Ini->nm_con_use_schema == "N") 
                  { 
                          $str_tabela = "SYSDUMMY1"; 
                  } 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT IDENTITY_VAL_LOCAL() FROM " . $str_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $this->gelar_ = $this->gelar__before_qstr;
              $this->nama_pasien_ = $this->nama_pasien__before_qstr;
              $this->kamar_kelas_ = $this->kamar_kelas__before_qstr;
              $this->gizi_ = $this->gizi__before_qstr;
              $this->diet_ = $this->diet__before_qstr;
              $this->mp_ = $this->mp__before_qstr;
              $this->lh_ = $this->lh__before_qstr;
              $this->ln_ = $this->ln__before_qstr;
              $this->syr_ = $this->syr__before_qstr;
              $this->ekstra_ = $this->ekstra__before_qstr;
              $this->buah_ = $this->buah__before_qstr;
              $this->bed_ = $this->bed__before_qstr;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_qtd']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_I_E']++; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['gelar_'] = $this->gelar_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['nama_pasien_'] = $this->nama_pasien_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['kamar_kelas_'] = $this->kamar_kelas_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['bed_'] = $this->bed_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['diet_'] = $this->diet_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['gizi_'] = $this->gizi_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['mp_'] = $this->mp_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['lh_'] = $this->lh_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['ln_'] = $this->ln_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['syr_'] = $this->syr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['ekstra_'] = $this->ekstra_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['buah_'] = $this->buah_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert]['id_'] = $this->id_;
              if (!empty($this->sc_force_zero))
              {
                  foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
                  {
                      eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
                  }
              }
              $this->sc_force_zero = array();
              if (!empty($NM_val_null))
              {
                  foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
                  {
                      eval('$this->' . $sc_val_null_field . ' = "";');
                  }
              }
              if (isset($this->id_)) { $this->nm_limpa_alfa($this->id_); }
              if (isset($this->gelar_)) { $this->nm_limpa_alfa($this->gelar_); }
              if (isset($this->nama_pasien_)) { $this->nm_limpa_alfa($this->nama_pasien_); }
              if (isset($this->kamar_kelas_)) { $this->nm_limpa_alfa($this->kamar_kelas_); }
              if (isset($this->gizi_)) { $this->nm_limpa_alfa($this->gizi_); }
              if (isset($this->diet_)) { $this->nm_limpa_alfa($this->diet_); }
              if (isset($this->mp_)) { $this->nm_limpa_alfa($this->mp_); }
              if (isset($this->lh_)) { $this->nm_limpa_alfa($this->lh_); }
              if (isset($this->ln_)) { $this->nm_limpa_alfa($this->ln_); }
              if (isset($this->syr_)) { $this->nm_limpa_alfa($this->syr_); }
              if (isset($this->ekstra_)) { $this->nm_limpa_alfa($this->ekstra_); }
              if (isset($this->buah_)) { $this->nm_limpa_alfa($this->buah_); }
              if (isset($this->bed_)) { $this->nm_limpa_alfa($this->bed_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_proc_onload_record($this->nmgp_refresh_row);
                  $this->nm_formatar_campos();

                  $aLookup = array();
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('AN.') => form_detailpengiriman_gizi_pack_protect_string("AN."));
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('TN.') => form_detailpengiriman_gizi_pack_protect_string("TN."));
$aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string('NY.') => form_detailpengiriman_gizi_pack_protect_string("NY."));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gelar_'][] = 'AN.';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gelar_'][] = 'TN.';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gelar_'][] = 'NY.';
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->gelar_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_gelar_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['gelar_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['gelar_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->gelar_)));
                  $this->NM_ajax_info['fldList']['gelar_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_gelar_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['gelar_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['gelar_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['gelar_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['gelar_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['nama_pasien_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['nama_pasien_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->nama_pasien_)));
                  $this->NM_ajax_info['fldList']['nama_pasien_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_nama_pasien_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['nama_pasien_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['nama_pasien_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['nama_pasien_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['nama_pasien_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['kamar_kelas_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['kamar_kelas_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->kamar_kelas_)));
                  $this->NM_ajax_info['fldList']['kamar_kelas_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_kamar_kelas_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['kamar_kelas_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['kamar_kelas_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['kamar_kelas_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['kamar_kelas_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['bed_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['bed_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->bed_)));
                  $this->NM_ajax_info['fldList']['bed_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_bed_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['bed_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['bed_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['bed_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['bed_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['diet_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['diet_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->diet_)));
                  $this->NM_ajax_info['fldList']['diet_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_diet_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['diet_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['diet_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['diet_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['diet_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT gizi FROM set_gizi where jadwal = '$this->jadwal_' ORDER BY gizi";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0]))));
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->gizi_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_gizi_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['gizi_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['gizi_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->gizi_)));
                  $this->NM_ajax_info['fldList']['gizi_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_gizi_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['gizi_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['gizi_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['gizi_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['gizi_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT mp, mp FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY mp";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->mp_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_mp_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['mp_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['mp_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->mp_)));
                  $this->NM_ajax_info['fldList']['mp_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_mp_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['mp_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['mp_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['mp_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['mp_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT lh, lh FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY lh";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->lh_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_lh_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['lh_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['lh_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->lh_)));
                  $this->NM_ajax_info['fldList']['lh_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_lh_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['lh_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['lh_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['lh_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['lh_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT ln, ln FROM set_gizi  where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY ln";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->ln_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_ln_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['ln_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['ln_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->ln_)));
                  $this->NM_ajax_info['fldList']['ln_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_ln_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ln_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ln_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ln_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ln_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT syr, syr FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY syr";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->syr_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_syr_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['syr_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['syr_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->syr_)));
                  $this->NM_ajax_info['fldList']['syr_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_syr_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['syr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['syr_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['syr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['syr_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT ekstra, ekstra FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY ekstra";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->ekstra_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_ekstra_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['ekstra_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['ekstra_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->ekstra_)));
                  $this->NM_ajax_info['fldList']['ekstra_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_ekstra_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ekstra_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ekstra_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ekstra_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ekstra_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT buah, buah FROM set_gizi  where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY buah";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_detailpengiriman_gizi_pack_protect_string(NM_charset_to_utf8($this->buah_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_buah_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['buah_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['buah_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->buah_)));
                  $this->NM_ajax_info['fldList']['buah_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_buah_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['buah_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['buah_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['buah_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['buah_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['jadwal_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['jadwal_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->jadwal_)));
                  $this->NM_ajax_info['fldList']['jadwal_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_jadwal_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['jadwal_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['jadwal_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['jadwal_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['jadwal_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['usia_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['usia_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->usia_)));
                  $this->NM_ajax_info['fldList']['usia_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_usia_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['usia_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['usia_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['usia_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['usia_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['id_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->id_)));
                  $this->NM_ajax_info['fldList']['id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id_ = substr($this->Db->qstr($this->id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_detailpengiriman_gizi_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['db_changed'] = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_qtd']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_I_E']--; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_excl = true; 
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['parms'] = "id_?#?$this->id_?@?"; 
      }
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id_ = null === $this->id_ ? null : substr($this->Db->qstr($this->id_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_detailpengiriman_gizi']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_liga_qtd_reg'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg'] > 0 || strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg']) == "all"))
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_max_reg'];
      } 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_detailpengiriman_gizi = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['parms'] = ""; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'] . ")";
          }
      }
      $sc_where = "";
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (((isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao) || (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)) && !$this->has_where_params && 'novo' != $this->nmgp_opcao)
      {
          $aNewWhereCond = array();
          if (null != $this->id_)
          {
              $aNewWhereCond[] = "id = " . $this->id_;
          }
          if (!$this->NM_ajax_flag)
          {
              $this->NM_btn_navega = "S";
          }
          elseif (!empty($aNewWhereCond))
          {
              if ('' == $sc_where)
              {
                  $sc_where = " where (";
              }
              else
              {
                  $sc_where .= " and (";
              }
              $sc_where .= implode(" and ", $aNewWhereCond) . ")";
          }
      }
      if ('total' != $this->form_paginacao)
      {
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']))
          {
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_detailpengiriman_gizi = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] = $qt_geral_reg_form_detailpengiriman_gizi;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_I_E'] = 0; 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id_))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "id < $this->id_ "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "id < $this->id_ "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "id < $this->id_ "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "id < $this->id_ "; 
              }
              else  
              {
                  $Key_Where = "id < $this->id_ "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_detailpengiriman_gizi = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_detailpengiriman_gizi) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] += ($this->sc_max_reg + $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_I_E']); 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] > $qt_geral_reg_form_detailpengiriman_gizi)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = $qt_geral_reg_form_detailpengiriman_gizi - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = ($qt_geral_reg_form_detailpengiriman_gizi + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] = 0; 
          }
      } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_I_E'] = 0; 
      }
      $Cmps_ord_def = array();
      $sc_order_by  = "";
      $sc_order_by = "id";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_ord'] = ' asc'; 
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['ordem_ord']; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT id, pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, str_replace (convert(char(10),tgl_lahir,102), '.', '-') + ' ' + convert(char(8),tgl_lahir,20) from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nmgp_select = "SELECT id, pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, convert(char(23),tgl_lahir,121) from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT id, pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT id, pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, EXTEND(tgl_lahir, YEAR TO DAY) from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      else 
      { 
          $nmgp_select = "SELECT id, pengiriman_id, gelar, nama_pasien, kamar_kelas, gizi, diet, mp, lh, ln, syr, ekstra, buah, bed, tgl_lahir from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start']) ;  
                  } 
              } 
          } 
      }
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF && !$this->proc_fast_search && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter'])) 
          { 
              $this->nm_flag_saida_novo = "S"; 
              $this->nmgp_opcao = "novo"; 
              $this->sc_evento  = "novo"; 
              if ($this->aba_iframe)
              {
                  $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on" && !$this->proc_fast_search)
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter'] = true;
              }
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
              $this->sc_max_reg = 0;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if ('total' == $this->form_paginacao)
              {
                  $this->sc_max_reg++;
              }
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['id_'] = $this->id_;
              $this->pengiriman_id_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['pengiriman_id_'] = $this->pengiriman_id_;
              $this->gelar_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['gelar_'] = $this->gelar_;
              $this->nama_pasien_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['nama_pasien_'] = $this->nama_pasien_;
              $this->kamar_kelas_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['kamar_kelas_'] = $this->kamar_kelas_;
              $this->gizi_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['gizi_'] = $this->gizi_;
              $this->diet_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['diet_'] = $this->diet_;
              $this->mp_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['mp_'] = $this->mp_;
              $this->lh_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['lh_'] = $this->lh_;
              $this->ln_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['ln_'] = $this->ln_;
              $this->syr_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['syr_'] = $this->syr_;
              $this->ekstra_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['ekstra_'] = $this->ekstra_;
              $this->buah_ = $rs->fields[12] ; 
              $this->nmgp_dados_select['buah_'] = $this->buah_;
              $this->bed_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['bed_'] = $this->bed_;
              $this->tgl_lahir_ = $rs->fields[14] ; 
              $this->nmgp_dados_select['tgl_lahir_'] = $this->tgl_lahir_;
              $this->jadwal_ = isset($GLOBALS['jadwal_' . $sc_seq_vert]) ? $GLOBALS['jadwal_' . $sc_seq_vert] : '';
              $this->usia_ = isset($GLOBALS['usia_' . $sc_seq_vert]) ? $GLOBALS['usia_' . $sc_seq_vert] : '';
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id_ = (string)$this->id_; 
              $this->pengiriman_id_ = (string)$this->pengiriman_id_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['parms'] = "id_?#?$this->id_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->storeRecordState($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gelar_'] =  $this->gelar_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['nama_pasien_'] =  $this->nama_pasien_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['kamar_kelas_'] =  $this->kamar_kelas_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['bed_'] =  $this->bed_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['diet_'] =  $this->diet_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'] =  $this->gizi_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['mp_'] =  $this->mp_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['lh_'] =  $this->lh_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['ln_'] =  $this->ln_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['syr_'] =  $this->syr_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['ekstra_'] =  $this->ekstra_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['buah_'] =  $this->buah_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'] =  $this->jadwal_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['usia_'] =  $this->usia_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['pengiriman_id_'] =  $this->pengiriman_id_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['tgl_lahir_'] =  $this->tgl_lahir_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          ksort ($this->form_vert_form_detailpengiriman_gizi); 
          $rs->Close(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_qtd'] = $sc_seq_vert + $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] - 1;
          if ('total' == $this->form_paginacao)
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $this->sc_max_reg; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $this->sc_max_reg; 
          }
          else
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] + 1; 
          }
          if ($this->form_paginacao == "total")
          {
              $this->SC_nav_page = "";
          }
          else
          {
              $this->NM_gera_nav_page(); 
          }
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] < (($qt_geral_reg_form_detailpengiriman_gizi + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['embutida_multi']) 
          { 
          } 
          else 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->id_ = "";  
              $this->gelar_ = "";  
              $this->nama_pasien_ = "";  
              $this->kamar_kelas_ = "";  
              $this->gizi_ = "";  
              $this->diet_ = "";  
              $this->mp_ = "";  
              $this->lh_ = "";  
              $this->ln_ = "";  
              $this->syr_ = "";  
              $this->ekstra_ = "";  
              $this->buah_ = "";  
              $this->bed_ = "";  
              $this->jadwal_ = "";  
              $this->usia_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gelar_'] =  $this->gelar_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['nama_pasien_'] =  $this->nama_pasien_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['kamar_kelas_'] =  $this->kamar_kelas_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['bed_'] =  $this->bed_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['diet_'] =  $this->diet_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['gizi_'] =  $this->gizi_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['mp_'] =  $this->mp_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['lh_'] =  $this->lh_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['ln_'] =  $this->ln_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['syr_'] =  $this->syr_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['ekstra_'] =  $this->ekstra_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['buah_'] =  $this->buah_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['jadwal_'] =  $this->jadwal_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['usia_'] =  $this->usia_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['pengiriman_id_'] =  $this->pengiriman_id_; 
             $this->form_vert_form_detailpengiriman_gizi[$sc_seq_vert]['tgl_lahir_'] =  $this->tgl_lahir_; 
              $sc_seq_vert++; 
          } 
      }  
  }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_detailpengiriman_gizi_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['table_refresh'] = true;
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_gelar_()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "AN.?#?AN.?#?N?@?";
       $nmgp_def_dados .= "TN.?#?TN.?#?N?@?";
       $nmgp_def_dados .= "NY.?#?NY.?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_gizi_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT gizi FROM set_gizi where jadwal = '$this->jadwal_' ORDER BY gizi";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_gizi_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_mp_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT mp, mp FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY mp";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_mp_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_lh_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT lh, lh FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY lh";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_lh_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_ln_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT ln, ln FROM set_gizi  where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY ln";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ln_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_syr_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT syr, syr FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY syr";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_syr_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_ekstra_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT ekstra, ekstra FROM set_gizi where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY ekstra";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_ekstra_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_buah_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $this->nm_tira_formatacao();


   $unformatted_value_id_ = $this->id_;

   $nm_comando = "SELECT buah, buah FROM set_gizi  where gizi = '$this->gizi_' and jadwal = '$this->jadwal_' ORDER BY buah";

   $this->id_ = $old_value_id_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['Lookup_buah_'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_detailpengiriman_gizi_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pengiriman_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_gelar_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "gelar", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nama_pasien", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "diet", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_mp_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "mp", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_lh_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "lh", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_ln_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ln", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_syr_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "syr", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_ekstra_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ekstra", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_buah_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "buah", $arg_search, $data_lookup);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_detailpengiriman_gizi = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['total'] = $qt_geral_reg_form_detailpengiriman_gizi;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_detailpengiriman_gizi_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_detailpengiriman_gizi_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id";$nm_numeric[] = "pengiriman_id";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas['tgl_lahir'] = "date";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'" . $campo . "%'" . $nm_fim_lower;
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " not" . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_gelar_($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['AN.'] = "AN.";
       $data_look['TN.'] = "TN.";
       $data_look['NY.'] = "NY.";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function SC_lookup_mp_($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_lh_($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_ln_($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_syr_($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_ekstra_($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_buah_($condicao, $campo)
   {
       return $campo;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_detailpengiriman_gizi_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_detailpengiriman_gizi_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_detailpengiriman_gizi_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detailpengiriman_gizi']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>