import React from "react";
import "./MainPage.css";
import  {ReactComponent as Analytics} from "../../static/analytics.svg";

import Dropdown from 'react-dropdown';
import 'react-dropdown/style.css';

import MapsGoogle from "../MapsGoogle/MapsGoogle";

import Footer from 'rc-footer';
import 'rc-footer/assets/index.less';

const MainPage = props => {

    const handleSelect = () => {
        console.log("select");
    }

    const data = [
        'first', 'second', 'third'
    ]
    const defaultVal = data ? data[0] : null;

    return(
        <div className="App">
          <Dropdown className="Dropdown"
            options={data} 
            onChange={handleSelect} 
            value={defaultVal} 
            placeholder="Select a cluster"/>
          <MapsGoogle center={ {lat: 42.698334, lng: 23.319941 }} zoom={11}/>
          <Footer className="Footer"
            columns={[
              {
                icon: (
                  <Analytics style={{height: 36, width: 36}}/>
                  ),
                  title: 'Project LAna',
                },
              ]}
              bottom="Made with ❤️ by Codes, Cleans, Transports"/>
        </div>
    )
}

export default MainPage;