<?php
require __DIR__ . '\..\vendor\autoload.php';

$wampConfig = $_SERVER['SERVER_SIGNATURE'];

$repository   = opendir('.');
$repositories = '';
$reposIgnore  = array('.','..');

while ($name = readdir($repository)) {
    if (is_dir($name) && !in_array($name, $reposIgnore)) {
        if ($socket =@ fsockopen($name, 80, $errno, $errstr, 30)) {
            $status = '<div class="'.$name.' hideDiv">Online</div>';
            echo $status;
            fclose($socket);
        } else {
            $status = '<div class="'.$name.' hideDiv">Down</div>';
            echo $status;
        }

        $screenshot = file_exists($name.'/screenshot.png') ? $name.'/screenshot.png' : $name;
        $repositoryDate = date("d.m.y", filectime($name));

        if (file_exists($name.'/README.md')) {
            $readmeContent = file_get_contents($name.'/README.md', true);
        } else {
            $readmeContent = "No README.md find on your repository";
        }

        $repositories  .= '<div class="grid" id="'.$name.'">
                              <div class="card animation-demo" id="titre">
                                  <div class="card-header">
                                      <h2><span><a href="/'.$name.'" target="_BLANK" class="project">'.$name.'</a></span></h2>
                                  </div>
                                  <a href="/'.$name.'" target="_BLANK">
                                      <div class="card-body">
                                          <img src="'.$screenshot.'" alt="" class="animated">
                                      </div>
                                  </a>
                                  <div class="card-header">
                                      <h3><small>'.$readmeContent.'</small></h3>
                                      <div class="row">
                                          <div class="col-md-6 text-left"><p class="date">'.$repositoryDate.'</p></div>
                                          <div class="col-md-6 text-right"><a href="/'.$name.'" target="_BLANK" class="seeProject">local<span style="margin-right:7px;"></span><i class="zmdi zmdi-caret-right-circle zmdi-hc-fw arrowLink"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>';
    }
}
closedir($repository);
