<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Profile</b></h5>
  </div>


  <b>
    <hr color="red" />
  </b>


  <div class="card">
    <div class="card-body" style="color: black;">
      <form>

        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" value="<?= $user['email'] ?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>

    </div>
  </div>
</div>