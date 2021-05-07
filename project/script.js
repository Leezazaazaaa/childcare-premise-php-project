function func(event){
<<<<<<< HEAD
  // debugger;
  var cb = document.getElementById("type1");
    var text = document.getElementById("fullDay1");
    var text2 = document.getElementById("fullday1");
    var text3 = document.getElementById("time1");
    var text4 = document.getElementById("halfDay1");
    var text5 = document.getElementById("halfday1");
    var text6 = document.getElementById("time2");

    var ch = document.getElementById("type2");
    var text7 = document.getElementById("fullDay2");
    var text8 = document.getElementById("fullday2");
    var text9 = document.getElementById("time3");
    var text10 = document.getElementById("halfDay2");
    var text11 = document.getElementById("halfday2");
    var text12 = document.getElementById("time4");

    var ch2 = document.getElementById("type3");
    var text13 = document.getElementById("fullDay3");
    var text14 = document.getElementById("fullday3");
    var text15 = document.getElementById("time5");
    var text16 = document.getElementById("halfDay3");
    var text17 = document.getElementById("halfday3");
    var text18 = document.getElementById("time6");

    var ch3 = document.getElementById("type4");
    var text19 = document.getElementById("fullDay4");
    var text20 = document.getElementById("fullday4");
    var text21 = document.getElementById("time7");
    var text22 = document.getElementById("halfDay4");
    var text23 = document.getElementById("halfday4");
    var text24 = document.getElementById("time7");

  if(document.getElementById("type1").checked){
    document.querySelectorAll('.reg-option').forEach(function(el){
      el.style.display = 'none';
    });

    document.getElementById("dayCareInfo1").style.display = "block";
    // document.getElementById("reg-option").style.display = "block";

        text.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "block";
        text4.style.display = "block";
        text5.style.display = "block";
        text6.style.display = "block";
        window.onclick = e => {
          var id = e.target.id + "-option";
          if(e.target.className == "day-field"){
            // if(document.getElementsByClassName("day-field").checked){
              document.querySelectorAll('.day-field').forEach(el => {
                el.style.display = 'none';
              });

              // document.querySelectorAll('.day-field').forEach((function(el) {
              //   el.style.display = 'none';
              // });

              document.getElementById(id).style.display = "block";
            // }
          }
          // console.log(e.target);  // to get the element
          // console.log(e.target.tagName);  // to get the element tag name alone
        }

  }
  else if (document.getElementById("type2").checked) {
    document.querySelectorAll('.reg-option').forEach(function(el){
      el.style.display = 'none';
    });
    document.getElementById("dayCareInfo2").style.display = "block";
      text7.style.display = "block";
      text8.style.display = "block";
      text9.style.display = "block";
      text10.style.display = "block";
      text11.style.display = "block";
      text12.style.display = "block";

  }

  else if (document.getElementById("type3").checked) {
    document.querySelectorAll('.reg-option').forEach(function(el){
      el.style.display = 'none';
    });
    document.getElementById("dayCareInfo3").style.display = "block";
    text13.style.display = "block";
    text14.style.display = "block";
    text15.style.display = "block";
    text16.style.display = "block";
    text17.style.display = "block";
    text18.style.display = "block";

  }

  else if (document.getElementById("type4").checked) {
    document.querySelectorAll('.reg-option').forEach(function(el){
      el.style.display = 'none';
    });
    document.getElementById("dayCareInfo4").style.display = "block";
    text19.style.display = "block";
    text20.style.display = "block";
    text21.style.display = "block";
    text22.style.display = "block";
    text23.style.display = "block";
    text24.style.display = "block";

  }

  else{
        text.style.display = "none";
        text2.style.display = "none";
        text3.style.display = "none";
        text4.style.display = "none";
        text5.style.display = "none";
        text6.style.display = "none";
        text7.style.display = "none";
        text8.style.display = "none";
        text9.style.display = "none";
        text10.style.display = "none";
        text11.style.display = "none";
        text12.style.display = "none";
        text13.style.display = "none";
        text14.style.display = "none";
        text15.style.display = "none";
        text16.style.display = "none";
        text17.style.display = "none";
        text18.style.display = "none";
        text19.style.display = "none";
        text20.style.display = "none";
        text21.style.display = "none";
        text22.style.display = "none";
        text23.style.display = "none";
        text24.style.display = "none";
  }


}

// show passpord function

