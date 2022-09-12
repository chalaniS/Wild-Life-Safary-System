function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "none";
    } else {
      text.style.display = "block";
    }
  }

  function seemore(){
    document.getElementById("seeMore").innerHTML = "Most significantly, we at Sri Lankan Safari are nature lovers who are passionate about nature and animals, Every safari tour, adventure, and vacation is based on our own personal experiences, all of which have been thoroughly vetted and authenticated.  Every photograph on this website was taken by us and bears witness to our achievements and travels.";
  }