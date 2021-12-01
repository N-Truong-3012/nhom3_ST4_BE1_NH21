<?php include "header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
      if (isset($_GET['id'])) {
      $getProductsByID = $product->getProductsByID($_GET['id']);
      foreach ($getProductsByID as $value) { 
    ?>
      <form action="edit.php?id=<?php echo $value['ID']?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name" value='<?php echo $value['NAME']?>'>
              </div>
              <div class="form-group">
                <label for="inputStatus">Manufacture</label>
                <select id="inputStatus" class="form-control custom-select" name="manu">                  
                  <?php
                    $getAllManus = $manufacture->getAllManufactures();
                    foreach($getAllManus as $value2) {
                      if($value2["MANU_ID"] == $value["MANU_ID"]){
                  ?>
                  <option selected value=<?php echo $value2["MANU_ID"]?>>
                  <?php echo $value2["MANU_NAME"] ?> 
                  </option>
                  <?php }else{ ?>
                  <option value=<?php echo $value2["MANU_ID"]?>>
                  <?php echo $value2["MANU_NAME"] ?> 
                  </option>
        <?php } ?>
      <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select id="inputStatus" class="form-control custom-select" name="protype">
                  <?php
                    $getAllProtypes = $protype->getAllProtype();
                    foreach($getAllProtypes as $value3) {
                      if($value3["TYPE_ID"] == $value["TYPE_ID"]){
                  ?>
                  <option selected value=<?php echo $value3["TYPE_ID"]?>>
                  <?php echo $value3["TYPE_NAME"] ?> 
                  </option>
                  <?php }else{ ?>
                  <option value=<?php echo $value3["TYPE_ID"]?>>
                  <?php echo $value3["TYPE_NAME"] ?> 
                  </option>
                  <?php } ?>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Price</label>
                <input type="text" id="inputName" class="form-control" name="price" value='<?php echo $value['PRICE']?>'>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="description"><?php echo $value['DESCRIPTION']?></textarea>
              </div>
              
              <div class="form-group">
                <label for="inputClientCompany">Image</label>
                <input type="file" id="inputClientCompany" class="form-control" name="img">
                <img src="../img/<?php echo $value['IMAGE'] ?>" alt="" width="20%;">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Feature</label>
                <select class="input-select" name="feature">
                    <option selected><?php echo $value['FEATURE']?></option>
                    <?php if ($value['FEATURE'] == "0") {?>
										<option value="0">1</option>
                    <?php }else{?>
										<option value="1">0</option>
                    <?php } ?>
									</select>
              </div>
              <div class="form-group">
                <label for="inputName">Quantity</label>
                <input type="text" id="inputName" class="form-control" name="SLTK" value='<?php echo $value['SLTK']?>'>
              </div>
            </div>
            <?php } ?>
            <?php } ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="index.php" class="btn btn-secondary">Cancel</a> 
          <input name="submit" onclick="alert(' Edit Product Success')" type="submit" value="Edit Porduct" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php" ?>