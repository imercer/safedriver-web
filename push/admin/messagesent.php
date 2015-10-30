    <head><script src="/js/analytics.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
</head>
<body>
<div id="dialog" title="Message Sent" style="z-index: 999">
  <p><?php echo $_GET['type'];?> Message sent to <?php echo $_GET['number'];?> (+android) devices. <?php echo $_GET['twitter'];?>.</p>
</div>
<iframe src="index.php" seamless="" width="100%" height="100%" scrolling="no" frameborder="0" style="z-index: 999"/>

</body>