<?php
error_reporting(0); 
ini_set('display_errors',0);
?>
<link href="../gloria.css" rel="stylesheet" type="text/css" />
<META http-equiv=content-type content="text/html; charset=iso-8859-1">

<table width="100%" border="0" cellpadding="5" cellspacing="1">
    <tr bgcolor="#336699" >
        <td>
            <?php
            require ("fns.php");
            @session_start();

            if ($_SESSION['idioma'] == 2)
                $news_add = News;
            else
                $news_add = Novedades;


            $menu = show_categories();
//Url que abrir� mostrando caractr�sticas de esta categor�a
            $url = "categories.php?catid=" . "2";
            $url_escaparate = "escaparate.php";


            if ($_SESSION['admin_user']) {
                echo "
		   <a title='Últimos artículos añadidos' href='almacen.php'
		  target='mainFrame' class='categories_menu_news'>Almacen</a>
		 ";
            }
            ?>                                                </td>

    </tr>

    <tr bgcolor="#3D7CBC">
        <td  class='botones_cats' onMouseOut="this.className = 'botones_cats'" onmouseover="this.className = 'botones_cats_over'">
            <a title='Escaparate' href='<?php echo $url_escaparate ?>'  target='mainFrame' class='categories_menu_news'>
                <?php echo "Escaparate" ?></a>    </tr>





    <tr bgcolor="#3D7CBC">
        <td  class='botones_cats' onMouseOut="this.className = 'botones_cats'" onmouseover="this.className = 'botones_cats_over'">
            <a title='Últimos artículos añadidos' href='<?php echo $url ?>'  target='mainFrame' class='categories_menu_news'>
                <?php echo $news_add ?></a>    </tr>


    <tr bgcolor="#3D7CBC">
        <td height="19">

            <?php
            display_menu($menu);
            ?></td>
    </tr>
</table>