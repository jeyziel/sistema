<?php include ("includes/header.php"); ?>
</head>
<body>
<?php include ("includes/topo.php"); ?>


<?php
  if(isset($_GET['acao'])){
      $acao = $_GET['acao'];
//inicio
      if($acao=='welcome'){
          include ("pages/inicio.php");
      }
//cadastro
      if($acao=='cad-postagem'){
          include ("pages/cad-postagem.php");
      }




  }else{
      include ("pages/inicio.php");


  }
?>
<?php include ("includes/footer.php"); ?>
</body>
</html>
