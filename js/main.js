// imports always go at the top
import { getData } from  "./components/TheDataMiner.js";




(() => {
    const theTeam = document.querySelector("#team-members"),
          theTemplate = document.querySelector("#bio-template").content;

    
    
    function buildTeam(info) {
        
        info.forEach(person => { 
            
             let panel = theTemplate.cloneNode(true),
                memberInfo = panel.firstElementChild.children;  
                

            // add the custom data attribute value to the section tag inside the template
            panel.firstElementChild.dataset.key = person.id;    

            memberInfo[0].querySelector('img').src = `images/${person.biopic}`;
             memberInfo[1].textContent = person.name;
            memberInfo[2].textContent = person.role;
            memberInfo[3].textContent = person.nickname;

            // put the virtual panel in the team section our HTML page
            theTeam.appendChild(panel);
        }) 

        // first, clone the template because we can't use it directly
        
       
    }
    function getMoreData(event) {
        if (event.target.closest("section").dataset.key) {
           let key = event.target.closest("section").dataset.key; 
           
          /*  getData({id: key}, function(data) {
               // execute this line as the callback in Dataminer
           console.log(data); */ 
        //})
        getData({id: key}, showPortfolioData);
        }
        debugger;
    }
    function showPortfolioData(data) {
        // show the portfolio piece somewhere in your UI
        console.log(data);
    }
   
    // when we click on a bio, we want to retrieve the custom data attribute that refers to the row of
    // data that represents this person in the DB
    theTeam.addEventListener("click", getMoreData);
    // pass the buildteam function to our data miner as a callback
    getData(null, buildTeam);

})()