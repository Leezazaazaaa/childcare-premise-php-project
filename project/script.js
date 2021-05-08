function func(event){
    // debugger;
    var fullDay = document.getElementById("type1");
    var time1 = document.getElementById("time1");
    var halfDay = document.getElementById("type2");
    var time2 = document.getElementById("time2");

    if(document.getElementById("type1").checked){
      time1.style.display = "block";
    }
    else if (document.getElementById("type2").checked){
      time2.style.display = "block";
    }
    else{
          fullDay.style.display = "none";
          time1.style.display = "none";
          halfDay.style.display = "none";
          time2.style.display = "none";

    }


}
