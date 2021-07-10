import ErrorHandling from './ErrorHandling.js';
const host = "https://crm.globaltech360.com/parsal.php";
document.addEventListener("DOMContentLoaded", () => {
    const name = document.querySelector('#name');
    const amount = document.querySelector('#amount');
    if (name.value !== "" && amount.value !== "") {
        const pay = async() => {
            const data = {
                "uri": host,
                "body": {
                    'uri': "https://crm.globaltech360.com/index.php?route=paymentApi",
                    "id": document.querySelector('#id').value,
                    "name": name.value,
                    "amount": amount.value
                }
            }
            const res = await ErrorHandling(data);
            alert(res.status);
        }
        pay();
    }
})