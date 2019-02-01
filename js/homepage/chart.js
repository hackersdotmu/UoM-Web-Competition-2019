fetchNumOfUsers();

fetchNumSectors();


function fetchNumOfUsers() {
    let http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('numUsers').textContent = http.responseText;
        }
    }
    http.open('GET', 'includes/homepage/numUsers.php');
    http.send();
}

function fetchNumSectors() {
    let http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let r = JSON.parse(http.responseText);
            changeChart(r["it"], r["finance"], r["engineering"], r["agriculture"], r["law"], r["science"]);

        }
    }
    http.open('GET', 'includes/homepage/numSectors.php');
    http.send();
}

function changeChart(it, fi, eng, agr, law, sci) {
    var ctx = document.getElementById("mychart");

    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["IT", "Finance", "Engineering", "Agriculture", "Law", "Science"],
            datasets: [{
                data: [it, fi, eng, agr, law, sci],
                backgroundColor: ['red', 'yellow', 'blue', 'green'],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Number of Students per Sector',
                position: 'top',
                fontSize: 25
            }
        }
    });

}