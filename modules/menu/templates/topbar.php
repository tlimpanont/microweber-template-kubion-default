<?php

/*

type: layout

name: Foundation Topbar

description: Foundation Topbar

*/
?>
<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
	    <li class="name">
	      <a href="#">
		      	<img src="http://theuy.nl/iris-admin-3/userfiles/media/content/kubionlogo_topbar.png" alt="">
	      </a>
	    </li>
	   
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  	</ul>
	<section class="top-bar-section">
	      <?php
	      $params['ul_class'] = 'right';
		  $params['ul_class_deep'] = 'dropdown';
		  $params['li_class_deep'] = 'is_child_item';
		  
	  
	      $mt =  menu_tree(array_merge($menu_filter, $params));
	      if($mt != false){
	        print ($mt);
	      }
	      else {
	        print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
	      }
	      ?>
	</section>
</nav>
