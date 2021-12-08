<?php 
session_start();
include "header.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">         
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Your Cart</li>
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
          <h3 class="card-title">Your Cart</h3>
          <?php
            if (isset($_GET['id'])){
              $cart = array();
              $id = $_GET['id'];
              if (isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]++;
              }else{
                $_SESSION['cart'][$id] = 1;
              } 
            }
            $cart = $_SESSION['cart'];
          ?>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped products">
              <thead>
                  <tr>
                      <th style="width: 12%">NAME</th>
                      <th style="width: 10%">IMAGE</th>
                      <th style="width: 40%;text-align: center;">DESCRIPTION</th>
                      <th>PRICE </th>
                      <th style="width: 8%" class="text-center">Manufacture</th>
                      <th style="width: 8%" class="text-center">Protypes</th>
                      <th style="width: 5%" class="text-center">SL</th>
                      <th style="width: 10%;text-align: center;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  if($cart != null){
                    foreach($cart as $key=>$value1):
                      $getAllProducts = $product->getAllProducts();
                      foreach($getAllProducts as $value):
                        if($value['ID'] == $key){
                  ?>
                  <tr>
                      <td>
                        <?php echo $value['NAME']; ?>
                      </td>
                      <td>
                        <img width = "50px" src="img/<?php echo $value['IMAGE'] ?>" alt="">
                      </td>
                      <td class="project_progress" class="overflow" >
                      <?php echo $value['DESCRIPTION']; ?>
                      </td>
                      <td class="project_progress">
                      <?php echo number_format( $value['PRICE']); ?> VND
                      </td>
                      <?php 
                        $getAllManufactures = $manufacture->getAllManufactures();
                        foreach ($getAllManufactures as $value2){
                          if($value['MANU_ID'] == $value2['MANU_ID']){
                      ?>
                      <td class="project-state" style="text-align: center;">
                          <span class="badge badge-success"><?php echo $value2['MANU_NAME']; ?></span>
                      </td>
                      <?php } ?>
                      <?php } ?>
                      <?php 
                        $getAllProtype = $protype->getAllProtype();
                        foreach ($getAllProtype as $value3){
                          if($value['TYPE_ID'] == $value3['TYPE_ID']){
                      ?>
                      <td class="project-state" style="text-align: center;">
                          <span class="badge badge-success"><?php echo $value3['TYPE_NAME']; ?></span>
                      </td>
                      <?php } ?>
                      <?php } ?>
                      <td style="text-align: center;">
                      <input aria-label="quantity" class="input-qty" max="<?php echo $value['SLTK']; ?>" min="1" name="" type="number" value="<?php echo $value1; ?>">
                      </td>                                                                
                      <td class="project-actions text-right" style="text-align: center;">
                          <a class="btn btn-danger btn-sm" href="delcart.php?id=<?php echo $value['ID'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php } ?>
                 <?PHP endforeach; ?>
                 <?PHP endforeach; ?>
                 <?php } ?>
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
