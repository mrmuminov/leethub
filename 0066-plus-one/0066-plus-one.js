/**
 * @param {number[]} digits
 * @return {number[]}
 */
var plusOne = function(digits) {
    let nine = function(index, force = true){
        if (force) {
            digits[index]++;
        }
        if (digits[index] > 9) {
            digits[index] = digits[index] - 10;
            if (index === 0) {
                digits.unshift(1)
            } else {
                digits[index-1]++;
            }
            nine(index-1, false)
        } 
    }
    nine(digits.length-1)
    delete(nine);
    return digits
};
