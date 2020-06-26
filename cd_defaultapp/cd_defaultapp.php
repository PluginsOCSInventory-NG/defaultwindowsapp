<?php
//====================================================================================
// OCS INVENTORY REPORTS
// Copyleft Erwan GOALOU 2010 (erwan(at)ocsinventory-ng(pt)org)
// Web: http://www.ocsinventory-ng.org
//
// This code is open source and may be copied and modified as long as the source
// code is always made freely available.
// Please refer to the General Public Licence http://www.gnu.org/ or Licence.txt
//====================================================================================
 
	if(AJAX){
		parse_str($protectedPost['ocs']['0'], $params);
		$protectedPost+=$params;
		ob_start();
		$ajax = true;
	}
	else{
		$ajax=false;
	}
	print_item_header("Windows Default Apps");
	if (!isset($protectedPost['SHOW']))
		$protectedPost['SHOW'] = 'NOSHOW';
	$form_name="defaultapp";
	$table_name=$form_name;
	$tab_options=$protectedPost;
	$tab_options['form_name']=$form_name;
	$tab_options['table_name']=$table_name;
	echo open_form($form_name);
	$My_tab=array(
			"Name" => "NAME",
			"Type" => "TYPE"
	);
	$list_col_cant_del=$My_tab;
	$default_fields=$My_tab;
	$sql=prepare_sql_tab($My_tab);
	$sql['SQL']  .= "FROM defaultapp WHERE (hardware_id = $systemid)";
	array_push($sql['ARG'],$systemid);
	$tab_options['ARG_SQL']=$sql['ARG'];
	$tab_options['ARG_SQL_COUNT']=$systemid;
	ajaxtab_entete_fixe($My_tab,$default_fields,$tab_options,$list_col_cant_del);
	echo close_form();
	if ($ajax){
		ob_end_clean();
		tab_req($My_tab,$default_fields,$list_col_cant_del,$sql['SQL'],$tab_options);
		ob_start();
	}
?>
