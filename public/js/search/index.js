document.getElementById('input-search').addEventListener('input', ()=>{
  var val = document.getElementById('input-search').value;

  if(val.length > 3) {
    // TODO: Get this value through xhr
    newRecord("TItle", val, '/about') 
  }

})

var newRecord = function(title, body, url) {
  var b = document.createElement('div')
  b.innerHTML = `<div class="card"> <div class="card-header"> <h5> ${ title } </h5> </div> <div class="card-body"> <p> ${ body } </p> </div> <div class="card-footer"> <a href="${ url }" class="card-link float-right">More..</a> </div> </div>`
  document.getElementById("result-list").appendChild(b)
}
