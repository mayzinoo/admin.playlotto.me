<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery Admin</title>
    <link type="text/css" href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="/css/theme.css" rel="stylesheet">
    <link type="text/css" href="/css/style.css" rel="stylesheet">
    <link type="text/css" href="/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>

<body>
<?php $this->load->view("header");?>
<div class="wrapper">
      <div class="container">
          <div class="row">
              <div class="span3">
                  <?php $this->load->view("aside");?>
              </div>
              <div class="span9">
                  <div class="content">  
                    <div class="module">                    
                      <?php $this->load->view($content);?>
                    </div>
                  </div>
              </div>
          </div>
      </div>
</div>  
<script type="text/javascript"></script>
<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/flot/jquery.flot.js" type="text/javascript"></script>
<script src="/js/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="/js/common.js" type="text/javascript"></script>      
</body></html>
