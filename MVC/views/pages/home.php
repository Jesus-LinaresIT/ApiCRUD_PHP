<?php
if(!isset($_SESSION["loginValidate"])){
  echo "<script>window.location='index.php?pages=login'</script>";

  return;
}else{
  if(!$_SESSION["loginValidate"]== "ok"){
    echo "<script>window.location='index.php?pages=login'</script>";

    return;
  }
}

$users = ControllerUser::ctrGetDataUser();

?>

<table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $key => $value): ?>

                <tr>
                <td><?php echo ($key+1 ) ?></td>
                <td><?php echo $value['username'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['date'] ?></td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button>
                    <buttton class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></buttton>
                  </div>
                </td>
              </tr>
              <?php endforeach ?>

            </tbody>
          </table>