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
    // Folder - avatar
    if ($extension == "") {
        if (file_exists($contentImg)) {
            $contentImg = $contentName.'/screenshot.png';
        } else {
            $contentImg = "../_wampindexer/web/img/folder.png";
        }
    }
    // Site & Dev - avatar
    elseif ($extension == "fr" || $extension == "com") {
        if (file_exists($contentImg)) {
            $contentImg = $contentName.'/screenshot.png';
        } else {
            $contentImg = "../_wampindexer/web/img/site.png";
        }
    } elseif ($extension == "html") {
        $contentImg = "../_wampindexer/web/img/html.png";
    } elseif ($extension == "css") {
        $contentImg = "../_wampindexer/web/img/css.png";
    } elseif ($extension == "js") {
        $contentImg = "../_wampindexer/web/img/js.png";
    } elseif ($extension == "xml") {
        $contentImg = "../_wampindexer/web/img/xml.png";
    }
    // Picture - avatar
    elseif ($extension == "jpg") {
        $contentImg = "../_wampindexer/web/img/jpg.png";
    } elseif ($extension == "png") {
        $contentImg = "../_wampindexer/web/img/png.png";
    } elseif ($extension == "gif") {
        $contentImg = "../_wampindexer/web/img/gif.png";
    } elseif ($extension == "svg") {
        $contentImg = "../_wampindexer/web/img/svg.png";
    } elseif ($extension == "pdf") {
        $contentImg = "../_wampindexer/web/img/pdf.png";
    } elseif ($extension == "psd") {
        $contentImg = "../_wampindexer/web/img/psd.png";
    } elseif ($extension == "ai") {
        $contentImg = "../_wampindexer/web/img/ai.png";
    }
    // Text - avatar
    elseif ($extension == "txt") {
        $contentImg = "../_wampindexer/web/img/txt.png";
    } elseif ($extension == "docx") {
        $contentImg = "../_wampindexer/web/img/docx.png";
    } elseif ($extension == "xlsx") {
        $contentImg = "../_wampindexer/web/img/xlsx.png";
    } elseif ($extension == "pptx") {
        $contentImg = "../_wampindexer/web/img/pptx.png";
    }
    // Movie - avatar
    elseif ($extension == "mov") {
        $contentImg = "../_wampindexer/web/img/mov.png";
    }
    // Sound - avatar
    elseif ($extension == "mp3") {
        $contentImg = "../_wampindexer/web/img/mp3.png";
    }
    // Archive - avatar
    elseif ($extension == "zip") {
        $contentImg = "../_wampindexer/web/img/zip.png";
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
                                  <h2><span><a href="/'.$contentName.'" target="_BLANK" class="project">'.$contentName.'</a></span></h2>
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
