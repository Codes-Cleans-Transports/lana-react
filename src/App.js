import React from 'react';
import './App.css';

import {BrowserRouter, Route, Switch} from 'react-router-dom';
import { connect } from "react-redux";

import MainPage from './components/MainPage/MainPage';
import Dashboard from './components/Dashboard/Dashboard';
import SideBar from "./components/SideBar/Sidebar";


class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      data: {}
    };
  }

  render() {

    return (
      <BrowserRouter>
        <SideBar/>
        <Switch>
          <Route path="/" exact>
            <MainPage/>
          </Route>

          <Route path="/dashboard" exact>
            <Dashboard />
          </Route>
        </Switch>
      </BrowserRouter>
    );
  }
}

const mapStateToProps = state => {
  return {};
};

export default connect(mapStateToProps, null)(App);