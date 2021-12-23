
// Save Btn / on Click Action
document.getElementById('saveBTN').addEventListener("click", function () {
    let birth_date = get_data('birth_date');
    if (!birth_date) {
        alert('Please Enter Your Birth Date');
    } else {
        // Form
        const updateRequest = new FormData();
        updateRequest.append('birth_date', birth_date);
        // Fetch
        let url = 'server/addHoroscope.php';
        fetch(url, {
            method: 'POST',
            body: updateRequest
        })
            .then((response) => response.json())
            .then((obj) => {
                console.log(obj);
                if(obj){
                    get_horoscope();
                }
            
            })
    }
});
// Update Btn / on Click Action
document.getElementById('updateBTN').addEventListener("click", function () {
    let birth_date = get_data('birth_date');
    if (!birth_date) {
        alert('Please Enter Your Birth Date');
    } else {
        // Form
        const updateRequest = new FormData();
        updateRequest.append('birth_date', birth_date);
        // Fetch
        let url = 'server/updateHoroscope.php';
        fetch(url, {
            method: 'POST',
            body: updateRequest
        })
        .then((response) => response.json())
            .then((obj) => {
                console.log(obj);
                if(obj){
                document.getElementById('result').innerText = obj.name;
                }
            
            })
    }

});
// Delete Btn / on Click Action
document.getElementById('deleteBTN').addEventListener("click", function () {

    // Fetch
    let url = 'server/deleteHoroscope.php';
    fetch(url, {
        method: 'DELETE'
    })
    .then((response) => response.text())
        .then((obj) => {
            console.log(obj);
            if(obj){
            document.getElementById('result').innerText = 'Please Choose Your Birth Date';
            let saveBtn = document.getElementById('saveBTN');
            let updateBtn = document.getElementById('updateBTN');
            let deleteBtn = document.getElementById('deleteBTN');
            saveBtn.disabled = false;
            updateBtn.disabled = true;
            deleteBtn.disabled = true;

            
            }
        
        })

});
// viewHoroscope.php
function get_horoscope(){
    let url = 'server/viewHoroscope.php';
    fetch(url)
    .then((response) => response.text())
    .then((obj) => {
        console.log(obj);
        if(obj){
            var result = JSON.parse(obj);
            // Inner Text
            document.getElementById('result').innerText = result.name;
            // Btns Controller
            let saveBtn = document.getElementById('saveBTN');
            let updateBtn = document.getElementById('updateBTN');
            let deleteBtn = document.getElementById('deleteBTN');

            saveBtn.disabled = true;
            updateBtn.disabled = false;
            deleteBtn.disabled = false;

        }
    
    })
}
get_horoscope()

function disable_btn(){
   let btn = document.getElementById('saveBTN');
   btn.disabled = true;
}


function get_data(input){
    return document.getElementById(input).value;
}
