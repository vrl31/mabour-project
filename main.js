class Travs {
    constructor(location, destination, date, numberOfAdult, numberOfChild, transCompany) {
      this.location = location;
      this.destination = destination;
      this.date = date;
      this.numberOfAdult = numberOfAdult;
      this.numberOfChild = numberOfChild;
      this.transCompany = transCompany;
    }
    getLocation() {
        return this.location;
    }
    getDestination() {
        return this.destination;
    }
    getCompany() {
        return this.transCompany;
    }
    getAdult() {
        return this.numberOfAdult;
    }
    getChild() {
        return this.numberOfChild;
    }
}


let subButton = document.getElementById("continue-button");
subButton.addEventListener("click", function(){
    
    let locat = document.getElementById("departure").value;
    let dest = document.getElementById("destination").value;
    let date = document.getElementById("date").value;
    let adult = document.getElementById("NumberofAdult").value;
    let child = document.getElementById("NumberofChild").value;
    let company = document.getElementById("transportCompany").value;
    if(locat=== 'Select Departure Location' || dest === 'Select Destination Location'){
        alert('Please, Select Departure and Destination');
    }
    else{
    let travs = new Travs(locat,dest,date,adult,child,company);
    localStorage.setItem('location',travs.getLocation());
    localStorage.setItem('destination',travs.getDestination());
    localStorage.setItem('transCompany',travs.getCompany());
    localStorage.setItem('adult', travs.getAdult());
    localStorage.setItem('child', travs.getChild());
    
    window.document.location = './guo.html';}
});

document.addEventListener('DOMContentLoaded', function(){
    let location = document.querySelector("#glocation");
    let company = document.querySelector("#gtransCompany");
    let adult = document.querySelector("#gadultValue");
    let child = document.querySelector("gchildValue");
    if(localStorage.getItem('location')){
        location.innerHTML = localStorage.getItem('location')+' &rarr; '+ localStorage.getItem('destination');
        company.innerHTML = localStorage.getItem('transCompany');
        adult.innerHTML = 'Number of Adult: ' + localStorage.getItem('adult');
        child.innerHTML = 'Number of child: ' + localStorage.getItem('child');


}
});