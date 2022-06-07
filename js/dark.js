document.getElementById("toggleTheme").addEventListener("click", () => {
  const bodyList = document.body.classList;
  bodyList.contains("dark") ?
    bodyList.remove("dark") :
    bodyList.add("dark")
})