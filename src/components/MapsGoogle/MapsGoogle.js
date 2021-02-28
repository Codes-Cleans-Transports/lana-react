import React, { createRef } from "react";
import GoogleMap, {GoogleApiWrapper, Marker, InfoWindow} from "google-maps-react";
import { connect } from "react-redux";

import './MapsGoogle.css';

const LoadingContainer = props => <div>Loading...</div>;

class MapsGoogle extends React.Component {

    constructor(props){
        super(props)
        this.mapRef = createRef();
        
        this.state = {
            showingInfoWindow: false,
            activeMarker: {},
            zoom: 0,
            zoomIndex:0
        }

        this.onZoomChanged = this.onZoomChanged.bind(this)
    }

    onComponentMount(){
        this.setState({
            zoom: this.props.zoom
        })
    }

    onZoomChanged = prevState => {
        this.setState({
          zoom: this.mapRef.current.map.zoom
        });

        console.log(this.getZoomIndex());
      };


    onMarkerClick = (props, marker, e) => {
        this.setState({
            activeMarker: marker,
            showingInfoWindow: true
        });
    }

    getZoomIndex(){
        const zoomLevel = [7, 11, 12, 13, 14, 15]

        let i = 0
        while(i < zoomLevel.length && zoomLevel[i] <= this.state.zoom){
            i++;
        }

        if(i === 0) return 0;
        return i - 1;
    }

    data = [
        [
            {id: 1 , lat: 42.1, lng: 32 , per: 2},
            {id: 2 , lat: 43, lng: 32, per: 50},
            {id: 3 , lat: 42, lng: 33 , per: 69}
        ],
        [
            {id: 4 , lat: 42.1, lng: 32 , per: 2},
            {id: 5 , lat: 43, lng: 31.9, per: 40},
            {id: 6 , lat: 42.004, lng: 33 , per: 69}
        ]
    ]

    render(){
        return (
            <GoogleMap style={{height: '70%', margin:'auto', marginTop:'.5rem', marginLeft: '15%', marginRight: '3rem'}}
                google={this.props.google}
                zoom={this.props.zoom}
                initialCenter={ this.props.center }
                onZoomChanged={this.onZoomChanged}
                ref={this.mapRef}
            >
    
                {this.data[0].map( marker => 
                    <Marker 
                        key={marker.id}
                        position= {{lat: marker.lat, lng:marker.lng }} 
                        data={marker.per} 
                        onClick={this.onMarkerClick}
                    />)
                }
    
                <InfoWindow
                    marker={this.activeMarker}
                    visible={this.showingInfoWindow}>
                </InfoWindow>
            </GoogleMap>
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