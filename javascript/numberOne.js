var sampleTextOne = "TheQuickBrownFoxJumpsOverTheLazyDog."


const sentenceFixer = (text)=>{
   
    const arr = text.match(/[A-Z][a-z]+/g); //Seperate Every capitlize and place to array

    const lowercased = arr.map(arr => arr.toLowerCase()); //Lower case all string values of array
    
    const combined = lowercased.join(' '); //Combine the arrays values into a new string

    String.prototype.replaceAt = function(index, replacement) { //Replace function found on https://stackoverflow.com/questions/1431094/how-do-i-replace-a-character-at-a-particular-index-in-javascript
        return this.substr(0, index) + replacement + this.substr(index + replacement.length); //This is to replace the string to find the first letter, in this case, 0
    }
    
    console.log(combined.replaceAt(0, combined[0].toUpperCase())); //console.log the new string

}

sentenceFixer(sampleTextOne)