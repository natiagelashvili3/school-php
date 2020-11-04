function confirmDelete(obj, id) {
    var parent = obj.parentNode.parentNode;
    
    if(confirm("Do You Want to Delete The Record?")) {

        var request = new XMLHttpRequest();

        // ფორმის აწყობა
        var data = new FormData();
        data.append('action', 'delete-book');
        data.append('id', id);

        request.open("POST" , "actions.php");
        // რექვესთის გაგზავნა ფორმის პარამეტრებით
        request.send(data);

        // მიღებული პასუხის დამუშავება
        request.onload = function(e){
            if(request.status == 200) {
                var rsp = request.responseText.trim();
                if(rsp == 1) {
                    parent.remove();
                }
            } 
        }
       
    }
    
}