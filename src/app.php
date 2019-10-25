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

    // Img & Icon repositories
    if ($extension == "fr" || $extension == "com" || $extension == "org" || $extension == "eu" || $extension == "be") {
        $contentIcon = "../_wampindexer/web/img/site.png";
        $contentImg = "<img src='/".$contentName."/screenshot.png' alt='' class='animated site-extension'>";
    }
    elseif ($extension == "email") {
        $contentIcon = "../_wampindexer/web/img/email.png";
        $contentImg = "<img src='/".$contentName."/screenshot.png' alt='' class='animated email-extension'>";
    } 
    elseif ($extension == "") {
        $contentIcon = "../_wampindexer/web/img/folder.png";
        $contentImg = "<img src='/".$contentName."/screenshot.png' alt='' class='animated repository-extension'>";
    } else {
        $contentIcon = "../_wampindexer/web/img/".$extension.".png";
        $contentImg = "<img class='file-extension'>";
    }

    // Description
    $contentReadme = $contentName.'/README.md';
    if (!file_exists($contentReadme)) {
        $description = "";
    } else {
        // $description =  file_get_contents($contentReadme);
        $description = '<a href="'.$contentReadme.'" target=_blank><span class="readmore">README.md</span></a></small>';
    }

    // Last Update
    $stat = stat($contentName);
    $lastUpdate = date('d/m/Y', $stat['mtime']);

    // Repositories
    $repositories  .= '<div class="grid col-md-4">
                        <div class="grid repository-container" id="'.$contentName.'">
                          <div class="card animation-demo" id="titre">
                              <div class="card-header">
                                  <h2><span><a href="/'.$contentName.'" target=_blank class="project">'.$contentName.'</a></span><span><img src="/'.$contentIcon.'" alt="" class="icon"></span></h2>
                              </div>
                              <a href="/'.$contentName.'" target=_blank>
                                  <div class="card-body">'.$contentImg.'</div>
                              </a>
                              <div class="card-header">
                                <h3><small>'.$description.'</small></h3>
                                  <div class="row">
                                      <div class="col-md-6 text-left"><p class="date">'.$lastUpdate.'</p></div>
                                      <div class="col-md-6 text-right"><a href="/'.$contentName.'" target=_blank class="seeProject">local<span style="margin-right:7px;"></span><i class="zmdi zmdi-caret-right-circle zmdi-hc-fw arrowLink"></i></a></div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>';
}
return $repositories;
