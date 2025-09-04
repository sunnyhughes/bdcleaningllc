	document.addEventListener('DOMContentLoaded', () => {
		console.log('Document is ready!');
	});


function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

 function toggleMenu() {
      const nav = document.getElementById('myLinks');
      nav.classList.toggle('show');
    }