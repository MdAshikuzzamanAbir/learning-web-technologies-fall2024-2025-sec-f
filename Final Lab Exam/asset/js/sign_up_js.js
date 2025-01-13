function check_name1(event){
    let username_text = document.getElementById("name_id").value;
    let username_text1 = username_text.trim();
    if(username_text1 == ""){
        document.getElementById("check_name").style="display:inline-block";
        document.getElementById("check_name").style="color:red";
    }
    else{
        document.getElementById("check_name").style="display:none";
    }
}