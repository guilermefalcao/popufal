function mostrarFormulario_Novo() {
    document.getElementById("formulario_novo").style.display = "block";
    document.getElementById("formulario_consultar").style.display = "none";
  }

  function mostrarFormulario_Consultar() {
    document.getElementById("formulario_consultar").style.display = "block";
    document.getElementById("formulario_novo").style.display = "none";
  }


  function voltar_para_lista() {
    window.location.href = "lista_pops.html";
  }