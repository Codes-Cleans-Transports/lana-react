import React from 'react';
import './App.css';
import  {ReactComponent as Analytics} from "./static/analytics.svg";

import Dropdown from 'react-dropdown';
import 'react-dropdown/style.css';

import MapsGoogle from "./components/MapsGoogle/MapsGoogle";
import { connect } from "react-redux";

import Footer from 'rc-footer';
import 'rc-footer/assets/index.less';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      data: {}
    };
  }

  handleSelect = () => {
    console.log("select");
  }

  render() {

    const data = [
      'first', 'second', 'third'
    ]
    const defaultVal = data ? data[0] : null;

    return (
      <div className="App">
        <Dropdown className="dropdown"
          options={data} 
          onChange={this.handleSelect} 
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
        bottom="Made with ❤️ by Codes, Cleans, Compiles"/>
      </div>
    );
  }
}

const mapStateToProps = state => {
  return {};
};

export default connect(mapStateToProps, null)(App);