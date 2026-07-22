<?php
$content = file_get_contents('C:/Users/Acer/.gemini/antigravity-ide/brain/3326a6c6-5911-4e96-b6b1-9f77ec80ee1e/.system_generated/steps/393/content.md');
preg_match('/<div class="header-menu">.*?<!-- ======================= Navigation ends here ================================ -->/s', $content, $matches);
$menu = $matches[0];
// replace absolute URLs with relative ones in the menu
$menu = str_replace('https://www.webclickindia.com/public/themes/default/', 'assets/', $menu);
$menu = str_replace('https://www.webclickindia.com/public/', 'assets/', $menu);
$menu = str_replace('https://www.webclickindia.com/', '', $menu);

// fix specific images
$menu = str_replace('assets/images/categories/', 'assets/images/', $menu);
$menu = str_replace('assets/images/icon/services-icon/', 'assets/images/', $menu);
$menu = str_replace('.html', '.php', $menu);
$menu = str_replace('assets/images/startup.gif', 'assets/images/startup.gif', $menu);

$header = file_get_contents('includes/header.php');
$header = preg_replace('/<div class="header-menu">.*?<!-- ======================= Navigation ends here ================================ -->/s', $menu, $header);
file_put_contents('includes/header.php', $header);
echo "Menu Replaced!";
?>
