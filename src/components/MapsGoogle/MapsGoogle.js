import React, { Component } from "react";
import { Map, /*InfoWindow, Marker,*/ GoogleApiWrapper } from "google-maps-react";
import { connect } from "react-redux";

const LoadingContainer = props => <div>Loading...</div>;

class MapsGoogle extends Component{
    constructor(props) {
        super(props)
        this.state = {
            showingInfoWindow: false,
            activeMarker: {},
            selectedPlace: {}
        }

        this.onMarkerClick = this.onMarkerClick.bind(this);
    }

    onMarkerClick(props, marker, e) {
        alert("You clicked in this marker");
    }

    render(){
        return (
            <Map
                google={this.props.google}
                style={{ width: "60%", height: "60%" }}
                zoom={14}
                center={ {lat: 42.698334, lng: 23.319941} }
            >
            </Map>
        )
    }
}

export default connect(
    null,
    {}
  )(
    GoogleApiWrapper({
      apiKey: "AIzaSyAgDaE4NFd8sMeOAPVrM5rlDDi94OLwNck",
      LoadingContainer: LoadingContainer,
      v: "3"
    })(MapsGoogle)
  );