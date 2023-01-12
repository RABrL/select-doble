const selectMunicipio = document.querySelector('#municipio');

function getIdDepartamento(){
  const id_departamento = document.querySelector('#departamento').value

  limpiarMunicipios()

  fetch(`listMunicipios.php?id=${id_departamento}`).then(res => res.json()).then(municipios => {
    console.log(municipios);
    municipios.forEach(municipio => {
      const { id, nombre} = municipio

      const opt = document.createElement('option')
      opt.setAttribute('value',id)
      opt.innerText= nombre
      selectMunicipio.appendChild(opt)
  })}
  )
}

function limpiarMunicipios(){

  while(selectMunicipio.firstChild){
    selectMunicipio.removeChild(selectMunicipio.lastChild)  
  }
}
