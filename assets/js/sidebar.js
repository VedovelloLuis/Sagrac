const sidebarCollapse = document.getElementById("sidebarCollapse");
const sidebar = document.getElementById("sidebar");

sidebarCollapse.addEventListener("click", () => {
  sidebarCollapse.classList.toggle("active");
  sidebar.classList.toggle("active");
});

$(window).on('load', function() {
  $('#mdb-preloader').delay(1000).fadeOut(300);
});