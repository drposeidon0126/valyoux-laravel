var options = {
        series: [{
            type: "area",
            name: "BTC",
            data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
        }, {
            type: "area",
            name: "ETH",
            data: [28, 41, 52, 42, 13, 18, 29, 18, 36, 51, 55, 35]
        }, {
            type: "line",
            name: "LTC",
            data: [45, 52, 38, 24, 33, 65, 45, 75, 54, 18, 28, 10]
        }],
        chart: {
            height: 240,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth",
            width: 2,
            dashArray: [0, 0, 3]
        },
        fill: {
            type: "solid",
            opacity: [.15, .05, 1]
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        colors: ["#f1b44c", "#3452e1", "#50a5f1"]
    },
    chartOverview = new ApexCharts(document.querySelector("#overview-chart"), options);
chartOverview.render(), $(document).ready(function () {
    $("#datatable").DataTable()
});
