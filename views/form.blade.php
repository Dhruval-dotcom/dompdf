<form method="post" action="getdata" enctype="multipart/form-data">
    @csrf
    <input name="name" type="text"><br>
    <input name="pass" type="text"><br>
    <input name="file" type="file"><br>
    <input name="butt" type="submit"><br>
</form>