<!DOCTYPE html>
<html>
<head>
    <base href="<%=basePath%>">
    <title>Yearly Visit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.css"/ >
    <!-- 引入 ECharts 文件 -->
    <script src="../js/jquery.js"></script>
    <script src="http://echarts.baidu.com/dist/echarts.min.js"></script>
    <script src="../js/jquery.datetimepicker.full.min.js"></script>
</head>
<body>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="width: 1400px;height:800px;"></div>
<script src="../js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));
    // 指定图表的配置项和数据
    option = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
       /* toolbox: {
            feature: {
                restore: {},
                saveAsImage: {}
            }
        },*/
        series: [
            {
                name: '业务指标',
                type: 'gauge',
                detail: {formatter:'{value}%'},
                data: [{value: 50, name: '完成率'}]
            }
        ]
    };

   /* app.timeTicket = setInterval(function () {
        option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
        myChart.setOption(option, true);
    },2000);*/

    // 填充数据
    myChart.setOption(option);
</script>
<div id="datetimepicker_start_time" style="width:200px;height:20px;" class="text"></div>
<script>
    jQuery('#datetimepicker_start_time').datetimepicker({
        startDate:'+1971/05/01'//or 1986/12/08
    });
</script>
<div>

</div>
</body>
</html>