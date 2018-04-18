<?php

require __DIR__ . '\..\vendor\autoload.php';

use Symfony\Component\Finder\Finder;

$wampConfig = $_SERVER['SERVER_SIGNATURE'];
$repositories  = '';

$finder = new Finder();
$finder->directories();
$finder->in(__DIR__.'\..\..')->exclude('_wampindexer');
$finder->depth('== 0');

if (!count($finder)) {
    return  $repositories  .= '<div class="grid"><div class="card animation-demo" id="titre"><div class="card-header">You dont have any repository yet !</div></div></div>';
}

foreach ($finder as $folder) {
    // dumps the relative path to the file
    $folderName = $folder->getRelativePathname();
    $repositories  .= '<div class="grid" id="'.$folderName.'">
                          <div class="card animation-demo" id="titre">
                              <div class="card-header">
                                  <h2><span><a href="/'.$folderName.'" target="_BLANK" class="project">'.$folderName.'</a></span></h2>
                              </div>
                              <a href="/'.$folderName.'" target="_BLANK">
                                  <div class="card-body">
                                      <img src="" alt="" class="animated">
                                  </div>
                              </a>
                              <div class="card-header">
                                  <h3><small></small></h3>
                                  <div class="row">
                                      <div class="col-md-6 text-left"><p class="date"></p></div>
                                      <div class="col-md-6 text-right"><a href="/'.$folderName.'" target="_BLANK" class="seeProject">local<span style="margin-right:7px;"></span><i class="zmdi zmdi-caret-right-circle zmdi-hc-fw arrowLink"></i></a></div>
                                  </div>
                              </div>
                          </div>
                      </div>';
}
return $repositories;
