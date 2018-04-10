<html>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Truth Table Generator</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="assets/images/profile.png">
</head>
<body>
  <div class="container sections-wrapper">
    <div class="row">
      <div class="primary col-md-12 col-sm-12 col-xs-12">
        <section class="section">
          <div class="section-inner">
            <h2 class='heading'>Truth Table Generator</h2>
            <div class="table-responsive">
              <?php
                $exp = $_POST["exp"];

                echo "Expression: $exp".'</br>';

                $exp = str_replace("*","&&",$exp);
                $exp = str_replace("+","||",$exp);
                $array = [];

                for($x=0; $x < strlen($exp); $x++){
                  if(ctype_alnum($exp[$x])){
                    array_push($array, $exp[$x]);
                  };
                };
                $array = array_unique($array, $sort_flags=SORT_STRING);
                $tempArray=[];
                foreach($array as $value){
                  array_push($tempArray,$value);
                };
                $array = $tempArray;

                $inCount = count($array);
                echo '<table class="table table-bordered table-hover">';

                foreach($array as $value){
                  echo '<th class="table-header-group">'.$value.'</th>';
                };

                echo '<th class="table-header-group">X</th>';
                $x = pow(2,$inCount);
                for($i=0; $i < $x; $i++){
                  $bin = sprintf("%0".$inCount."d", decbin($i));
                  echo '<tr class="table-row">';
                  for($j=0; $j<strlen($bin); $j++){
                    echo '<td class="table-cell">'.$bin[$j].'</td>';
                  };
                  $new_exp = '';


                  for($key=0; $key < strlen($bin); $key++){
                    if ($key == 0){
                      $new_exp = str_replace($array[$key],$bin[$key],$exp);
                    }else{
                      $new_exp = str_replace($array[$key],$bin[$key],$new_exp);
                    };
                  }

                  eval("\$result=$new_exp;");
                  if ($result){
                    echo '<td class="table-row">'.$result.'</td>';
                  }else{
                    echo '<td class="table-row">0</td>';
                  };
                  echo '</tr>';
                };

                echo '</table>';
              ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ******FOOTER****** -->
  <footer class="footer">
      <div class="container text-center">
              <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
              <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
      </div><!--//container-->
  </footer><!--//footer-->

  <!-- Javascript -->
  <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
