<form action="upload.php" method="post" enctype="multipart/form-data" target="uploadTarget" onsubmit="startUpload();">
    <p id="uploadForm" align="center"><br />
        <label>
            File: <input name="myfile" id="myfile" onchange="uploadfile()" type="file" size="30" />
        </label>
        <label>
            <input type="submit" name="submitBtn" class="sbtn" value="Upload" />
        </label>
    </p>
    <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
</form>
<!-- Uploaded file preview -->
<div>
    <embed id="UploadedFile" src="" width="390px" height="160px">
</div>

<script type="text/javascript">
    function uploadfile(params) {
        var files = document.getElementById("myfile");
        // console.log(files);
        var formData = new FormData();
        formData.append("file", files[0]);
        console.log(formData);
        fetch("url",{ body:formData }).then
    }
</script>