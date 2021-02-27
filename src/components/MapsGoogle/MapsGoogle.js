import React, { Component } from "react";
import Map, {GoogleApiWrapper, Marker, InfoWindow} from "google-maps-react";
import { connect } from "react-redux";

//import CustomMarker from "../CustomMarker/CustomMarker";

const LoadingContainer = props => <div>Loading...</div>;

//const PERCENTAGE = 90;

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

    data = [
        {id: 1 , lat: 42.1, lng: 32 , per: 2},
        {id: 2 , lat: 43, lng: 32, per: 50},
        {id: 3 , lat: 42, lng: 33 , per: 69}
    ]

    onMarkerClick = (props, marker, e) => {
        this.setState({
            selectedPlace: props,
            activeMarker: marker,
            showingInfoWindow: true
        });
    }

    render(){
        const markers = this.data.map( marker => 
            <Marker 
                key={marker.id}
                position= {{lat: marker.lat, lng:marker.lng }} 
                data={marker.per} 
                onClick={this.onMarkerClick}
            />
        )   

        return (
            <Map
                google={this.props.google}
                style={{ width: "60%", height: "60%" }}
                zoom={this.props.zoom}
                initialCenter={ this.props.center }
            >

                {markers}

                <InfoWindow
                    marker={this.state.activeMarker}
                    visible={this.state.showingInfoWindow}>
                                               
                    <div>
                        {this.state.activeMarker.data}
                    </div>
                </InfoWindow>
                
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