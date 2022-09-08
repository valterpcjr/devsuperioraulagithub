<?php
$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "route", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "dashboard");

//QUERY STRING
if (file_exists("{$themePathSite}/{$configUrl[0]}.php") && !is_dir("{$themePathSite}/{$configUrl[0]}.php")) { 
	require "{$themePathSite}/{$configUrl[0]}.php";

} elseif (!empty($configUrl[2]) && file_exists("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}/{$configUrl[2]}.php") && !is_dir("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}/{$configUrl[2]}.php")) { var_dump($configUrl);
	//theme folder
	require "{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}/{$configUrl[2]}.php";

} elseif (!empty($configUrl[1]) && file_exists("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}.php")) {
	//theme folder
	require "{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}.php";
	
} else {
	//theme 404
	if (file_exists("{$themePathSite}/404.php") && !is_dir("{$themePathSite}/404.php")) {
		require "{$themePathSite}/404.php";
		//echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
	} else {
		require "{$themePathSite}/404.php";
		//echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
	}
}
