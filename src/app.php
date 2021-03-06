<?php
// Autoload Packagist libraries with the Composer built-in autoloader
require __DIR__ . '/../vendor/autoload.php';

// The Finder component finds files and directories
use Symfony\Component\Finder\Finder;
// PHP Markdown parser
use Michelf\Markdown;

// Init repositories
$repositories = '';

// Server version and virtual hostname
$wampConfig = $_SERVER['SERVER_SIGNATURE'];

// Filter files and directories inside www folder excluding the Wampindexer application using Finder
$finder = new Finder();
$finder->in(__DIR__ . '\..\..')->depth('== 0')->exclude('_wampindexer')->notName('index.php')->sortBytype();

// No repositories
if (!count($finder)) {
    return  $repositories  .= '<div class="grid"><div class="card animation-demo" id="titre"><div class="card-header">You dont have any repository yet !</div></div></div>';
}
// Get repositories
else {
    foreach ($finder as $content) {
        // Folder or File name
        $contentName = $content->getRelativePathname();

        // Folder or File extension
        $extension =  pathinfo($contentName, PATHINFO_EXTENSION);

        // Img & Icon for repositories types
        if ($extension == "fr" || $extension == "com" || $extension == "org" || $extension == "eu" || $extension == "be") {
            // Type - site
            $contentIcon = "../_wampindexer/web/img/site.png";
            $contentImg = "<img src='/" . $contentName . "/screenshot.png' alt='' class='animated site-extension extensions'>";
        } elseif ($extension == "email") {
            // Type - email
            $contentIcon = "../_wampindexer/web/img/email.png";
            $contentImg = "<img src='/" . $contentName . "/screenshot.png' alt='' class='animated email-extension extensions'>";
        } elseif ($extension == "") {
            // Type - folder 
            $contentIcon = "../_wampindexer/web/img/folder.png";
            $contentImg = "<img src='/" . $contentName . "/screenshot.png' alt='' class='animated repository-extension extensions'>";
        } else {
            // Type - file
            $contentIcon = "../_wampindexer/web/img/" . $extension . ".png";
            $contentImg = "<img class='file-extension extensions'>";
        }

        // Folder or File description using Markdown
        $contentReadme = $contentName . '/README.md';

        if (!file_exists($contentReadme)) {
            $description = "";
        } else {
            $contentReadmeMarkdown = Markdown::defaultTransform(file_get_contents($contentReadme));
            $description = '<span class="readmore">README.md</span><span class="see-readmore animated">' . $contentReadmeMarkdown . '</span>';
        }

        // Folder or File last update
        $stat = stat($contentName);
        $lastUpdate = date('d/m/Y', $stat['mtime']);

        // Repositories
        $repositories  .= '<div class="grid col-md-4">
                            <div class="grid repository-container" id="' . $contentName . '">
                              <div class="card animation-demo" id="titre">
                                  <div class="card-header">
                                      <h2><span><a href="/' . $contentName . '" class="project">' . $contentName . '</a></span><span><img src="/' . $contentIcon . '" alt="" class="icon"></span></h2>
                                  </div>
                                  <a href="/' . $contentName . '">
                                      <div class="card-body">' . $contentImg . '</div>
                                  </a>
                                  <div class="card-header description">
                                    <h3><small>' . $description . '</small></h3>
                                      <div class="row">
                                          <div class="col-md-6 text-left"><p class="date">' . $lastUpdate . '</p></div>
                                          <div class="col-md-6 text-right"><a href="/' . $contentName . '" class="seeProject">local<span style="margin-right:7px;"></span><i class="zmdi zmdi-caret-right-circle zmdi-hc-fw arrowLink"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>';
    }
}

return $repositories;
