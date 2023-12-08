<?php include_once("header.php");

if (isset($_REQUEST['btn-register'])) {
    setcookie("username", $_POST['username'], time() + 3600);
    setcookie("password", $_POST['password'], time() + 3600);
    setcookie("email", $_POST['email'], time() + 3600);
    setcookie("mobile", $_POST['mobile'], time() + 3600);
    header("location:Login.php");
}


?>
<!-- <h2>Login page</h2> -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-5">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Todo</div>
                <div class="card-body">
                    <form method="post" id="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Enter User Name" class="form-control" name="title" id="todotitle">
                            </div>
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add" name="btn-regist" id="">
                                <input type="reset" class="btn btn-danger" name="" id="">
                            </div>
                        </div>
                    </form>

                    <table class="table table-bordered mt-3 table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="dispTodo"></tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
      let fetchData = ()=>{
        fetch("http://localhost/laravel/17JulyPHPMWF9/MWF2/19API/getalltodo").then((response)=>response.json()).then((result)=>{
            console.log(result);
            htmlTable = ""
            result.Data.forEach(element => {
                console.log(element);
                htmlTable += `<tr><td>${element.title}</td><td> <button onclick="getdatabyid(${element.id})">Edit</button></td></tr>`
            });        
            console.log(htmlTable);
            $("#dispTodo").html(htmlTable)
        })
    }
    fetchData()
    function getdatabyid(id) {
        fetch("http://localhost/laravel/17JulyPHPMWF9/MWF2/19API/gettodobyid?id="+id).then((response)=>response.json()).then((result)=>{
                console.log(result);
                $("#todotitle").val(result.Data[0].title) 
                // fetchData()
            })
    }
    $('#form').submit(function(evt) {
        console.log("called");
        evt.preventDefault();
        let todoTitle = $("#todotitle").val() 
        console.log(todoTitle);
        if (todoTitle == "") {
            alert("title required")
        } else {
            fetch("http://localhost/laravel/17JulyPHPMWF9/MWF2/19API/addtodo", {
                method: "POST", // *GET, POST, PUT, DELETE, etc.
                headers: {
                    "Content-Type": "application/json", // sent request
                    "Accept": "application/json" // expected data sent back
                },
                body: JSON.stringify({'title':todoTitle}), // body data type must match "Content-Type" header
            }).then((response)=>response.json()).then((result)=>{
                console.log(result);
                $("#todotitle").val("") 
                fetchData()
            })
        }
    });
  
</script>
</body>

</html>