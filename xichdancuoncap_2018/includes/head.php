<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style media="screen">
      .round {
          width: 100%;
          border-radius: 15px;
          border: none;
          padding: 5px 5px 5px 25px;
          box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
      }
      li a.dropdown-toggle{
        color: #1E4490;
      }
      .inner-addon {
      position: relative;
      }

      /* style icon */
      .inner-addon .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
      }

      /* align icon */
      .right-addon .glyphicon {
      right: 5px;
      margin-top:10px;
      }

      /* add padding  */
      .right-addon input {
      padding-right: 30px;

      }
      form{
        margin-left: 75px;
        margin-top: 10px;
      }
    </style>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header -->
    <div class="container" id="menu-bar" >
      <div class="row" id = "Mast_Head">
        <div class="col-lg-4">
          <a href="#"><img src="images/Home-Logo.svg" id = "Logo" alt=""></a>
        </div>
        <div class="col-lg-5">
          <form class="" id="search-form" action="index.php" method="post">
            <div class="search">
              <div class="form-group inner-addon right-addon">
                <label for=""></label>
                  <input type="text" class="form-control round" id="" placeholder="Tìm kiếm...">
                  <i class="glyphicon glyphicon-search form-control-feedback"></i>
              </div>
                <ul id ='loggin_attr'>
                  <li>VI</li>
                  <li>KR</li>
                </ul>
            </div>
          </form>
        </div>
      </div>
