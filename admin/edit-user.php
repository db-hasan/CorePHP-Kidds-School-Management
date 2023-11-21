<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();

  $id=$_GET['e'];
  $sel="SELECT * FROM users WHERE user_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);

  if(!empty($_POST)){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $user=$_POST['username'];
    $role=$_POST['role'];
    $image=$_FILES['pic'];

    $update="UPDATE users SET user_name='$name', user_phone='$phone', user_email='$email', user_username='$user', role_id='$role' WHERE user_id='$id'";

    if(!empty($name)){
      if(!empty($user)){
        if(!empty($role)){
          if(mysqli_query($con,$update)){
            if($image['name']!=''){
              $imageName='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
              $updateImg="UPDATE users SET user_photo='$imageName' WHERE user_id='$id'";
              if(mysqli_query($con,$updateImg)){
                move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                header('Location: view-user.php?v='.$id);
              }else{
                echo "User image update failed.";
              }
            }
            header('Location: view-user.php?v='.$id);
          }else{
            echo "User information update failed.";
          }
        }else{
          echo "Please select user role.";
        }
      }else{
        echo "Please enter username.";
      }
    }else{
      echo "Please enter your name.";
    }
  }
?>
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Update User Information
                    </div>
                    <div class="col-md-4 card_button_part">
                        <a href="all-user.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="name" value="<?= $data['user_name']; ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="phone" value="<?= $data['user_phone']; ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control form_control" id="" name="email" value="<?= $data['user_email']; ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="username" value="<?= $data['user_username']; ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label>
                    <div class="col-sm-4">
                      <select class="form-control form_control" id="" name="role">
                        <option value="">Select Role</option>
                        <?php
                          $selr="SELECT * FROM roles ORDER BY role_id='ASC'";
                          $Qr=mysqli_query($con,$selr);
                          while($urole=mysqli_fetch_assoc($Qr)){
                        ?>
                        <option value="<?= $urole['role_id']; ?>" <?php if($data['role_id']==$urole['role_id']){ echo 'selected';} ?>><?= $urole['role_name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control form_control" id="" name="pic">
                    </div>
                    <div class="col-sm-2">
                      <?php if($data['user_photo']!=''){ ?>
                        <img class="img100" src="uploads/<?= $data['user_photo']; ?>" alt="Image"/>
                      <?php }else{ ?>
                        <img class="img100" src="images/avatar.jpg" alt="Image"/>
                      <?php } ?>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
              </div>
            </div>
        </form>
    </div>
</div>
<?php
  get_footer();
?>
