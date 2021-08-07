//The link is not working so I copied the .json and place it inside this folder.


const formComponent = () => {
    const genderRadioComponent = (genderValue)=>{
        console.log("CALLED THE RADIO COMPONENT" + genderValue)
        if (genderValue == true){ //isMale
            $(            `
            <p>Please select your gender:</p>
            </br></br>
            <input type="radio" checked name="gender" value="Male">
            <label for="male" >Male</label><br>
            <input type="radio" name="gender" value="Female">
            <label for="female">Female</label><br>
            `).appendTo(".radioboxgender")
        }else { //Not male
            $(`
            <p>Please select your gender:</p>
            </br></br>
            <input type="radio" name="gender" value="Male">
            <label for="male" checked >Male</label><br>
            <input type="radio" name="gender" value="Female">
            <label for="female">Female</label><br>
            `).appendTo(".radioboxgender")
        }
    }

    const componentLanguages = (languages)=>{
        languages.forEach(element => {
            $(`
            <input type="checkbox" checked id="${element}" name="${element}" value="${element}">
            <label for="lang${element}"> ${element} </label><br>
            `).appendTo(".checkboxlanguage");
        });
    }

    $.getJSON("exam.json", (data_json) =>{
        console.log(data_json);
        //CAll child components
        genderRadioComponent(data_json["employees"][0]["gender"]["male"])
        componentLanguages(data_json["employees"][0]["knownLanguage"])
        $(
        `
        <form method='GET'>
            First name: 
            <input type="text" value="${data_json["employees"][0]["firstName"]}"/>
            Last name: 
            <input type="text" value="${data_json["employees"][0]["lastName"]}"/>

            Birthday:
            <input type="date" value="${data_json["employees"][0]["birthday"]}"/>
                
            <button type="submit">
        </form>
        
        `).appendTo(".formComponent");
        
    });
    

}

