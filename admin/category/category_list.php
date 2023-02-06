<?php include 'view/header_admin.php'; ?>
  <div class="container section table-border page-overlay"> 
    <div class="row">
      <div class="col-12">
        <h2 class="section-head">Category Manager</h2>
      </div>
      <div class="col-md-4 mx-auto">
        <table class="table table-content table-border">
          <?php foreach ($categories as $category) : ?>
            <tr style="border-top: solid 1px #333; box-shadow: #000 0 -1px 0">
              <form action="index.php" method="post" >
                <td>
                  <div class="form-group text-box">
                    <input type="text" name="name" value="<?php echo $category['categoryName']; ?>">
                  </div>
                </td>
                <td>
                    <input type="hidden" name="action" value="update_category" />
                    <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                    <div class="form-group">
                      <button class="btn btn-warning btn-block" value="Update"><span class="fa fa-edit"></span></button>
                    </div>
                </td>
              </form>
              <td>
                <?php if ($category['productCount'] == 0) : ?> <!-- The colon-style IF terminates with ENDIF, which is more visible than an ending curly brace -->
                  <form action="index.php" method="post" >
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                    <div class="form-group">
                      <button class="btn btn-danger btn-block" value="Delete"><span class="fa fa-trash"></button>
                    </div>
                  </form>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
        <hr class="hr">            
          
        <h4 class="section-head">Add Category</h4>
        <table>
          <tr>
            <form action="index.php" method="post">
              <input type="hidden" name="action" value="add_category">
              <td>
                <div class="form-group text-box">
                  <input type="input" name="name">
                </div>  
              </td>
              <td>
                <div class="form-group">
                  <button class="btn btn-warning btn-block" value="Add"><span class="fa fa-plus"></button>
                </div>
              </td>   
            </form>
          </tr>
        </table>
      </div>
    </div>
  </div>
<?php include 'view/footer.php'; ?>