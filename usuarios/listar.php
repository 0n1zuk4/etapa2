<?php
session_start();
include('../verificalogin.php');
include_once("../conexao/conexao.php");
$result_usuario = "SELECT * FROM Usuario";
$resultado_usuario = mysqli_query($conn, $result_usuario);
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Minha empresa | Etapa 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../dash/dash.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="criar-editar.php" class="nav-link">Cadastrar +</a>
      </li>

    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dash/dash.php" class="brand-link">
      <span class="brand-text font-weight-light">Minha empresa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="/dash/dash.php" class="d-block">Usuario: <?php echo $_SESSION['login']?></a>
          <a href="../logout.php">Logout</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="../dash/dash.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../clientes/listar2.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Clientes

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="listar.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Usuarios

              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
            <h1 class="m-0 text-dark">Usuarios</h1>
                
            <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row_usuario['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row_usuario['nome'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row_usuario['login'] ?>
                                    </td>
                                    <td>
                                        <a href="criar-editar.php?id=<?php echo $row_usuario['id'] ?>">
                                            <button type="button" class="btn btn-primary">Editar </button>
                                        </a>
                                        <a href="delete.php?id=<?php echo $row_usuario['id'] ?>">
                                            <button type="button"  class="btn btn-danger">Excluir </button>
                                        </a>
                                    </td>

                                </tr>
                                <?php } ?>

                        </tbody>
                    </table>
                    <?php
                    if(isset($_SESSION['msg']))
                    {
                         echo $_SESSION['msg'];
                         unset($_SESSION['msg']);
                    }
                    ?>
                </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
         
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>