<?php 
include "header.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped products">
              <thead>
                  <tr>
                      <th style="width: 1%">ID</th>
                      <th style="width: 12%">NAME</th>
                      <th style="width: 10%">IMAGE</th>
                      <th style="width: 30%;text-align: center;">DESCRIPTION</th>
                      <th>PRICE </th>
                      <th style="width: 8%" class="text-center">Manufacture</th>
                      <th style="width: 8%" class="text-center">Protypes</th>
                      <th style="width: 5%" class="text-center">SLTK</th>
                      <th style="width: 5%" class="text-center">SLBAN</th>
                      <th style="width: 20%;text-align: center;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $getAllProducts = $product->getAllProducts();
                    foreach($getAllProducts as $value):
                  ?>
                  <tr>
                      <td style="text-align: center;">
                          <?php echo $value['ID']; ?>
                      </td>
                      <td>
                        <?php echo $value['NAME']; ?>
                      </td>
                      <td>
                        <img width = "50px" src="../img/<?php echo $value['IMAGE'] ?>" alt="">
                      </td>
                      <td class="project_progress" class="overflow" >
                      <?php echo $value['DESCRIPTION']; ?>
                      </td>
                      <td class="project_progress">
                      <?php echo number_format( $value['PRICE']); ?> VND
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success" style="text-align: center;"><?php echo $value['MANU_NAME']; ?></span>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success" style="text-align: center;"><?php echo $value['TYPE_NAME']; ?></span>
                      </td>
                      <td class="project_progress" class="overflow" style="text-align: center;">
                      <?php echo $value['SLTK']; ?>
                      </td>
                      <td class="project_progress" class="overflow" style="text-align: center;">
                      <?php echo $value['SLBAN']; ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm " href="editproduct.php?id=<?php echo $value['ID']?>&manu_id=<?php echo $value['MANU_ID'] ?>"style="margin-right: 10px;">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a onclick="alert('Dlete Product Success')" class="btn btn-danger btn-sm" href="delproduct.php?id=<?php echo $value['ID'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                 <?PHP endforeach; ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php" ?>
