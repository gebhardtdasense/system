<?php
namespace SYSTEM\SAI;

class saimod_sys_config extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SYSTEM_SAI_saimod_sys_config(){
        $result =   '<h4>System Config</h4><hr>'.
                    '<table class="table table-hover table-condensed sai_table" style="overflow: auto;">'.                    
                    '<tr>'.'<th>'.'Config ID'.'</th>'.'<th>'.'Config Name'.'</th>'.'<th>'.'Value'.'</th>'.'</tr>';
        
        $result .= '<tr>'.'<th>Basics</th>'.'<th></th><th></th>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_ERRORREPORTING.      '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_ERRORREPORTING'.      '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_ERRORREPORTING).                        '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_BASEURL.        '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_BASEURL'.        '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_BASEURL).                          '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_BASEPATH.       '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_BASEPATH'.       '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_BASEPATH).                         '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_SYSTEMPATHREL.  '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_SYSTEMPATHREL'.  '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_PATH_SYSTEMPATHREL).                    '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_RESULT.      '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_RESULT'.      '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_RESULT).                        '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_LANGS.               '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_LANGS'.               '</td>'.'<td>'.implode(',',\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_LANGS)).                    '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_LANG.        '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_LANG'.        '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_LANG).                          '</td>'.'</tr>';
        $result .= '<tr>'.'<th>Database</th>'.'<th></th><th></th>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_TYPE.             '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_TYPE'.             '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_TYPE).                               '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_HOST.             '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_HOST'.             '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_HOST).                               '</td>'.'</tr>';    
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PORT.             '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PORT'.             '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PORT).                               '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_USER.             '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_USER'.             '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_USER).                               '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PASSWORD.         '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PASSWORD'.         '</td>'.'<td>'.'&lt;hidden&gt;'.                                                                                        '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_DBNAME.           '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_DBNAME'.           '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_DBNAME).                             '</td>'.'</tr>';
        $result .= '<tr>'.'<th>System Admin Interface</th>'.'<th></th><th></th>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_BASEURL.         '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_BASEURL'.         '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_BASEURL).                           '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_NAVIMG.          '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_NAVIMG'.          '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_NAVIMG).                            '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_COPYRIGHT.       '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_COPYRIGHT'.          '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_COPYRIGHT).                      '</td>'.'</tr>';
        $result .= '<tr>'.'<td>'.\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_TITLE.           '</td>'.'<td>'.'\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_TITLE'.          '</td>'.'<td>'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_TITLE).                              '</td>'.'</tr>';        

        $result .= '</table>';
        
        return $result;
    }
    public static function html_li_menu(){return '<li><a href="#" saimenu=".SYSTEM.SAI.saimod_sys_config">Config</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    
    public static function sai_mod__SYSTEM_SAI_saimod_sys_config_flag_css(){}
    public static function sai_mod__SYSTEM_SAI_saimod_sys_config_flag_js(){}
}