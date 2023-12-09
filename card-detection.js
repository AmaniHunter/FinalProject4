// card-detection.js

function detectCardType(number) {
    var re = {
        mastercard: /^5[1-5][0-9]{5,}/,
        visa: /^4[0-9]{6,}/,
        amex: /^3[47][0-9]{5,}/
    };

    for (var key in re) {
        if (re[key].test(number)) {
            return key.toUpperCase();
        }
    }

    return 'Unknown';
}

// Example usage: Detect card type on input change
document.getElementById('card-number').addEventListener('input', function (e) {
    var cardType = detectCardType(e.target.value);
    document.getElementById('card-type').textContent = cardType;
});
