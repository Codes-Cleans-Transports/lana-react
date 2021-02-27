import React from 'react';
import './App.css';
import MapsGoogle from "./components/MapsGoogle/MapsGoogle";
import { connect } from "react-redux";


class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
      return (
        <div className="App">
          <MapsGoogle/>
        </div>
      );
  }
}

const mapStateToProps = state => {
  return {};
};

export default connect(mapStateToProps, null)(App);