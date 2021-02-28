import React, { createRef } from "react";
import Map, {GoogleApiWrapper, Marker, InfoWindow} from "google-maps-react";
import { connect } from "react-redux";

import './MapsGoogle.css';

const DOMAIN = 'http://54.93.247.80:8080/'
const CLUSTERS = DOMAIN + 'clusters/'

const LoadingContainer = props => <div>Loading...</div>;

class MapsGoogle extends React.Component {

    constructor(props){
        super(props)
        this.mapRef = createRef();
        
        this.state = {
            showingInfoWindow: false,
            activeMarker: {},
            zoom: 0,
            zoomIndex:0,
            group: 0,
            fetched: false,
            data: []
        }

        this.onZoomChanged = this.onZoomChanged.bind(this)
    }


    componentDidMount(){
        this.setState({
            zoom: this.props.zoom,
            group: this.props.group
        })

        console.log(this.state.group);

        fetch(CLUSTERS + (this.state.group ) + '/')
            .then(response => response.json())
            .then(cluster => {
                this.setState({
                    data: cluster,
                    fetched: true
                })

                console.log("fetched")
            })

    }

    

    onZoomChanged = prevState => {
        this.setState({
          zoom: this.mapRef.current.map.zoom,
          zoomIndex: this.getZoomIndex()
        });
    };


    onMarkerClick = (props, marker, e) => {
        this.setState({
            activeMarker: marker,
            showingInfoWindow: true
        });
    }


    getZoomIndex(){
        const zoomLevel = [20, 15, 14, 13, 12, 11, 7]

        let i = 0
        while(i < zoomLevel.length && zoomLevel[i] >= this.state.zoom){
            i++;
        }

        if(i === 0) return 0;
        return i - 1;
    }      

    render(){
        return (
            <Map style={{height: '70%', margin:'auto', marginTop:'.5rem', marginLeft: '15%', marginRight: '3rem'}}
                google={this.props.google}
                zoom={this.props.zoom}
                initialCenter={ this.props.center }
                onZoomChanged={this.onZoomChanged}
                ref={this.mapRef}
            >
                {this.state.fetched ? this.state.data[this.state.zoomIndex].map( marker => 
                    <Marker 
                        key={marker.id}
                        position= {{lat: marker.x, lng:marker.y }} 
                        data={marker.average_uptime} 
                        onClick={this.onMarkerClick}
                    />) 
                    : null
                }
    
                <InfoWindow
                    marker={this.state.activeMarker}
                    visible={this.state.showingInfoWindow}>
                    {this.state.activeMarker.data}                    
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