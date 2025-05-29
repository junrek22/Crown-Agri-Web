$(document).ready(function() {
    $("#sales-chart").change(function(){
        let selectedYear = $("#sales-chart option:selected").val();
        let labels_months = getMonthLabel(selectedYear);
        bar_chart.data.labels =labels_months;
        let newRandomData = getRandomData(labels_months.length, labels_tags.length, 500, 10000);
        for(let i = 0; i < newRandomData.length; i++) {
            bar_chart.data.datasets[i].data = newRandomData[i];
        }for(let j = 0; j < bar_chart.data.datasets.length; j++) {
            bar_chart.data.datasets[j].label = labels_tags[j];
        }
        char_bar.update();
    });
    $("#revenue-chart").change(function(){
        let selectedYear = $("#revenue-chart option:selected").val();
        let labels_months = getMonthLabel(selectedYear);
        const new_data_test = getTotalSaleRevenue(labels_months);
        line_chart_dashboard.data.labels = labels_months;
        line_chart_dashboard.data.datasets[0].data = new_data_test;
        char_line.update();
    })
    $("#report-charts-change").change(function(){
        let selectedYear = $("#report-charts-change option:selected").val();
        let labels_months = getMonthLabel(selectedYear);
        const new_data_test = getTotalSaleRevenue(labels_months);

        let newRandomData = getRandomData(labels_months.length, labels_tags.length, 500, 10000);
        for(let i = 0; i < newRandomData.length; i++) {
            bar_chart.data.datasets[i].data = newRandomData[i];
        }for(let j = 0; j < bar_chart.data.datasets.length; j++) {
            bar_chart.data.datasets[j].label = labels_tags[j];
        }

        
        line_chart_sales_report.data.labels = labels_months;
        line_chart_sales_report.data.datasets[0].data = new_data_test;
        bar_chart.data.labels =labels_months;

        char_bar.update();
        char_line.update();
    })
});