function FunctionPass() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
=======
    // debugger;
    var cb = document.getElementById("type1");
      var text = document.getElementById("fullDay1");
      var text2 = document.getElementById("fullday1");
      var text3 = document.getElementById("time1");
      var text4 = document.getElementById("halfDay1");
      var text5 = document.getElementById("halfday1");
      var text6 = document.getElementById("time2");

      var ch = document.getElementById("type2");
      var text7 = document.getElementById("fullDay2");
      var text8 = document.getElementById("fullday2");
      var text9 = document.getElementById("time3");
      var text10 = document.getElementById("halfDay2");
      var text11 = document.getElementById("halfday2");
      var text12 = document.getElementById("time4");

      var ch2 = document.getElementById("type3");
      var text13 = document.getElementById("fullDay3");
      var text14 = document.getElementById("fullday3");
      var text15 = document.getElementById("time5");
      var text16 = document.getElementById("halfDay3");
      var text17 = document.getElementById("halfday3");
      var text18 = document.getElementById("time6");

      var ch3 = document.getElementById("type4");
      var text19 = document.getElementById("fullDay4");
      var text20 = document.getElementById("fullday4");
      var text21 = document.getElementById("time7");
      var text22 = document.getElementById("halfDay4");
      var text23 = document.getElementById("halfday4");
      var text24 = document.getElementById("time7");

    if(document.getElementById("type1").checked){
      document.querySelectorAll('.reg-option').forEach(function(el){
        el.style.display = 'none';
      });

      document.getElementById("dayCareInfo1").style.display = "block";
      // document.getElementById("reg-option").style.display = "block";

          text.style.display = "block";
          text2.style.display = "block";
          text3.style.display = "block";
          text4.style.display = "block";
          text5.style.display = "block";
          text6.style.display = "block";
          window.onclick = e => {
            var id = e.target.id + "-option";
            if(e.target.className == "day-field"){
              // if(document.getElementsByClassName("day-field").checked){
                document.querySelectorAll('.day-field').forEach(el => {
                  el.style.display = 'none';
                });

                // document.querySelectorAll('.day-field').forEach((function(el) {
                //   el.style.display = 'none';
                // });

                document.getElementById(id).style.display = "block";
              // }
            }
            // console.log(e.target);  // to get the element
            // console.log(e.target.tagName);  // to get the element tag name alone
          }

    }
    else if (document.getElementById("type2").checked) {
      document.querySelectorAll('.reg-option').forEach(function(el){
        el.style.display = 'none';
      });
      document.getElementById("dayCareInfo2").style.display = "block";
        text7.style.display = "block";
        text8.style.display = "block";
        text9.style.display = "block";
        text10.style.display = "block";
        text11.style.display = "block";
        text12.style.display = "block";

    }

    else if (document.getElementById("type3").checked) {
      document.querySelectorAll('.reg-option').forEach(function(el){
        el.style.display = 'none';
      });
      document.getElementById("dayCareInfo3").style.display = "block";
      text13.style.display = "block";
      text14.style.display = "block";
      text15.style.display = "block";
      text16.style.display = "block";
      text17.style.display = "block";
      text18.style.display = "block";

    }

    else if (document.getElementById("type4").checked) {
      document.querySelectorAll('.reg-option').forEach(function(el){
        el.style.display = 'none';
      });
      document.getElementById("dayCareInfo4").style.display = "block";
      text19.style.display = "block";
      text20.style.display = "block";
      text21.style.display = "block";
      text22.style.display = "block";
      text23.style.display = "block";
      text24.style.display = "block";

    }

    else{
          text.style.display = "none";
          text2.style.display = "none";
          text3.style.display = "none";
          text4.style.display = "none";
          text5.style.display = "none";
          text6.style.display = "none";
          text7.style.display = "none";
          text8.style.display = "none";
          text9.style.display = "none";
          text10.style.display = "none";
          text11.style.display = "none";
          text12.style.display = "none";
          text13.style.display = "none";
          text14.style.display = "none";
          text15.style.display = "none";
          text16.style.display = "none";
          text17.style.display = "none";
          text18.style.display = "none";
          text19.style.display = "none";
          text20.style.display = "none";
          text21.style.display = "none";
          text22.style.display = "none";
          text23.style.display = "none";
          text24.style.display = "none";
    }


>>>>>>> 8d04a3c7a5c21afaf508261ba08f6371ed97ce94
}
