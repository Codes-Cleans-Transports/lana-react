import React, { Component } from 'react';
import ReactApexChart from 'react-apexcharts';

class chartapex extends Component {
    setData = (integer) => {
        var data = fetch(`http://69cca934b4e4.ngrok.io/contacts/28:16:7f:20:e1:86/`)
        .then(response => {
           return response.json()
        });
        var obj = JSON.parse(data);
        if(data){
            this.state.xaxis.categories = data.interval;
            this.series.data = data.uptime;
        }
    }
    constructor(props) {
        super(props);

        this.data = {

        }
        this.state = {
            options: {
                colors: ['#000000'],
                chart: {
                    zoom: {
                        enabled: true
                    },
                    toolbar: {
                        show: true,
                    }
                },
                legend: {
                    show: false
                },

                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                grid: {
                    borderColor: '#000000',
                    row: {
                        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: [1, 2, 3, 4 , 6], // holds timestamps
                    axisBorder: {
                        show: true
                    },
                    axisTicks: {
                        show: true
                    }
                }
            },

            series: [
                {
                    name: 'Uptime',
                    data: [10, 200, 10, 15,234] // holds uptime value 
                    // y axis scales by itself
                    // xaxis.categories[i] <=> series.data[i]
                },
            ],
        }
    }
    render() {
        return (
            <React.Fragment>
                <ReactApexChart options={this.state.options} series={this.state.series} type="line" height="290" />
            </React.Fragment>

        );
    }
}

export default chartapex;