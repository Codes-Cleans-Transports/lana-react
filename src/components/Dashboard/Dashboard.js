import React from "react";
import ApexChart from "./ApexChart"

const Dashboard = props => {
    return(
        <div>
            <ApexChart series={props.series}/>
        </div>
    )
}

export default Dashboard;