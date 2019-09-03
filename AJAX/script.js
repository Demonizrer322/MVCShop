$("#loadAjax").click(function(){
    $("#ContainerDiv").load("add.html #Container");
});
$("#postAjax").click(function(){
    $.post("ajax.php", {
        id : "123",
        user: "Demon",
        login: "login",
        password: "12345"
    }, function(data){
        var user = JSON .parse(data);
        $("#myTable").append(`<tr><td>${user[0]}</td><td>${user[1]}</td><td>${user[2]}</td><td>${user[3]}</td></tr>`);
    });
});
