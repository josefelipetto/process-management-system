@extends('layouts.app')

@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            google.charts.load('current', {
                packages: ["orgchart"]
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Name');
                data.addColumn('string', 'Manager');
                data.addColumn('string', 'ToolTip');

                // For each orgchart box, provide the name, manager, and tooltip to show.
                data.addRows([
                    [{
                        v: 'Mike',
                        f: 'Mike<div style="color:red; font-style:italic">President</div>'
                    },
                        '', 'The President'
                    ],
                    [{
                        v: 'Jim',
                        f: 'Jim<div style="color:red; font-style:italic">Vice President</div>'
                    },
                        'Mike', 'VP'
                    ],
                    ['Alice', 'Mike', ''],
                    ['Bob', 'Jim', 'Bob Sponge'],
                    ['Carol', 'Bob', '']
                ]);

                // Create the chart.
                var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
                // Draw the chart, setting the allowHtml option to true for the tooltips.
                chart.draw(data, {
                    allowHtml: true
                });
            }
        });
    </script>
@endsection


@section('content')
    <div style="margin-top: 50px;">
        <div id="chart_div"></div>
    </div>
@endsection
