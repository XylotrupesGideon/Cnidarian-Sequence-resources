function toggleVisibility(id) {
  var element = document.getElementById(id);
  element.classList.toggle('hidden');
}

function resourceVisibility(resource_type){
  // Select all table elements with the class resource_type
  var tables = document.getElementsByClassName(resource_type);
  
  // Loop through each table element
  for (let i = 0; i < tables.length; i++){
    // Toggle the hidden class for the current table element
    tables[i].classList.toggle('hidden');

    // Get the parent div element of the current table element
    var parentDiv = tables[i].parentElement.parentElement;
    
    // Toggle the hidden class for the parent div element
    parentDiv.classList.toggle('hidden');
  }
}
