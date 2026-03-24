function analyzeText(){
    let text = document.getElementById("inputText").value;

    let trimmedText = text.trim();

    if (trimmedText === "") {
        document.getElementById("outputText").value = "Please enter some text.";
        return;
    }

    let charCount = text.length;

    let words = trimmedText.split(/\s+/);
    let wordcount= words.length;

    let reverseText= text.split("").reverse().join("");

    document.getElementById("outputText").value = "character count :"+ charCount + "Word Count: " + wordcount + "\nReversed Text: " + reverseText;




}