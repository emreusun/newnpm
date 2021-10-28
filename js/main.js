// imports always go at the top
import { getData } from  "./components/TheDataMiner.js";




(() => {
    const theTeam = document.querySelector("#team-members"),
          theTemplate = document.querySelectorAll("#bio-template").content;


 
    function buildTeam(info) {
        
        let team = Object.keys(info);
        
        info.forEach(person => { 
            
             let panel = theTemplate.cloneNode(true),
                memberInfo = panel.firstElementChild.children;  
                debugger;

            memberInfo[0].querySelector('img').src = `images/${person.biopic}`;
            memberInfo[1].textContent = person.name;
            memberInfo[2].textContent = person.role;
            memberInfo[3].textContent = person.nickname;

            // put the virtual panel in the team section our HTML page
            theTeam.appendChild(panel);
        }) 

        // first, clone the template because we can't use it directly
        
       
    }

    // invoke the getData function
    getData();

})()