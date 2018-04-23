<?php
/*
 * Plugin Name: Peu pàgina per defecte per a noves entrades
 * Pulgin URL: https://github.com/gelipe1718daw2/pluginwp2_gerliz.git
 * Description: Crea peus de pàgina per defecte per a noves entrades
 * Version : 0.1
 * Author: German Lizondo
 * Author URL : https://github.com/gelipe1718daw2
 * License: GNU GLPv3
 * */
 
 function admin_menu_peu_pagina(){
	 $titolPagina="Peu de pagina per defecte";
	 $titolEntrada="Peu de pagina per defecte";
	 $role="administrator";
	 $id="peu_pagina_per_defecte";
	 add_menu_page($titolPagina, $titolEntrada,$role,$id);;
	}
	 add_action('admin_menu','admin_menu_peu_pagina');
?>
