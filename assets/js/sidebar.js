const sidebarCollapse = document.getElementById("sidebarCollapse");
const sidebar = document.getElementById("sidebar");

sidebarCollapse.addEventListener("click", () => {
  sidebarCollapse.classList.toggle("active");
  sidebar.classList.toggle("active");
});