<?php
  class ResourceLoader{
    private  $databaseConnection = null;
    private  $cacheFileContent = null;

    public function getDatabaseConnection() {
        if($this->databaseConnection == null){
            echo "Lazy loading database connection...\n";
            $dsn = "mysql:host=localhost;dbname=example_db";
            $this->databaseConnection = new PDO($dsn, 'root', '');
        }
        return $this->databaseConnection;
    }

    public function getFileContents($filePath){
        if($this->cacheFileContent === null){
            echo "Lazy loading file contents...\n";
            $this->cacheFileContent = file_get_contents($filePath);
        }
        return $this->cacheFileContent;
    }
  }

$loader = new ResourceLoader();
// Lazy load resources only when needed
$db = $loader->getDatabaseConnection();
$filecontents = $loader->getFileContents('test.txt');

?>