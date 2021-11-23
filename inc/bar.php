<script>
            const barChart = britecharts.bar();
            const container = d3.select('.bar-container');

            const barData = [{
                    name: 'Gen 1',
                    value: 151
                },
                {
                    name: 'Gen 2',
                    value: 100
                },
                {
                    name: 'Gen 3',
                    value: 135
                },
                {
                    name: 'Gen 4',
                    value: 107
                },
                {
                    name: 'Gen 5',
                    value: 156
                },
                {
                    name: 'Gen 6',
                    value: 72
                },
                {
                    name: 'Gen 7',
                    value: 88
                },
                {
                    name: 'Gen 8',
                    value: 92
                }
            ];

            barChart
                .isHorizontal(false)
                .height(400)
                .width(900)
                .enableLabels(true)
                .labelsNumberFormat('1')
                .isAnimated(true)
                

            container.datum(barData).call(barChart);

            const redrawChart = () => {
            const newContainerWidth = container.node() ? container.node().getBoundingClientRect().width : false;

            barChart.width(newContainerWidth);

            container.call(barChart);
        };
        const throttledRedraw = _.throttle(redrawChart, 200);

        window.addEventListener("resize", throttledRedraw);


        </script>