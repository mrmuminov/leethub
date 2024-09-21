/**
 * @param {string[]} words
 * @return {number}
 */
var uniqueMorseRepresentations = function(words) {

    let map = new Set();
    let l = words.length
    for (let i = 0;i < l; i++){
        map.add(convertToMorse(words[i]));   
    }
    return map.size;

};

const convertToMorse = function(word) {
    const list = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
    const len = word.length;
    let morse = "";
    for (let i=0;i<len;i++) {
        morse+=(list[word[i].charCodeAt() - 97])
    }
    return morse;
}
