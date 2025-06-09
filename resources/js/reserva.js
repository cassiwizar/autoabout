const totalMesas = 20;
const ocupadas = [3, 7, 15];
const mesasSelecionadas = JSON.parse(localStorage.getItem("mesasSelecionadas")) || [];
const container = document.getElementById("restaurant");
const img = document.createElement("img");


for (let i = 1; i <= totalMesas; i++) {
  const div = document.createElement("div");
  div.classList.add("table");
  div.dataset.id = i;
  div.textContent = i; 

  if (ocupadas.includes(i)) {
    div.classList.add("occupied");
  } else if (mesasSelecionadas.includes(i)) {
    div.classList.add("selected");
  }

  div.addEventListener("click", () => {
    if (div.classList.contains("occupied")) return;

    div.classList.toggle("selected");

    const id = parseInt(div.dataset.id);
    const index = mesasSelecionadas.indexOf(id);

    if (index > -1) {
      mesasSelecionadas.splice(index, 1);
    } else {
      mesasSelecionadas.push(id);
    }

    localStorage.setItem("mesasSelecionadas", JSON.stringify(mesasSelecionadas));
  });

    container.appendChild(div);
  }