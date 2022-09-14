<h1>upload file</h1>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <button type="submit">Upload file</button>
</form>
  