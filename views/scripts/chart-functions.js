$(document).ready(function() {
    $("#sales-chart").change(function(){
        let selectedYear = $("#sales-chart option:selected").text();
        let labels_months = getMonthLabel(selectedYear);
        chart1.data.labels =labels_months;
        let newRandomData = getRandomData(labels_months.length, labels_tags.length, 500, 10000);
        for(let i = 0; i < newRandomData.length; i++) {
            chart1.data.datasets[i].data = newRandomData[i];
        }for(let j = 0; j < chart1.data.datasets.length; j++) {
            chart1.data.datasets[j].label = labels_tags[j];
        }
        char_bar.update();
    });
    $("#revenue-chart").change(function(){
        let selectedYear = $("#revenue-chart option:selected").text();
        let labels_months = getMonthLabel(selectedYear);
        console.log(labels_months)
        const new_data_test = getTotalSaleRevenue(labels_months);
        chart3.data.labels = labels_months;
        chart3.data.datasets[0].data = new_data_test;
        char_line.update();
    })
});