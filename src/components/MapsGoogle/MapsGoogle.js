import React, { useState } from "react";
import Map, {GoogleApiWrapper, Marker, InfoWindow} from "google-maps-react";
import { connect } from "react-redux";

import './MapsGoogle.css';

const LoadingContainer = props => <div>Loading...</div>;

function MapsGoogle(props) {

    const [showingInfoWindow, setShowingInfoWindow] = useState(false);
    const [activeMarker, setActiveMarker]           = useState({});


    const data = [
        {id: 1 , lat: 42.1, lng: 32 , per: 2},
        {id: 2 , lat: 43, lng: 32, per: 50},
        {id: 3 , lat: 42, lng: 33 , per: 69}
    ]

    const onMarkerClick = (props, marker, e) => {
        setActiveMarker(marker);
        setShowingInfoWindow(true);
    }

       
    return (
        <Map style={{height: '70%', margin:'auto', marginTop:'.5rem', marginLeft: '15%', marginRight: '3rem'}}
            google={props.google}
            zoom={props.zoom}
            initialCenter={ props.center }
        >

            {data.map( marker => 
                <Marker 
                    key={marker.id}
                    position= {{lat: marker.lat, lng:marker.lng }} 
                    data={marker.per} 
                    onClick={onMarkerClick}
                />)
            }

            <InfoWindow
                marker={activeMarker}
                visible={showingInfoWindow}>
                                            
                <div>
                    {activeMarker.data}
                </div>
            </InfoWindow>
            
        </Map>
    )
    
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