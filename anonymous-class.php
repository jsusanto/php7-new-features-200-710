<?php
include "header.php";
?>

<h3>Anonymous Class</h3>
<pre>
   interface Logger {
      public function log(string $msg);
   }

   class Application {
      private $logger;

      public function getLogger(): Logger {
         return $this->logger;
      }

      public function setLogger(Logger $logger) {
         $this->logger = $logger;
      }  
   }

   $app = new Application;
   $app->setLogger(new class implements Logger {
      public function log(string $msg) {
         print($msg);
      }
   });

   $app->getLogger()->log("My first Log Message");
</pre>
Output:
<pre>
<?php
   interface Logger {
      public function log(string $msg);
   }

   class Application {
      private $logger;

      public function getLogger(): Logger {
         return $this->logger;
      }

      public function setLogger(Logger $logger) {
         $this->logger = $logger;
      }  
   }

   $app = new Application;
   $app->setLogger(new class implements Logger {
      public function log(string $msg) {
         print($msg);
      }
   });

   $app->getLogger()->log("My first Log Message");
?>
</pre>
<p style="text-align:center"><a href="../php-7-tutorial/index.php">Back to main menu</a></p>

</section>
</body>