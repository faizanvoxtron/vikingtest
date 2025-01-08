<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="We’re dedicated to design custom and affordable websites for your business. Reach us today to discuss your project!">
   <title>Custom Logo Design Services | Design Vikings</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="assets/img/svg/favicon.svg" sizes="16x16">
   <link rel="stylesheet" href="assets/css/plugin.css" async>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">



   <style>
       * {
       font-family: 'Poppins', sans-serif;
        font-family: 'Quicksand', sans-serif;
       }
      .data {
          width: 100%;
          display: inline-flex;
      }
      .title {
          min-width: 150px;
          max-width: 150px;
          font-weight: 700;
      }
      .value {
          min-width: 280px;
          font-weight: 600;

      }
      .title, .value {
          padding: 10px 10px;
          border: 1px solid rgba(0,0,0,0.2);
      }
   </style>
</head>

<body>
    <div class="main-container">
    <?php
    
        // Functionality of the page    
        include_once('../service/connectionClass.php');
        include_once('../service/encryption.php');
    
        $db = new database();   
        $enc = new encryption();
        
        if (isset($_GET['value'])) {
            
            $url = $enc->decrypt($_GET['value']); 
            $url = explode(",",$url);
            $tx = $db->selectData($url[0],array(),"id=".$url[1]);
            $data = $tx['data'][0];
            foreach (array_keys($data) as $item) {
                if (gettype($item) == "integer") {
                    // do nothing
                } else {
            ?>
                    <div class="data">
                        <div class="title">
                            <?=$item?> :
                        </div>
                        <div class="value">
                            <?=$data[$item]?>
                        </div>    
                    </div>
            <?php
                }
            }
        } else {
            echo '<h1 style="text-align:center;">Not a valid URL</h1>';
        }
    
    ?>
    </div>
</body>
</html>