<?php 
$_COOKIE['title'] = 'Create New Post';
include('../include/admin_header.php');?>
<?php $base_url = 'http://'.$_SERVER['SERVER_NAME']; ?>
<?php ?>

<div class="wrapper">
  <?php include('partial/sidebar.php'); ?> 
  <!-- Page Content Holder -->
  <div id="content">
    <!-- top nav bar -->
    <?php include('partial/top-nav.php');?>

    <div class="container">
      <h2> All Post</h2>
      <?php 
       $posts = get_all_posts();
      
      ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($posts as $post){ ?>
            <tr>
            <td><?php echo htmlspecialchars($post['title']); ?></td>
            <td><?php echo htmlspecialchars($post['description']);?></td>
            <td>
              <a href="<?php echo $base_url; ?>/cms/admin/edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary"> edit</a>
              <br/>
              <br/>
             <a  class="btn btn-danger"> delete</a>
           </td>
          </tr>
              
          <?php } ?>
       
          
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php include('../include/footer.php');?>
