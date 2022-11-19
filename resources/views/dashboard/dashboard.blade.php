@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Revenues</p>
              <p class="fs-30 mb-2">40,000 Rwf</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Vehicles Entered</p>
              <p class="fs-30 mb-2">10,000</p>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Temperature</h4>
                <canvas id="temperature_chart"></canvas>
              </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Carbon Dioxide</h4>
                <canvas id="carbon_dioxide_chart"></canvas>
              </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
      $(document).ready(function(){
            setInterval(function(){
                var url = "{{url('temperature/chart/data')}}";
                var carbonUrl = "{{url('carbon/chart/data')}}";
                var dateTime = new Array();
                var temperature = new Array();
                var carbonDioxide = new Array();
                var dateTimeCarbon = new Array();
            $.get(url, function(response){
                response.forEach(function(data){
                    dateTime.push(data.recorded_at);
                    temperature.push(data.temperature_data);
                });
                var temperatureChart = document.getElementById("temperature_chart").getContext('2d');

                var ecgDiagram = new Chart(temperatureChart, {
                    type: 'line',
                    data: {
                        labels:dateTime,
                        datasets: [{
                            label: 'Temperature',
                            data: temperature,
                            borderWidth: 3,
                            borderColor: 'rgb(0, 127, 212)',
                            fill:false,
                            tension: 0.1
                        }]
                    },
                    options: {
                        animation:{
                            duration: 0
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true,
                                    userCallback: function(value, index, values) {
                                        value = value.toString();
                                        value = value.split(/(?=(?:...)*$)/);
                                        value = value.join(',');
                                        return value;
                                    }
                                }
                            }],

                            xAxes: [{
                                gridLines: {
                                    color: '#f2f3f8'
                                },
                            }]
                        },
                    }
                });
            });
            $.get(carbonUrl, function(response){
                response.forEach(function(data){
                    dateTimeCarbon.push(data.recorded_at);
                    carbonDioxide.push(data.carbon_data);
                });
                var carbonChart = document.getElementById("carbon_dioxide_chart").getContext('2d');

                var ecgDiagram = new Chart(carbonChart, {
                    type: 'line',
                    data: {
                        labels:dateTimeCarbon,
                        datasets: [{
                            label: 'Carbon Level',
                            data: carbonDioxide,
                            borderWidth: 3,
                            borderColor: 'rgb(214, 42, 67)',
                            fill:false,
                            tension: 0.1
                        }]
                    },
                    options: {
                        animation:{
                            duration: 0
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true,
                                    userCallback: function(value, index, values) {
                                        value = value.toString();
                                        value = value.split(/(?=(?:...)*$)/);
                                        value = value.join(',');
                                        return value;
                                    }
                                }
                            }],

                            xAxes: [{
                                gridLines: {
                                    color: '#f2f3f8'
                                },
                            }]
                        },
                    }
                });
            });
            },1000)

        });
    </script>
@endpush