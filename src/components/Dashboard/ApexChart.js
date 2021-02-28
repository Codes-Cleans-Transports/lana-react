import React, { Component } from "react";
import { Row, Col, Card, CardBody } from "reactstrap";

// import apexChart, import react-scroll
import LineApexChart from "./chartapex";
import ReactList from 'react-list';

class ApexChart extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }

  render() {
    return (
      <React.Fragment>
        <div style={{marginLeft: "15%"}} className="container-fluid">
          <Row>
            <Col lg={6}>
              <Card>
                <CardBody>
                  <h4 className="card-title mb-4">Line Chart</h4>

                  <LineApexChart type="histogram" series={this.props.series} />
                </CardBody>
              </Card>
            </Col>
            <Col>
            <Card>
              <CardBody>
                <ReactList>
                <div style={{height: 300, overflow: 'auto'}} onScroll={this.handleScroll}></div>
                </ReactList>
              </CardBody>
            </Card>
            </Col>
          </Row>
        </div>
      </React.Fragment>
    );
  }
}

export default ApexChart;