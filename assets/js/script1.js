import ErrorHandling from './ErrorHandling.js';

const host = "https://crm.globaltech360.com/parsal.php";
const paper_type = document.querySelector('#paper_type');
const academic_level = document.querySelector('#academic_level');
const subject = document.querySelector('#subject');
const expected_result = document.querySelector('#expected_result');
const inputNumberDecrementPages = document.querySelector('#input-number-decrement-pages');
const inputNumberIncrementPages = document.querySelector('#input-number-increment-pages');
const numberOfPages = document.querySelector('#number_of_pages');
const inputPosterDecrement = document.querySelector('#input-poster-decrement');
const inputPosterIncrement = document.querySelector('#input-poster-increment');
const noOfPoster = document.querySelector('#no_of_poster');
const inputCitationDecrement = document.querySelector('#input-citation-decrement');
const inputCitationIncrement = document.querySelector('#input-citation-increment');
const no_of_reference = document.querySelector('#no_of_reference');
const inputSliderDecrement = document.querySelector('#input-slider-decrement');
const inputSliderIncrement = document.querySelector('#input-slider-increment');
const pptSlidesInput = document.querySelector('#ppt_slides');
const pptSlide = document.querySelector('#ppt-slide');
const pptSlideInput = document.querySelector('#ppt-slide-input');
const perPageCost = document.querySelector('#per-page-cost');
const perPageCostInput = document.querySelector('#per-page-cost-input');
const perPosterPrice = document.querySelector('#per-poster-price');
const perPosterPriceInput = document.querySelector('#per-poster-price-input');
const totalCost = document.querySelector('#total-cost');
const deadLine = document.querySelector('#deadline');
const style = document.querySelector('#style');
const paper_topic = document.querySelector('#paper_topic');
const wordCount = document.querySelector('#wordCounts');
const totalCostInput = document.querySelector('#total-cost-input');
const details = document.querySelector('#details');
const firstname = document.querySelector('#firstname');
const lastname = document.querySelector('#lastname');
const email = document.querySelector('#email');
const phone = document.querySelector('#phone');
const submition = document.querySelector('#submitPayment');
const orderSubmition = document.querySelector('#submitOrder');
const file = document.querySelector('#file_upload');
const wordsPerPage = 250;
let filearr = [];
let value = 0;
let basePpt = 0;
let basePoster = 0;
let baseExpected = 0;
let basePaper = 0;
let pptIncrement = 0;
let PosterIncrement = 0;
let paperIncrement = 0;
let validate = true;
let amount = '0';
let result = {};

const validator = () => {
    validate = true;
    if (paper_type.value === "") {
        validate = false;
    }
    if (academic_level.value === "") {
        validate = false;
    }
    if (subject.value === "") {
        validate = false;
    }
    if (expected_result.value === "") {
        validate = false;
    }
    if (paper_topic.value === "") {
        validate = false;
    }
    if (details.value === "") {
        validate = false;
    }
    if (firstname.value === "") {
        validate = false;
    }
    if (lastname.value === "") {
        validate = false;
    }
    if (email.value === "") {
        validate = false;
    }
    if (phone.value === "") {
        validate = false;
    }
}

// increment function Start

const increment = (val) => {

    return parseInt(val.value) + 1;
}

// increment function Pages Start
inputNumberIncrementPages.addEventListener('click', () => {
    numberOfPages.value = increment(numberOfPages);
    calculate();
});
// increment function Pages End

// increment function Poster Start
inputPosterIncrement.addEventListener('click', () => {
    noOfPoster.value = increment(noOfPoster);
    calculate();
});
// increment function Poster End

// increment function Citation Start
inputCitationIncrement.addEventListener('click', () => {
    no_of_reference.value = increment(no_of_reference);
});
// increment function Citation End

// increment function Slider Start
inputSliderIncrement.addEventListener('click', () => {
    pptSlidesInput.value = increment(pptSlidesInput);
    calculate();
});
// increment function Slider End

// increment function End

// decrement function Start

const decrement = (val) => {
    if (parseInt(val.value) == 0) {
        value = 0;
    } else {
        value = parseInt(val.value) - 1;
    }
    return value;
}

// decrement function Pages Start
inputNumberDecrementPages.addEventListener('click', () => {
    numberOfPages.value = decrement(numberOfPages);
    calculate();
});
// decrement function Pages Start

