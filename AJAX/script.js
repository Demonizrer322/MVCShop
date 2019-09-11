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
        i=0;
        // foreach 9
        i++
        var user = JSON .parse(data);
        str1="#ContainerDiv{i}";
        str2="#ContainerDiv";
        $("#ContainerDiv{i}").load("add.html #Container");
        $("").attr('', '')
        // // foreach 9
    });
});
