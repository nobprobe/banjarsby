function showinsertdata(url) {
    $.ajax({url: url, success: function (result) {
                document.getElementById('modal_content').innerHTML = result;
        
    }});
   alert("ddd");         
    $("#uploadModal").modal("show");
}

