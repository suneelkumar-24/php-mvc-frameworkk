<h1>Register</h1>


<?php $form =  \app\core\form\Form::begin('','post') ?>
    <?php echo $form->field($model,'firstname') ?>
    <?php echo $form->field($model,'lastname') ?>
    <?php echo $form->field($model,'email') ?>
    <?php echo $form->field($model,'password') ?>
    <?php echo $form->field($model,'confrimPassword') ?>
    <?php echo $form->field($model,'firstname') ?>
<?php echo \app\core\form\Form::end() ?>

<!-- <form class=" mark" action="" method="POST"> -->
  <div class="row">
    <div class="col">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstnamae" class="form-control" placeholder="Enter FirstName">
      </div>
    </div>
    <div class="col">

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter LastName">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Password">
  </div>

  <div class="form-group">
    <label>Confrim Password</label>
    <input type="password" name="c_password" class="form-control" placeholder="Enter Confrim Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>