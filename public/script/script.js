async function fetchPlataformas(){
  try{
    const response = await fetch(`http://localhost:8080/plataformas`);
    const data = await response.json();
    return data;
  } catch(error) {
    console.log("Erro ao obter plataformas: ", error);
    throw error;
  }
}

function displayPlataformas(plataformas) {
  const container = document.querySelector('.plataformas-container');
  container.innerHTML = '';

  plataformas.forEach(plataforma => {
      const plataformaElement = document.createElement('div');
      plataformaElement.className = 'item';
      plataformaElement.innerHTML = `
          <img src="${plataforma.logo}">
          <h3>${plataforma.nome}</h3>
          <a href="${plataforma.link}" target="_blank">Entrar</a>
      `;
      container.appendChild(plataformaElement);
  });
}

async function fetchFerramentas(){
  try{
    const response = await fetch(`http://localhost:8080/ferramentas`);
    const data = await response.json();
    return data;
  } catch(error) {
    console.log("Erro ao obter ferramentas: ", error);
    throw error;
  }
}

function displayFerramentas(ferramentas) {
  const container = document.querySelector('.ferramentas-container');
  container.innerHTML = '';

  ferramentas.forEach(ferramenta => {
      const ferramentaElement = document.createElement('div');
      ferramentaElement.className = 'item';
      ferramentaElement.innerHTML = `
          <img src="${ferramenta.logo}">
          <h3>${ferramenta.nome}</h3>
          <a href="${ferramenta.link}" target="_blank">Entrar</a>
      `;
      container.appendChild(ferramentaElement);
  });
}

document.addEventListener('DOMContentLoaded', async () => {
  try {
      const plataformas = await fetchPlataformas();
      const ferramentas = await fetchFerramentas();
      displayPlataformas(plataformas);
      displayFerramentas(ferramentas);
  } catch(error) {
      console.log('Erro : ', error);
  }
});
