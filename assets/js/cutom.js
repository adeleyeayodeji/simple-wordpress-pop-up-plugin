function dismissNotice() {
  document.getElementById("addressNotice").style.display = "none";
}

//display notice
function displayNotice() {
  document.getElementById("addressNotice").style.display = "flex";
}

//search and replace text in a
const links = document.querySelectorAll("a");
links.forEach((link) => {
  if (link.textContent.includes("18208 Preston rd Suite D7 Dallas TX 75252")) {
    link.innerText = "18216 Preston Road, Suite B-3 #103 Dallas, TX, 75252";
    //add color white
    link.style.color = "white";
  }
});
