<?php

require __DIR__ . '\..\vendor\autoload.php';

use Symfony\Component\Finder\Finder;

$wampConfig = $_SERVER['SERVER_SIGNATURE'];
$repositories  = '';

$finder = new Finder();
$finder->in(__DIR__.'\..\..')->depth('== 0')->exclude('_wampindexer')->notName('index.php')->sortBytype();

if (!count($finder)) {
    return  $repositories  .= '<div class="grid"><div class="card animation-demo" id="titre"><div class="card-header">You dont have any repository yet !</div></div></div>';
}

foreach ($finder as $content) {
    // Folder or File name
    $contentName = $content->getRelativePathname();

    // Folder or File extension
    $extension =  pathinfo($contentName, PATHINFO_EXTENSION);
    // Img repository
    $contentImg = $contentName.'/screenshot.png';

    // Icons
    if ($extension == "") {
        $contentIcon = "../_wampindexer/web/img/folder.png";
    }
    elseif ($extension == "fr" || $extension == "com" || $extension == "org" || $extension == "eu" || $extension == "be") {
        $contentIcon = "../_wampindexer/web/img/site.png";
    } else {
        $contentIcon = "../_wampindexer/web/img/".$extension.".png";
    }

    // Description
    $contentReadme = $contentName.'/README.md';
    if (!file_exists($contentReadme)) {
        $description = "";
    } else {
        $description =  file_get_contents($contentReadme);
    }

    // Last Update
    $stat = stat($contentName);
    $lastUpdate = date('d/m/Y', $stat['mtime']);

    // Repositories
    $repositories  .= '<div class="grid" id="'.$contentName.'">
                          <div class="card animation-demo" id="titre">
                              <div class="card-header">
                                  <h2><span><a href="/'.$contentName.'" target="_BLANK" class="project">'.$contentName.'</a></span><span><img src="/'.$contentIcon.'" alt="" class="icon"></span></h2>
                              </div>
                              <a href="/'.$contentName.'" target="_BLANK">
                                  <div class="card-body">
                                      <img src="/'.$contentImg.'" alt="" class="animated">
                                  </div>
                              </a>
                              <div class="card-header">
                                  <h3><small>'.$description.'</small></h3>
                                  <div class="row">
                                      <div class="col-md-6 text-left"><p class="date">'.$lastUpdate.'</p></div>
                                      <div class="col-md-6 text-right"><a href="/'.$contentName.'" target="_BLANK" class="seeProject">local<span style="margin-right:7px;"></span><i class="zmdi zmdi-caret-right-circle zmdi-hc-fw arrowLink"></i></a></div>
                                  </div>
                              </div>
                          </div>
                      </div>';
}
return $repositories;
