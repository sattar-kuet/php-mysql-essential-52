<?php 
$_COOKIE['title'] = 'Create New Post';
include('../include/admin_header.php');
extract($_GET);
$post = get_post_by_id($id);
extract($post);
//print_r($post);
?>


    <div class="wrapper">
    <?php include('partial/sidebar.php'); ?> 
      <!-- Page Content Holder -->
      <div id="content">
          <!-- top nav bar -->
          <?php include('partial/top-nav.php');?>
          <div class="container">
              <h2>Edit Post</h2>

           <?php show_flush_message('success'); ?>
             
              <form action="process/create_post.php" method="post" enctype="multipart/form-data">
               
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input value="<?php echo $title;?>" type="text" class="form-control"  placeholder="Enter Title" name="title">
              </div>

              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea cols="50" class="form-control" placeholder="Enter District" name="description"><?php echo $description; ?>
                  </textarea>
                  
              </div>

              <div class="form-group">
                  <label for="image">Image:</label>
                  <img src="../public/uploads/<?php echo $image;?>">
                  <input type="file" class="form-control"  name="image">
              </div>



              <button type="submit" class="btn btn-primary">Edit Post</button>
          </form>
      </div>

  </div>
</div>

  <?php include('../include/footer.php');?>
