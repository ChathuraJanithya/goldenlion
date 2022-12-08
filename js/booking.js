
        var xValues = ["2018", "2019", "2020", "2021", "2022"];
        var yValues = [70, 78, 85, 90, 92];
        var barColors = ["#802000","#cc3300", "#ff4000","#ff5c25","#ff8f69"];
        
        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Positive Ratings since 2018"
            }
        }
        });

        var xValues = ["2018", "2019", "2020", "2021", "2022"];
        var yValues = [70, 78, 85, 90, 92];
        var barColors = ["#802000","#cc3300", "#ff4000","#ff5c25","#ff8f69"];
        
        new Chart("pieChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "Positive Ratings since 2018"
            }
        }
        });