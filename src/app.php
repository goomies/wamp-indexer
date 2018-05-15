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

    $contentName = $content->getRelativePathname();
    $contentImg = $contentName.'/screenshot.png';

    $repositories  .= '<div class="grid col-md-4 col-sm-6" id="'.$contentName.'">
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
                                  <h3><small></small></h3>
                                  <div class="row">
                                      <div class="col-md-6 text-left"><p class="date"></p></div>
                                      <div class="col-md-6 text-right"><a href="/'.$contentName.'" target="_BLANK" class="seeProject">local<span style="margin-right:7px;"></span><i class="zmdi zmdi-caret-right-circle zmdi-hc-fw arrowLink"></i></a></div>
                                  </div>
                              </div>
                          </div>
                      </div>';
}
return $repositories;