// decrement function Poster Start
inputPosterDecrement.addEventListener('click', () => {
    noOfPoster.value = decrement(noOfPoster);
    calculate();
});
// decrement function Poster End

// decrement function Citation Start
inputCitationDecrement.addEventListener('click', () => {
    no_of_reference.value = decrement(no_of_reference);
});
// decrement function Citation End

// decrement function Slider Start
inputSliderDecrement.addEventListener('click', () => {
    pptSlidesInput.value = decrement(pptSlidesInput);
    calculate();
});
// decrement function Slider End
// decrement function 

// decrement function

// set value for calculation function start
const setValue = () => {
    if (expected_result.value == 'Pass') {
        baseExpected = 0;
    } else if (expected_result.value == 'C') {
        baseExpected = 2;
    } else if (expected_result.value == 'B') {
        baseExpected = 4;
    } else if (expected_result.value == 'A') {
        baseExpected = 6;
    }

    if (academic_level.value == 'A-Level / College') {
        basePpt = 5;
        basePoster = 50;
        basePaper = 9;
    } else if (academic_level.value == 'Undergraduate / Diploma') {
        basePpt = 6;
        basePoster = 50;
        basePaper = 11;
    } else if (academic_level.value == 'Master') {
        basePpt = 7;
        basePoster = 50;
        basePaper = 13;
    } else if (academic_level.value == 'PhD') {
        basePpt = 8;
        basePoster = 50;
        basePaper = 15;
    }

    if (deadLine.value == '15') {
        pptIncrement = 0;
        PosterIncrement = 0;
        paperIncrement = 0;
    } else if (deadLine.value == "10") {
        pptIncrement = 1;
        PosterIncrement = 10;
        paperIncrement = 2;
    } else if (deadLine.value == "7") {
        pptIncrement = 2;
        PosterIncrement = 20;
        paperIncrement = 4;
    } else if (deadLine.value == "5") {
        pptIncrement = 3;
        PosterIncrement = 30;
        paperIncrement = 6;
    } else if (deadLine.value == "3") {
        pptIncrement = 4;
        PosterIncrement = 40;
        paperIncrement = 8
    } else if (deadLine.value == "2") {
        pptIncrement = 6;
        PosterIncrement = 50;
        paperIncrement = 10;
    } else if (deadLine.value == "1") {
        pptIncrement = 7;
        PosterIncrement = 70;
        paperIncrement = 8;
    } else if (deadLine.value == "12") {
        pptIncrement = 9;
        PosterIncrement = 90;
        paperIncrement = 10;
    } else if (deadLine.value == "6") {
        pptIncrement = 11;
        PosterIncrement = 110;
        paperIncrement = 12;
    }
}
// set value for calculation function End

// calcutation function start
const calculate = () => {
    setValue();

    if (numberOfPages.value != '0') {
        perPageCost.innerHTML = (basePaper + paperIncrement) + baseExpected;
        perPageCostInput.value = (basePaper + paperIncrement);
    } else {
        perPageCost.innerHTML = 0;
        perPageCostInput.value = 0;
    }
    if (noOfPoster.value != '0') {
        perPosterPrice.innerHTML = (basePoster + PosterIncrement);
        perPosterPriceInput.value = (basePoster + PosterIncrement);
    } else {
        perPosterPrice.innerHTML = 0;
        perPosterPriceInput.value = 0;
    }
    if (pptSlidesInput.value != '0') {
        pptSlide.innerHTML = (basePpt + pptIncrement);
        pptSlideInput.value = (basePpt + pptIncrement);
    } else {
        pptSlide.innerHTML = 0;
        pptSlideInput.value = 0;
    }
    if (numberOfPages.value != '0') {
        wordCount.innerHTML = parseInt(numberOfPages.value) * wordsPerPage;
    } else {
        wordCount.innerHTML = "";
    }
    const totalPageCost = (parseInt(perPageCost.innerHTML) * parseInt(numberOfPages.value));
    const totalPosterCost = (parseInt(perPosterPrice.innerHTML) * parseInt(noOfPoster.value));
    const totalSlidesCost = (parseInt(pptSlide.innerHTML) * parseInt(pptSlidesInput.value));
    totalCost.innerHTML = totalPageCost + totalPosterCost + totalSlidesCost;
    totalCostInput.value = totalPageCost + totalPosterCost + totalSlidesCost;
}
// calcutation function End

// event listeners for calculation Start

