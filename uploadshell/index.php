<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap');
body {
    font-family: Kanit;
    position: absolute;
    width: 500px;
    height: 500px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
  }
</style>
</head>
<title>UPLOAD</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
<h1>อัพโหลดรูปภาพ</h1>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
     <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<input class="btn btn-primary" type="submit" value="UPLOAD"></form>
</body>
</html>