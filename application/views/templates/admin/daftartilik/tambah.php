<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Form Tambah Daftar Tilik</b></h5>
  </div>

  <b>
    <hr color="red" />
  </b>

  <div class="card" style="color: black;">
  <div class="card-body">
<form onsubmit="return validateForm();" method="post" action="...">
  <!-- <input type="text" name="myinput[]" /> -->
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Tanggal DE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="text">
    </div>
  </div>
  
</form>
  <!-- Tambahkan input tambahan sesuai kebutuhan -->
  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label ">Dokumen Terkait</label>
    <div id="inputContainer">
    <div class="col-sm-10">
      <input type="text" name="myinput[]" class="form-control" />
    </div>
  <button type="button" onclick="addInputField()">Tambah</button>
  <!-- <button type="button" onclick="removeInputField(this)">Hapus</button> -->
  <button type="submit">Kirim</button>
  </div>
</form>


<!-- <script>
  function addInputField() {
    var inputContainer = document.getElementById('inputContainer');

    var newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.name = 'myinput[]';

    inputContainer.appendChild(newInput);
  }
</script>  -->

<script>
  function addInputField() {
    var inputContainer = document.getElementById('inputContainer');

    var inputWrapper = document.createElement('div');

    var newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.name = 'myinput[]';

    var removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.innerHTML = 'Hapus';
    removeButton.onclick = function() {
      removeInputField(this);
    };

    inputWrapper.appendChild(newInput);
    inputWrapper.appendChild(removeButton);

    inputContainer.appendChild(inputWrapper);
  }

  function removeInputField(button) {
    var inputContainer = document.getElementById('inputContainer');
    var inputWrapper = button.parentNode;
    inputContainer.removeChild(inputWrapper);
  }
</script>

</div>
</div>