// event listeners for calculation of academic_level Start
academic_level.addEventListener('change', () => {
    calculate();
});
// event listeners for calculation of academic_level Start

// event listeners for calculation of expected_result Start
expected_result.addEventListener('change', () => {
    calculate();
})
// event listeners for calculation of expected_result End

// event listeners for calculation of deadline Start
deadLine.addEventListener('change', () => {
    calculate();
})
// event listeners for calculation of deadline End

// event listeners for calculation End

// order submition funtion start
orderSubmition.addEventListener('click',async() => {
    validator();
    if (validate === true) {
        const fetchApiData = {
            "uri": host,
            "body": {
                "uri": "https://crm.globaltech360.com/index.php?route=orderApi",
                "email": email.value,
                "firstname": firstname.value,
                "lastname": lastname.value,
                "phone": phone.value,
                "file": filearr,
                "project": {
                    "description": details.value
                },
                "order": {
                    "paper_type": paper_type.value,
                    "academic_level": academic_level.value,
                    "subject": subject.value,
                    "expected_result": expected_result.value,
                    "deadline": deadLine.value,
                    "style": style.value,
                    "paper_topic": paper_topic.value,
                    "number_of_pages": numberOfPages.value,
                    "no_of_poster": noOfPoster.value,
                    "no_of_reference": no_of_reference.value,
                    "ppt_slides": pptSlidesInput.value,
                    "ppt-slide-input": pptSlideInput.value,
                    "per-page-cost-input": perPageCostInput.value,
                    "per-poster-price-input": perPosterPriceInput.value,
                    "total-cost": totalCostInput.value,
                },
            }
        }
        amount = totalCostInput.value;
        result = await ErrorHandling(fetchApiData);

        if (result.status == true) {
            $('#exampleModal').modal('show');
        }

    } else {
        alert("Please Fill all Fields");
    }
});
// order submition funtion end

// paymnet gateway function start

// stripe gateway function start

submition.addEventListener('click', async () => {
    const id = document.querySelector('#id');
    const amount = document.querySelector('#amount');
    const submit = document.querySelector('#submit');
    id.value = result.id;
    amount.value = btoa(totalCostInput.value);
    id.disabled = false;
    amount.disabled = false;
    submit.disabled = false;
    if (id.disabled == false && amount.disabled == false && submit.disabled == false) {
        submit.click();
    }
});

// stripe gateway function end

// paypal gateway function start
paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        const idget = document.querySelector("#idget");
        const amountget = document.querySelector("#amountget");
        idget.value =result.id;
        amountget.value = amount;
        if (idget.value !== "" && amountget.value !== "") {
            const pay = async () => {
                idget.disabled = false;
                amountget.disabled = false;
                const data = {
                    "uri": "https://crm.globaltech360.com/parsal.php",
                    "body": {
                        'uri': "https://crm.globaltech360.com/index.php?route=paymentApi",
                        "id": idget.value,
                        "name": "paypal",
                        "amount": amountget.value
                    }
                }
                const res = await ErrorHandling(data);
                alert(res.status);
            }
            pay();
        }
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.

// paypal gateway function end

// paymnet gateway function end

// payment submition funtion start

document.addEventListener("DOMContentLoaded", () => {
    const idget = document.querySelector("#idget");
    const amountget = document.querySelector("#amountget");
    if (idget.value !== "" && amountget.value !== "") {
        const pay = async () => {
            idget.disabled = false;
            amountget.disabled = false;
            const data = {
                "uri": "https://crm.globaltech360.com/parsal.php",
                "body": {
                    'uri': "https://crm.globaltech360.com/index.php?route=paymentApi",
                    "id": idget.value,
                    "name": "stripe",
                    "amount": atob(amountget.value)
                }
            }
            const res = await ErrorHandling(data);
            alert(res.status);
        }
        pay();
    }
})
// payment submition funtion end

// file reader function start

file.addEventListener('change', () => {
    const files = file.files;
    for (const fileFill of files) {
        if (fileFill) {
            if ((/\.(gif|jpe?g|tiff?|png|webp|bmp)$/i).test(fileFill.name)) {
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    const fileupload = {
                        "name": fileFill.name,
                        "base64": reader.result.split(',')[1]
                    }
                    filearr.push(fileupload);
                    console.log();
                }, false);
                reader.readAsDataURL(fileFill);
            }
        }
    }
})

// file reader function end