var listOtane =document.getElementById('animeListOtane');
var messError = document.getElementById('messError');

requestData('k');



function requestData(data){
    localStorage.setItem('animeBuscado',data);
    var dataSearch=new FormData();
    dataSearch.append('Search', data);
    fetch('http://192.168.0.40:8888/SearchControl.php', {method: 'POST', body:dataSearch})
            .then((respuesta)=>respuesta.json())
            .then((data)=>{
                              console.log(data);
                              mostrarLosResultados(data);
                              
                              
                              
                            })
            .catch(error => {console.error('Error al obtener los datos del servidor:', error);});

}
function mostrarLosResultados(data){
  listOtane.innerHTML=null;
  if(data!=0){
      for(i=0;i<data.length;i++){
        listOtane.innerHTML+=
        `
        <li class="listAnimeItem">${data[i][0]}</li>
        `;
      }
  }else{

    containerResultOfSearch.innerHTML+=`<h3 class="messageOfResults">No results</h3>`
  }
  
}